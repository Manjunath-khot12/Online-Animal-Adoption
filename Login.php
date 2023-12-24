
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
	<link rel="stylesheet" href="CSS/Login.css">
	  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
			<script src="validate.js"></script>
							<script src="js/ak.js"></script>




</head>

<body>
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

<div class="container">
<div class="Signin-signup">
<form method="POST" name="myForm" onsubmit="return formValidate()" autocomplete="off">
<h2 class="title">User Sign-in</h2>

<div class="input-field">
<i class="fas fa-user"></i>
<input type="text" placeholder="username" name="phone" id="phone">
</div>

<div class="input-field">
<i class="fas fa-lock"></i>
<input type="password" placeholder="password" name="password">

</div>
<span class="span"><a class="a" href="sign-up.php">Register here!--</a></span>

<span><a href="Forgetpw.php">Forget password?</a></span>

<input type="submit"value="Login" class="btn" name="login"><br><br>

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
<div class="panel right-panel">
<div class="content">
<h3>If You are a Admin</h3>
<p>Click The Below Button For Admin Login</p>
<a href="admin.php"><input type="submit" name="login" value="LOGIN" class="btn"></a>
</div>
<img src="IMAGES/signin.svg" alt="" class="image">
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
	$phone=$_POST['phone'];
	$password=$_POST['password'];
		
		$sql="select * from users where phone='$phone' and pass='$password'";
		$result=mysqli_query($conn,$sql);
		$rows=mysqli_num_rows($result);
		if($rows==1)
		{
			$_SESSION['phone']=$phone;
			header('location:USER/userh.php');
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