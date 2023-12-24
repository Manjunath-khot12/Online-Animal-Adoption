<?php
session_start();
// database connection
$conn=mysqli_connect('localhost','root','','oaa1');

?>




<!DOCTYPE html>
<html lang="en">
<head>
<script>
window.history.forward();
</script>
	<meta charset="UTF-8">
	<title>Loginpage</title>
	<link rel="stylesheet" href="CSS/admin.css">
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="js/ak.js"></script>

</head>
<nav class="navbar">
		<img class="logo" src="IMAGES/Logop.png">

				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a href="about-us.php">About</a></li>
					<li><a href="contact-us.php">Contact</a></li>
					<li><a href="sign-up.php">Sign-up</a></li>
					<li><a class="active"  href="Login.php" >Sign-in</a></li>

				</ul>

</nav>

<body>
<div class="container">
<div class="Signin-signup">

<form action="" class="sign-in-form" method="POST" autocomplete="off">
<h2 class="title">Sign-in</h2>

<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="username" name="username">
</div>

<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="password" name="password">

</div>

<span style="margin-left:250px;margin-top:20px;"><a href="Forgetpw.php">Forget password</a></span>

<input type="submit"value="Login" class="btn" name="login" ><br><br>

<p class="social-text">or sign in with social platform</p><br>
<div class="social-media">
<a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
<a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
<a href="#" class="social-icon"><i class="fab fa-google"></i></a>
<a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
</div>
</form><br><br>



</div>




<div class="panels-container">

<div class="panel">
<div class="content">
   <h2><a class="back-link" href="Login.php"><i class="fa fa-arrow-left"></i></a></h2>

<h3>Welcome To Admin Login Page</h3>
<p> </p>
<button class="" id="sign-in-btn"><a href="admin.php"></a></button>
</div>
<img src="IMAGES/signup.svg" alt="" class="image">

</div>




</div>
</div>



  <footer>
  <p>&copy; 2023 Online Animal Adoption. All rights reserved | Design by Animal Adoption (Mob-1234).</p>
</footer> 


</body>
</html>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	 $password=$_POST['password'];
	 
	 $sql="select * from login where username='$username' and password='$password'";
	 $result=mysqli_query($conn,$sql);
	 $row=mysqli_num_rows($result);
	 if($row==1)
	 {
		 $_SESSION['username']=$username;
		 header('location:ADMIN/k.php');
		 exit;
	 }
	 else
	 {
		  echo "<script>";
		 echo "swal('sorry !!!','Invalid Username or Password','info')";
		 echo "</script>";
	 }
}
?>