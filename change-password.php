
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
		<title>admin change Page</title>
		<link rel="stylesheet" type="text/css" href="CSS2/k.css">
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
	
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	<!--end home content-->

<div class="Main-div1" style="margin-left:500px;">
		<div class="feedback-header">	
         <h3>Change Password</h3>
		</div>	
        <div class="container">
		    <form method="POST">
			<label>Old Password</label>
			<input class="input-field" type="text" name="oldpass" placeholder="Old Password"/><br>
			
			<label>New Password</label>
			<input  class="input-field" type="password" name="newpass" placeholder="New Password"/><br>
			
            <label>Confirm Password</label>
			<input  class="input-field" type="password" name="confpass" placeholder="Confirm Password"/>
			<br>
			<br>
			<br>
			<a href="userh.php"><input  style="margin-left:-50px;top:50px;" type="submit" name="change" value="CHANGE"/></a>
			<a href="#"><input style="top:50px;"  type="reset"  value="CLEAR"/></a>
        
			</form>
		</div>
		
	  </div>
 
 
 
 <?php
 if(isset($_POST['change']))
 {
$sql="select * from login where username='$username'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
$dbpass=$row['password'];
$oldpass=$_POST['oldpass'];
$newpass=$_POST['newpass'];
$confpass=$_POST['confpass'];
 if($dbpass == $oldpass)
 {
	 if($dbpass!=$newpass && $newpass==$confpass)
	 {
		 $sql1="update login set password='$newpass' where username='$username'";
		 $res=mysqli_query($conn,$sql1);
		 if($res)
		 {
	       echo "<script>";
		   echo "swal('Good','the new password is changed','success')";
		   echo "</script>";
		   header('location:../logout.php','refresh:5');
	     }
	 }
	   else
	     {
		echo "<script>";
		echo "swal('Opps!!!','the old password and new password are same  or  confirm password is does not matched','info')";
		echo "</script>";
	     }
 }	 
	 else
	 {
		echo "<script>";
		echo "swal('sorry','enter old password correctly','error')";
		echo "</script>";
	 }
 
 }

 
 ?>
 
 
 
 
 
 
 
	
	
	

	

	 
	
	
	
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