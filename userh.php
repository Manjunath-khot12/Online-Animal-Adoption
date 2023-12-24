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
<title>user home page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/userh.css" rel="stylesheet" type="text/css" media="all" />
<link href="CSS3/userh.css" rel="stylesheet" type="text/css" media="all" />
 <script src="JS3/user.js"></script>
 <style>
 .btn:hover
{
	background-color:var(--orange);
	color:#fff;
	transform:scale(2);
}

 </style>
 </head>
 <body>
 <!..header section starts..>
 
 <header class="header">
 <a href="#" class="logo"><img src="IMAGES3/Logopny1..png"/></a>
 <nav class="navbar">
 <ul id="menu">
		<li class="active"><a href="">Home</a></li>
		<li><a href="Adopt-now.php">Adopt</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="Adopt-now.php">Adopt Now</a></li>
		            <li><a style="color:white;" href="view-adoption.php">View Adoption</a></li>
				</ul>
		  </div>
		</li>
				<li><a href="donate.php">Donate</a>

		
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
		            <li><a  style="color:white;" href="view-feedback.php"  >View</a></li>
				</ul>
		  </div>
		</li>
		
		<li><a href="">Settings</a>
		 <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="user-profile.php">Profile</a></li>
		            <li><a style="color:white; " href="change-password.php">Change password</a></li>
		            <li><a style="color:white;"  href="../logout.php">logout</a></li>
				</ul>
		  </div>
		
		</li>
		
	</ul>
	
 </nav>
 </header>
  <script src="JS3/script.js"></script>
  
 <!..header section ends..>
 
 <!..home section starts..>
 
 <section class="home" id="home">
 <div class="content">
 <h3>your Lovely and <span>faviorate </span> Animals for Adoption</h3>

 <a href="Adopt-now.php" class="btn">Adopt now</a>
 </div>
 </section>

 <!..home section end..>
 
 <!..features section starts..>
 <section class="features" id="features" style="margin-left:105px;">
 <h1 class="heading">our<span>features</span></h1>
 <div  class="box-container">
 <div class="box">
 <img src="IMAGES3/cow11.jpg" alt="" style="border-radius:2px;">
 <h3><i class="fas fa-handshake"></i>  Zoo And Cowshed Animals</h3>
 <p>You Can Adopt Both Zoo And Cowshed Animals In This One Website </p>
 <a href="#" class="btn">read more</a>
 </div>
 <div class="box">
 <img src="IMAGES3/d.png" alt="" style="width:300px; height:180px;" >
 <h3><i class="fas fa-user-circle"></i>  User Friendly Adoption</h3>
 <p>You Can Adopt Which Animals You Want</p>
 <a href="#" class="btn">read more</a>
 </div>
 <div class="box">
 <img src="IMAGES3/payment.png" alt="" style="border-radius:25px;">
 <h3><i class="fas fa-credit-card"></i> Easy payments</h3>
 <p>You Can Pay Through The Online Payment Mode Such Has Phone-pay,Google-pay etc</p>
 <a href="#" class="btn">read more</a>
 </div>
 </div>
 </section>
 
 <!..features section ends..>
 <?php
	$sql="select * from animal where type='zoo' ";
	$res=mysqli_query($conn,$sql);
	$zoo=mysqli_num_rows($res);
	
	
	$sql1="select * from animal where type='cowshed' ";
	$res1=mysqli_query($conn,$sql1);
	$cowshed=mysqli_num_rows($res1);

 
 ?>
 <!--animals Categaries-->
  <section class="products1" id="products1" >
 <h1 class="heading">Animlas<span>Categaries</span></h1>
 <div class="product-slider1">
 <div class="wrapper1">
 <div class="box1">
  <img style="width:210px;"src="IMAGES3/cow11.jpg" alt="" style="border-radius:2px;">
  <h3>Shri Dhuradudeshawar Cowhsed</h3>
  <div class="price">Total Cows:<?php echo $cowshed;?></div>
  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half-alt"></i>
 </div>
 <a href="adopt.php?type=Cowshed" class="btn">Adopt-Now</a>
 </div>
  <div class="box1">
  <img src="IMAGES3/zoo2.png" alt="" style="border-radius:5px;"><br><br>
  <h3>Shri Dhuradudeshawar Zoo</h3>
  <div class="price">Total Animals:<?php echo $zoo;?></div>
  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half-alt"></i>
  <i class="fas fa-star-half-alt"></i>
 </div>
 <a href="adopt.php?type=Zoo" class="btn">Adopt-Now</a>

 </div>

 </div>
 </div>
 </section>
  
<!--animals Categaries ends-->
 
<!--our animals-->
<section class="products" id="products">
<h1 class="heading">Our <span> Animals</span></h1>
<div class="product-slider" style="width:105%;display:flex;overflow:hidden;" >
<div class="wrapper"  style="display:flex;">
<?php   
$sql="select * from animal ";
$res=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res))
{
?>

<div class="box"  style="margin-right:15px;margin-left:-25px;">

  <h3> </h3>
  <input type="hidden" name="a_id" value=<?php echo $row['a_id'];?>"/>
  <?php echo '<img src="data:imgage/jpeg;base64,'.base64_encode($row['image']).'"width="386px" height="200px" "/>';?>
  <div class="price">Animal Name:<?php echo $row['aname'];?></div>
  <div class="price">Age:<?php echo $row['age'];?>Year old</div>
  <div class="stars">
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star"></i>
  <i class="fas fa-star-half"></i>
 </div>
 <a href="view-more.php?a_id=<?php echo $row['a_id'];?>" class=""></a>
  <div class="buy">
           <?php
		   if($row['qunt']==0)
		   {
			 ?>
             <a class="btn" style="background-color:lightblue;pointer-events:none;" href="adoption-forn.php?a_id=<?php echo $row['a_id']; ?>">Adopted</a>
            <?php			 
		   }
		   else
		   {
			  ?>
           <a class="btn" style="margin-top:1rem;display:inline-block;padding:1rem 2rem;font-size:1.4rem;border-radius:.5rem;border:.2rem solid var(--black);color:var(--black);cursor:pointer;background:none;"href="view-more.php?a_id=<?php echo $row['a_id']; ?>">Adopt Now</a>
            <?php			
			   
		   }
		   
		   ?>
		   
		   </div>
 </div>
 <?php
}
 ?>
 
 </div>
 </div>
 
 </section>
<center> <a href="Adopt-now.php" class="btn">Show More</a></center>

 <!--our animals ends-->
 <!-- footer section-->
 <section class="footer">
 <div class="box-container">
 <div class="box">
 <h3>Animal Adoption<img src="IMAGES3/Logopny1..png"></h3>
 <p>vaxsmnbsabxnbznBxb  xjagxjAXn Cz nmGXMNXCN  MNXAXA XA </P>
 <div class="share">
 <a href="" class="fab fa-facebook-f"></a>
 <a href="" class="fab fa-twitter"></a>
 <a href="" class="fab fa-instagram"></a>
 <a href="" class="fab fa-linkedin"></a>
 </div>
 </div>
 <div class="box">
 <h3>Contact info</h3>
 <a href="#" class="links"><i class="fas fa-phone"></i>+91 9663841261</a>
 <a href="#" class="links"><i class="fas fa-phone"></i>+91 9663841261</a>
 <a href="#" class="links"><i class="fas fa-envelope"></i>AnimalAdopton@gmail.com</a>
 <a href="#" class="links"><i class="fas fa-map-marker-alt"></i>nidasoshi, karanataka-591236</a>
 </div>
  <div class="box">
 <h3>Quick Links</h3>
 <a href="../index.php" class="links"><i class="fas fa-arrow-right"></i>Home</a>
 <a href="../about-us.php" class="links"><i class="fas fa-arrow-right"></i>About-us</a>
 <a href="../contact-us.php" class="links"><i class="fas fa-arrow-right"></i>Contact</a>
 <a href="../Sign-up.php" class="links"><i class="fas fa-arrow-right"></i>Signup</a>
 <a href="../Login.php" class="links"><i class="fas fa-arrow-right"></i>Login</a>
 </div>
 </div>
 <div class="credit">created by <span>mr. manjunath khot</span>  | all rights reserved</div>
 </section>
 <!-- footer section ends-->
 
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