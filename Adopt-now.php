<?php
session_start();
ob_start();
$conn=mysqli_connect('localhost','root','','oaa1');
if(isset( $_SESSION['phone']))
{
	$phone=$_SESSION['phone'];
?>
<?php
	$sql="select * from animal where type='zoo' ";
	$res=mysqli_query($conn,$sql);
	$zoo=mysqli_num_rows($res);
	
	
	$sql1="select * from animal where type='cowshed' ";
	$res1=mysqli_query($conn,$sql1);
	$cowshed=mysqli_num_rows($res1);
	
	$sql2="select * from adopt where acat='cowshed'";
	$res2=mysqli_query($conn,$sql2);
	$adopter=mysqli_num_rows($res2);
	
	$sql3="select * from adopt where acat='zoo'";
	$res3=mysqli_query($conn,$sql3);
	$adopter1=mysqli_num_rows($res3);


?>
 

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>adopt-now page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/Adopt-now.css" rel="stylesheet" type="text/css" media="all" />

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
					<li><a style="color:white;" href="#">Adopt Now</a></li>
		            <li><a style="color:white;" href="view-adoption.php">View Adoption</a></li>
				</ul>
		  </div>
		</li>
		
	<li class=""><a href="donate.php">Donate</a>

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
					<li><a href="give-feedback.php" style="color:white;" >Give</a></li>
		            <li><a  style="color:white;" href="view-feedback.php" >View</a></li>
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
 


 <!..home section end..>
 <!..features section starts..>

 
  <section class="products" id="products">
 <h1 class="heading">Adopt <span>Now</span></h1>
 <div class="product-slider">
 <div class="wrapper">
 <div class="box">
  <a href="#"><img src="IMAGES3/cow11.jpg" alt="" style="width:100%"></a><br>
  <h3>Shri Dhuradudeshawar Cowhsed</h3>
   <div class="price">  <i class="fas fa-map-marker-alt"> BELAGAVI</i></div>
  <div class="price"><i class="fas fa-align-justify">   Total Cows:<?php echo $cowshed;?></i></div>
  <div class="price" style="float:left;margin-left:50px;">  <i class="fas fa-handshake"> <?php echo $cowshed;?> Available</i></div>
  <div class="price">  <i class="fas fa-heart"> <?php echo $adopter;?>  Adopted</i></div>

  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half-alt"></i>
 </div>
 <a href="adopt.php?type=Cowshed" class="btn">View Cows</a>
 </div>
  <div class="box">
  <a href="#"><img src="IMAGES3/zoo2.png" alt=""></a><br>
  <h3>Shri Dhuradudeshawar Zoo</h3>
     <div class="price">  <i class="fas fa-map-marker-alt"> BELAGAVI</i></div>
    <div class="price"><i class="fas fa-align-justify">   Total Animals:<?php echo $zoo;?></i></div>
  <div class="price" style="float:left;margin-left:50px;">  <i class="fas fa-handshake"> <?php echo $zoo;?> Available</i></div>
  <div class="price">  <i class="fas fa-heart"> <?php echo $adopter1;?> Adopted</i></div>

  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half-alt"></i>
  <i class="fas fa-star-half-alt"></i>
 </div>
 <a href="adopt.php?type=Zoo" class="btn">View Animals</a>
 </div>

 </div>
 </div>
 </section>
 
 
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