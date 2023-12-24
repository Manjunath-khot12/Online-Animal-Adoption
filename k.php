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
	   <div class="name"><?php echo $username; ?></div>
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
		   <li><a class="item" href="../logout.php"> Logout</a></li>
		</ul>
		</div>

	</div>
	<?php
	$sql="select * from animal where type='zoo' ";
	$res=mysqli_query($conn,$sql);
	$zoo=mysqli_num_rows($res);
	
	
	$sql1="select * from animal where type='cowshed' ";
	$res1=mysqli_query($conn,$sql1);
	$cowshed=mysqli_num_rows($res1);
	
	$sql2="select * from adopt ";
	$res2=mysqli_query($conn,$sql2);
	$adopter=mysqli_num_rows($res2);
	
	$sql3="select * from donate ";
	$res3=mysqli_query($conn,$sql3);
	$donate=mysqli_num_rows($res3);
	
	$sql4="select * from users ";
	$res4=mysqli_query($conn,$sql4);
	$users=mysqli_num_rows($res4);
	
	$sql5="select * from feedback ";
	$res5=mysqli_query($conn,$sql5);
	$feedback=mysqli_num_rows($res5);
	
	
	$sql6="select * from donate ";
	$res6=mysqli_query($conn,$sql6);
	$donate=mysqli_num_rows($res6);
	
	$sql7="select * from animal ";
	$res7=mysqli_query($conn,$sql7);
	$animal=mysqli_num_rows($res7);
	
	
	
	
	
	
	?>
	
	
	<!--home content-->

<div  class="row">
	 <div  class="column">

	   <div   class="card">
	   
	   <h4 class="heading" style="border-bottom:1px solid black;">Total  Zoo Animals</h4>	
	   
<i class="fa fa-list fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $zoo;?></h4>
         
	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;" href="view-animals.php">View Details</a>
			</div>
	 </div>
	</div>
	
	<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4  class="heading" style="border-bottom:1px solid black; ">Total  Cowshed Animals</h4>
<i class="fa fa-list fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $cowshed;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-animals.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4  class="heading" style="border-bottom:1px solid black; ">Total Adopter</h4>
<i class="fa fa-users fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $adopter;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-adoption.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4 class="heading"  style="border-bottom:1px solid black; ">Total Doners</h4>
<i class="fa fa-users fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $donate;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-request.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4 class="heading"  style="border-bottom:1px solid black; ">Total Users</h4>
<i class="fa fa-user-circle fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $users;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-user.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4 class="heading" style="border-bottom:1px solid black; ">Total Feedback</h4>	
<i class="fa fa-home fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $feedback;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-feedback.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4 class="heading" style="border-bottom:1px solid black; ">Total Requests</h4>
<i class="fa fa-list fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $donate;?></h4>

	   		<a style="border-top:1px solid black;color:blue;text-decoration:underline;"   href="view-request.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4 class="heading" style="border-bottom:1px solid black; ">Total Donate amount</h4>	 
<i class="fa fa-handshake fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $donate;?></h4>

	   		<a  style="border-top:1px solid black;color:blue;text-decoration:underline;"  href="view-request.php">View Details</a>
	   </div>
	 </div>
	</div>
		<div class="row">
	 <div  class="column">

	   <div  class="card">
	   <h4  class="heading" style="border-bottom:1px solid black; ">Total  Animals</h4>
<i class="fa fa-phone fa-2x"></i>	   
	   <h4 style="font-size:24px;"><?php echo $animal;?></h4>

	   		<a  style="border-top:1px solid black;color:blue;text-decoration:underline;" href="view-animals.php">View Detials</a>
	   </div>
	 </div>
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