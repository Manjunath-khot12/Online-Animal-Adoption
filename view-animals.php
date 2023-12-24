<?php
session_start();
ob_start();

$conn=mysqli_connect('localhost','root','','oaa1');
if(isset( $_SESSION['username']))
{
	$username=$_SESSION['username'];
?>

<html>
	<head>
		<title>Admin Home Page</title>
		<link rel="stylesheet" type="text/css" href="CSS2/k.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
				<script src="../js/ak.js"></script>
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
		  		  <li> <a class="item" href="queries.php"> queries</a></li>

		  
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
          <th>Sl</th>
          <th>Image</th>
          <th>NAME</th>
          <th>TYPE</th>
          <th>GENDER</th>
          <th>DATE OF BIRTH</th>
          <th>LIFE TIME</th>
          <th>AGE</th>
          <th>BREED</th>
          <th>Amount</th>
          <th>STATUS</th>
        </tr>
      </thead>
<?php
$sql="select * from animal";
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
if($rows<1)
{
	echo "<tr>";
	echo"<td colspan='9'><center>No data found</center></td>";
	echo"</tr>";
}
else
{
	$sl=1;
	while($row=mysqli_fetch_array($res))
	{
?>
<?php
if(isset($_POST['update']))
{
	$Aname=$_POST['Aname'];
	$a_id=$_POST['a_id'];
	$aage=$_POST['aage'];
	$amount=$_POST['amount'];
    $sql2="update animal set aname='$Aname',age='$aage',amount='$amount' where a_id='$a_id'";
	$res2=mysqli_query($conn,$sql2);
     if($res2)
	 {
		 echo "<script>";
		echo "swal('Good','Animal information updated','success')";
		echo "</script>";
				header('Refresh:1');

	 }
	 else{
		 echo "<script>";
		echo "swal('animal added successfully','','success')";
		echo "</script>";
	 }
}


?>
<?php
if(isset($_POST['delete']))
{
	
	$a_id=$_POST['a_id'];
    $sql3="delete from animal  where a_id='$a_id'";
	$res3=mysqli_query($conn,$sql3);
     if($res3)
	 {
		 echo "<script>";
		echo "swal('Good','Animal information deleted','success')";
		echo "</script>";
						header('Refresh:1');

	 }
	 else{
		 echo "<script>";
		echo "swal('animal added successfully','','error')";
		echo "</script>";
	 }
}


?>
      <tbody>
        <tr>
		<form method="POST"   enctype="multipart/form-data">
		<input type="text" name="a_id" value="<?php echo $row['a_id'];?>" hidden >
          <td><?php echo $sl;?></td>
          <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"width="425px" height="280px"/>';?></td>
          <td><input type="text" name="Aname" value="<?php echo $row['aname'];?>"></td>
          <td><?php echo $row['type'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['date'];?></td>
          <td><?php echo $row['lifetime'];?></td>
          <td><input type="text" name="aage" value="<?php echo $row['age'];?>"></td>
          <td><?php echo $row['breed'];?></td>
          <td><input type="text" name="amount" value="<?php echo $row['amount'];?>"></td>
          <td>
            <span class="action_btn">
			             <button name="update">   <a style="color:black;" name="update" >UPDATE</a></button>
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
?>