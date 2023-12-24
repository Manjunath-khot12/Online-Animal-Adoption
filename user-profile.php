
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
<title>user profile page</title>
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
		
		
		<li ><a  href="give-feedback.php">Feedback</a>
			
		  <div class="sub-menu1">
				<ul>
					<li><a  href="give-feedback.php" style="color:white;">Give</a></li>
		            <li><a href="view-feedback.php" style="color:white;"  >View</a></li>
				</ul>
		  </div>
		</li>
		
		<li class="active"><a href="">Settings</a>
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
 

 <?php
$sql1="select * from users where phone='$phone'";
$res=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($res);
 ?>

<div class="profile-div">
<div class="profile-image">
<img src="IMAGES3/tiger.jpg" style="width:150px;hieght:150px;">
</div>
 <div class="profile-title">
 <h3>User Profile</h3>
 </div>
 <form method="POST" name="myForm" onsubmit="return formValidate()" autocomplete="off">

 <div class="p-group">
 <div class="box">
 <label><i class="fas fa-user"></i> Name :</label>
 </div>
  <div class="box">
 <input type="text" name="name" value="<?php echo $row['fname'];?>" disabled>
 </div>
 </div>
  <div class="p-group">
 <div class="box">
 <label><i class="fas fa-phone"></i> Mobile :</label>
 </div>
  <div class="box">
 <input type="text" name="name" value="<?php echo $row['phone'];?>" disabled>
 </div>
 </div>
  <div class="p-group">
 <div class="box">
 <label><i class="fas fa-envelope"></i> Mail :</label>
 </div>
  <div class="box">
 <input type="text" name="mail" id="mail" value="<?php echo $row['mail'];?>" >
 </div>
 </div>
 <div class="p-group">
 <div class="box">
 <label><i class="fas fa-address-card"></i> Address :</label>
 </div>
  <div class="box">
 <textarea  name="state" id="state" ><?php echo $row['state'];?></textarea>
 </div>
 </div>
  <div class="p-group">
 <div class="box">
 <label></label>
 </div>
  <div class="box">
 <input type="submit" class="update-btn" name="update" value="UPDATE">
 </div>
 </div>
 </form>
 </div>
 <?php
 
 if(isset($_POST['update']))
 {
	 $mail=$_POST['mail'];
	 $state=$_POST['state'];
	 $sql="update  users set mail='$mail',state='$state' where phone='$phone'";
	 $res=mysqli_query($conn,$sql);
	 if($res)
	 {
		  echo "<script>";
		 echo "swal('Nice','Your Profile is Updated successfully','success')";
		 echo "</script>";
	 }
	 else{
		  echo "<script>";
		 echo "swal('sorry!!','Your Profile is not  Updated ','error')";
		 echo "</script>";
	 }
 }
 ?>
 
 
 
 
 
 
 
 
 
 
 
 
 
<!--scrool to top button-->
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
<!--scrool to top button code end-->








 </body>
 <script>
 function formValidate()
 {
 var namepattern =/^[A-Za-z\s]+$/;
 var emailpattern=/^[A-Za-z0-9._]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		 
		 
			 var mail = document.getElementById('mail').value;
			 var state = document.getElementById('state').value;
				 
				 
				 //email validation code 
		if(mail=="")
		{
			alert( "Please enter valid mail" );
            document.myForm.mail.focus();
			document.myForm.mail.style.border="solid 3px red";
            return false;
		}
		if(!mail.match(emailpattern))
		{
			alert( "Please enter valid email" );
            document.myForm.mail.focus();
			document.myForm.mail.style.border="solid 3px red";
            return false;
		}
		 //username validation code
		 
         if(state=="" || state.length<3 || state.length>50)
		 {
			  alert("Please provide a valid state");
			  document.myForm.state.focus();
			  document.myForm.state.style.border="solid 3px red";
			  return false;
		 }
         if(!state.match(namepattern))
		 {

			alert( "Please provide your state and also enter pincode!" );
            document.myForm.state.focus();
			document.myForm.state.style.border="solid 3px red";
            return false;
		 }
		
 }


 </script>
 </html>
 <?php
}
else
{
	header('location:../login.php');
}
?>