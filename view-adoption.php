<?php
$conn=mysqli_connect('localhost','root','','oaa1');

session_start();
ob_start();

if(isset( $_SESSION['username']))
{
	$username=$_SESSION['username'];
?>

<html>
	<head>
		<title>Admin Home Page</title>
		<link rel="stylesheet" type="text/css" href="CSS2/k.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
				<script src="../js/ak.js"></script>
	</head>
	
	
	<body>
	 <div class="side-bar">
	     <div class="logo-content">
	   <div class="logo">
	   <i id="icon-home" class="fa fa-home"></i>
	   <div class="icon-name">Admin</div>
	   </div>
	   <span id="btn"><i class="fa fa-bars"></i></span>
	   </div>
	   <div class="profile-content">
	   <div class="profile">
	   <div class="profile-details">
	   <img src="IMAGES1/admin.jpg" alt="">
	   <div class="name-job">
	   <div class="name">Manju Khot</div>
	   <div class="email">Manju12@gmail.com</div>
	   </div>
	   </div>
	   </div>
	   </div>
	      <hr>
	   <!--Profile CODE ENDED HERE-->
	    <div class="item"><a href="k.php"><i class="fa fa-th-large"></i>Dashborad</a></div>
	    <div class="item"><a class="dropdown-toggle"><i class="fa fa-user"></i>Animal<i class="fas fa-chevron-down"></i></a>
		
		
		<ul class="dropdown">
		  <li> <a class="item" href="add-animals.php"> Add Animal</a></li>
		   <li><a class="item" href="view-animals.php"> View Animal</a></li>
		</ul>
		</div>
		
		<div class="item"><a class="dropdown-toggle"><i class="fa fa-user"></i>Adopt Animal<i class="fas fa-chevron-down"></i></a>
		
		
		<ul class="dropdown">
		  <li> <a class="item" href="view-adoption.php"> View Adoption Details</a></li>
		  
		</ul>
				</div>

		
		<div class="item"><a class="dropdown-toggle"><i class="fa fa-users"></i>Donate Animal<i class="fas fa-chevron-down"></i></a>
		
		
		<ul class="dropdown">
		  <li> <a class="item" href="view-request.php">  View Requests</a></li>
		   
		</ul>
				</div>

		<div class="item"><a class="dropdown-toggle"><i class="fa fa-user-circle"></i>User<i class="fas fa-chevron-down"></i></a>
		
		
		<ul class="dropdown">
		  <li> <a class="item" href="view-user.php"> View  Users</a></li>
		  
		</ul>
				</div>

		
		<div class="item"><a class="dropdown-toggle"><i class="fas fa-home"></i>Feedback<i class="fas fa-chevron-down"></i></a>
		
		
		<ul class="dropdown">
		  <li> <a class="item" href="view-feedback.php"> view/reply</a></li>
		  
		</ul>
		
		
		</div>
	    
		 <div class="item"><a class="dropdown-toggle"><i class="fa fa-key"></i>Settings<i class="fas fa-chevron-down"></i></a>
	
		<ul class="dropdown">
		  <li> <a class="item" href="change-password.php"> Change Password</a></li>
		   <li><a class="item" href="../index.php"> Logout</a></li>
		</ul>
		</div>

	</div>
	
	
	
	 	

<div class="table_responsive">
    <table>
	
      <thead>
        <tr>
          <th>SI</th>
          <th>ADOPTER NAME</th>
          <th>Email</th>
          <th>phone</th>
          <th>Animal Name</th>
          <th>GENDER</th>
          <th>LIFETIME</th>
          <th>AGE</th>
          <th>Type</th>
          <th>Year</th>
          <th>A-date</th>
          <th>Amount</th>
          <th>PAYMENT STATUS</th>
          <th> STATUS</th>
        </tr>
      </thead>

      <tbody>
        <tr>
		<?php
$sql="select * from adopt";
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
if($rows<1)
{
	echo "<tr>";
	echo"<td colspan='11'><center>No data found</center></td>";
	echo"</tr>";
}
else
{
	$sl=1;
	while($row=mysqli_fetch_array($res))
	{
?>		
		<form method="POST">

       	<input type="text" name="a_id" value="<?php echo $row['a_id'];?>" hidden>

          <td><?php echo $sl;?></</td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['mail'];?></td>
          <td><?php echo $row['phone'];?></td>
          <td><?php echo $row['aname'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['lifetime'];?></td>
          <td><?php echo $row['age'];?></td>
          <td><?php echo $row['acat'];?></td>
          <td><?php echo $row['year'];?></td>
          <td><?php echo $row['adate'];?></td>
          <td><?php echo $row['price'];?></td>
           <td><?php echo $row['status'];?></td></a>
		    <td>
            <span class="action_btn">
			<button name="delete">   <a style="color:black;" name="delete" >DELELE</a></button>
            </span>
          </td>
		 		</form>

        </tr>
		       
		
		
		      </tbody>
			  <?php
$sl=$sl+1;
	}
}
?>
    </table>
  </div>


	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--end home content-->

	
	
	

	

	 
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"/></script>
	
	<script>
	$(document).ready(function() 
	{
            $('.dropdown-toggle').click(function() 
            { 
                $(this).next('.dropdown').slideToggle();
           });
       });
	
	</script>
	
	</body>
</html>

<?php
}
else
{
	header('location:../admin.php');
}

if(isset($_POST['delete']))
{
    $a_id=$_POST['a_id'];
    $sql2="delete from adopt  where a_id='$a_id'";
	$res2=mysqli_query($conn,$sql2);
     if($res2)
	 {
		echo "<script>";
		echo "swal('Good','reply is deleted','success')";
		echo "</script>";
						header('Refresh:1');

	 }
	 else{
		 		echo "<script>";
		echo "swal('Opps!!!','reply is not deleted','error')";
		echo "</script>";
	 }
		 
}
	?>	


