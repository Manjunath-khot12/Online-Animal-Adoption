<?php
$conn=mysqli_connect('localhost','root','','oaa1');
session_start();
ob_start();

if(isset( $_SESSION['phone']))
{
	$phone=$_SESSION['phone'];
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>zoo adopt page</title>
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
		<li class="active"><a href="#">Adopt</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="Adopt-now.php">Adopt Now</a></li>
		            <li><a style="color:white;" href="view-adoption.php">View Adoption</a></li>
				</ul>
		  </div>
		</li>
		
		<li><a href="donate.php">Donate</a></li>
		
		
		
		<li><a  href="give-feedback.php">Feedback</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a href="give-feedback.php" >Give</a></li>
		            <li><a  style="color:white;" href="view-feedback.php">View</a></li>
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
 

 <!--our animals-->
<section class="products" id="products">
<h1 class="heading">Zoo <span> Animals</span></h1>
   <h2><a class="back-link" href="Adopt-now.php"><i class="fa fa-arrow-left"></i></a></h2>
<div class="product-slider">
<?php   

$sql="select * from animal";
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res))
{

?>
<div class="wrapper">

<div class="box">
  <h3> HF-Cow</h3>
  <input type="hidden" name="a_id" value=<?php echo $row['a_id'];?>"/>
  <?php echo '<img src="data:imgage/jpeg;base64,'.base64_encode($row['image']).'"width="360px" height="700"/>';?>
  <div class="price">Animal daily charge:$24.99/-</div>
  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half"></i>
 </div>
 <a href="adoption-form.php" class="btn">ADOPT</a>
 </div>
 
 
 </div>
 <?php
}
 ?>
 </div>
 
 </section>
 
 
 <!--our animals ends-->

 <!..home section end..>
 
 
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