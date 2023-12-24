
<?php
session_start();
ob_start();

$conn=mysqli_connect('localhost','root','','oaa1');
if(isset( $_SESSION['phone']))
{
	$phone=$_SESSION['phone'];
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>view adoption page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/adopt.css" rel="stylesheet" type="text/css" media="all" />

 <script src="JS3/user.js"></script>
 </head>
 <body>
 <!..header section starts..>
 
 <header class="header">
 <a href="#" class="logo"><img src="IMAGES3/Logopny1..png"/></a>
 <nav class="navbar">
 <ul id="menu">
		<li><a href="userh.php">Home</a></li>
		<li class=""><a href="#">Adopt</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="Adopt-now.php">Adopt Now</a></li>
		            <li><a style="color:white;" href="view-adoption.php">View Adoption</a></li>
				</ul>
		  </div>
		</li>
		
	<li class="active"><a href="#">Donate</a>

		<div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="donate.php">Donate Amount</a></li>
		            <li><a style="color:white;" href="donate-view.php">View Donate  Amount</a></li>
				</ul>
		  </div>
		</li>		
		
		
		<li><a  href="give-feedback.php">Feedback</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a href="give-feedback.php" style="color:white;">Give</a></li>
		            <li><a   href="view-feedback.php"  style="color:white;" >View</a></li>
				</ul>
		  </div>
		</li>
		
		<li><a href="">Settings</a>
		 <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="user-profile.php">Profile</a></li>
		            <li><a style="color:white; " href="change-password.php">Change password</a></li>
		            <li><a style="color:white;" href="../logout.php">logout</a></li>
				</ul>
		  </div>
		
		</li>
		
	</ul>
	
 </nav>
 </header>
  <script src="JS3/script.js"></script>
 <!..header section ends..>
 
 
 
 <!..home section starts..>

 
 <h1 class="heading"> View <span> Adoption</span></h1>
     <h2><a class="back-link" href="Adopt-now.php"><i class="fa fa-arrow-left"></i></a></h2>
 
 
 
 
 <div class="table_responsive">
    <table>
	
      <thead>
        <tr>
          <th>Sl</th>
          <th>NAME</th>
          <th>EMAIL</th>
          <th>PHONE</th>
          <th>ADDRESS</th>
		  		  <th>Gender</th>

          <th>AGE</th>
		  <th>Amount</th>
          <th>STATUS</th>
        </tr>
      </thead>
<?php
$sql="select * from donate where phone='$phone'";
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
if($rows<1)
{
	echo "<tr>";
	echo"<td colspan='10'><center>No data found</center></td>";
	echo"</tr>";
}
else
{
	$sl=1;
	while($row=mysqli_fetch_array($res))
	{
?>
      <tbody>
        <tr>
          <td><?php echo $sl;?></td>
          <td><?php echo $row['name'];?></td>
          <td><?php echo $row['mail'];?></td>
          <td><?php echo $row['phone'];?></td>
          <td><?php echo $row['address'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['age'];?></td>
          <td><?php echo $row['amount'];?></td>
          <td>
            <span class="action_btn">
              <a href="#">Donated</a>
            </span>
          </td>
        </tr>
		
		      </tbody>
<?php
$sl=$sl+1;
	}
}
?>
    </table>
  </div>

 
 
<!--scrool to top button-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<!--scrool to top button code end-->






 </body>
 </html>
 <?php
}
else
{
	header('location:../login.php');
}
?>