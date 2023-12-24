
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
<title>give feedback page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/adopt.css" rel="stylesheet" type="text/css" media="all" />
<script src="../js/ak.js"></script>
 <script src="JS3/user.js"></script>
 </head>
 <body>
 <!..header section starts..>
 
 <header class="header">
 <a href="#" class="logo"><img src="IMAGES3/Logopny1..png"/></a>
 <nav class="navbar">
 <ul id="menu">
		<li><a href="userh.php">Home</a></li>
		<li ><a href="#">Adopt</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a style="color:white;" href="Adopt-now.php">Adopt Now</a></li>
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
		
		
		<li class="active"><a  href="give-feedback.php">Feedback</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a  href="#" style="color:white;">Give</a></li>
		            <li><a href="view-feedback.php" style="color:white;"  >View</a></li>
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
 

 
 
 

     <h2><a class="back-link" href="userh.php"><i class="fa fa-arrow-left"></i></a></h2>

 
  <?php
$sql1="select * from users where phone='$phone'";
$res=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($res);
 
 
 ?>
 
 <!--give-feedback code start-->
<div class="Main-div">
<form method="POST">
		<div class="feedback-header">	
         <h3>Give Feedback</h3>
		</div>	
        <div class="container">
		    
			<label>Name</label>
			<input class="input-field" type="text" name="name" value="<?php echo $row['fname'];?>" placeholder="Enter Name"/>
			
			<label>Mail</label>
			<input  class="input-field" type="text" name="mail" value="<?php echo $row['mail'];?>" placeholder="Enter Mail"/>
			
            <label>Phone No</label>
			<input  class="input-field" type="text" name="phone" value="<?php echo $row['phone'];?>" placeholder="Enter Phone"/>
			
			<label>Message</label>
			<textarea class="input-field" placeholder="Enter Message" name="message" required ></textarea>
			
		
			<input  class="submit-btn" type="submit" name="send" value="SEND"/>
			<input  class="submit-btn" type="reset" name="clear" value="CLEAR"/>
        
			
		</div>
		</form>
	  </div>
<!--endfeedback--> 
 
 
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

//query	insertion code																																									
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	 $mail=$_POST['mail'];
	 $phone=$_POST['phone'];
	 $message=$_POST['message'];
	 $sql="insert into feedback values('','$name','$mail','$phone','$message','')";
	 $result= mysqli_query($conn,$sql);
	 if($result)
	 {
		 echo "<script>";
		 echo "swal('Thank You','Your feedback is send','success')";
		 echo "</script>";
	 }
	 else
	 {
		 echo "<script>";
		 echo "swal('oops','feedback is not send','error')";
		 echo "</script>";
		 
	 }
}

?>