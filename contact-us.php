<?php

// database connection
$conn=mysqli_connect('localhost','root','','oaa1');

?>



<html>
<head>
<title>Login-form</title>
	<link rel="stylesheet" href="CSS/contact.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<script src="js/ak.js"></script>
	



</head>
<body>

<nav class="navbar">
				<img class="logo" src="IMAGES/Logop.png">
				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a  href="about-us.php">About</a></li>
					<li><a class="active"  href="contact-us.php">Contact</a></li>
					<li><a href="sign-up.php">Sign-up</a></li>
					<li><a href="Login.php">Sign-in</a></li>

				</ul>
			</nav>
			








<div class="ccontainer">
<div class="items">
<div class="contact">
<div class="first-text">let's get in touch </div>
<img src="IMAGES/contact us.jpg" alt="" class="image">
<div class="social-links">
<span class="second-text">connect with us:</span>
<ul class="social-media">
<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
<li><a href="#"><i class='bx bxl-youtube'></i></a></li>
<li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
</ul>
</div>
</div>
<div class="submit-form">
<h4 class="third-text">contact-us</h4>
<form method="POST" name="myForm" onsubmit="return formValidate()" autocomplete="off">
<div class="input-box">
<input type="text" class="input" name="name" id="fname" >
<label for="">Name:</label>
</div>

<div class="input-box">
<input type="@email" class="input" name="mail" id="mail">
<label for="">Email:</label>
</div>

<div class="input-box">
<input type="tel" class="input" name="mobile" id="phone">
<label for="">phone:</label>
</div>

<div class="input-box">
<textarea  id="message"  class="input" name="message" required></textarea>
<label for="">Message:</label>
</div>
<input type="submit" class="btn" value="Send-Now" name="send">


</form>
</div>
</div>
</div>

<footer>
  <p>&copy; 2023 Online Animal Adoption. All rights reserved | Design by Animal Adoption (Mob-1234).</p>
</footer>
</body>
<script>
function formValidate()
{
		  var namepattern =/^[A-Za-z\s]+$/;
		  var emailpattern=/^[A-Za-z\._\-0-9._]*[@][A-Za-z]*[\.][a-z]{2,4}$/;

		   var fname = document.getElementById('fname').value;
		   var mail = document.getElementById('mail').value;
		   var phone = document.getElementById('phone').value;


		   if(fname=="" || fname.length<3 || fname.length>15)
		 {
			  alert("Please provide a valid name");
			  document.myForm.fname.focus();
			  document.myForm.fname.style.border="solid 3px red";
			  return false;
		 }
         if(!fname.match(namepattern))
		 {

			alert( "Please provide your username!" );
            document.myForm.fname.focus();
			document.myForm.fname.style.border="solid 3px red";
            return false;
		 }
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
		
				
		//mobile number validation
		if(phone=="")
		{
			alert( "No blank mobile number is allowed" );
            document.myForm.phone.focus();
			document.myForm.phone.style.border="solid 3px red";
            return false;
		}
		if(phone.length<10 || phone.length>10)
		{
			alert( "Please provide 10 digit mobile number" );
            document.myForm.phone.focus();
			document.myForm.phone.style.border="solid 3px red";
            return false;
		}
		if(!phone.match(numberpattern))
		{
			alert( "Please enter valid mobile number" );
            document.myForm.phone.focus();
			document.myForm.phone.style.border="solid 3px red";
            return false;
		}
		
		
		//mobile Validation ended here.
		
		
		
		
}

</script>
</html>

<?php
//query	insertion code																																									
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	 $mail=$_POST['mail'];
	 $mobile=$_POST['mobile'];
	 $message=$_POST['message'];
	 $sql="insert into query values( '','$name','$mail','$mobile','$message')";
	$result= mysqli_query($conn,$sql);
	 if($result)
	 {
		 echo "<script>";
		 echo "swal('Thank You','your query is send','success')";
		 echo "</script>";
	 }
	 else
	 {
		 echo "<script>";
		 echo "swal('oops','your query is not send','error')";
		 echo "</script>";
		 
	 }
}

?>