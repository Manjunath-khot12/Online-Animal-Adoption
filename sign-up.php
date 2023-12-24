<?php

// database connection
$conn=mysqli_connect('localhost','root','','oaa1');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sign-up</title>
	<link rel="stylesheet" href="CSS/signup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<script src="js/ak.js"></script>



</head>
<nav class="navbar">
		<img class="logo" src="IMAGES/Logop.png">

				<ul>
					<li><a  href="index.php">Home</a></li>
					<li><a href="about-us.php">About</a></li>
					<li><a href="contact-us.php">Contact</a></li>
					<li><a class="active" href="sign-up.php">Sign-up</a></li>
					<li><a href="Login.php">Sign-in</a></li>

				</ul>
</nav>


<body>


<div class="about-section2">

</div>
<div class="container5" style="top:25px;">
<h4>REGISTRATION FORM</h4>
<div class="form-container">
<form method="POST" name="myForm" onsubmit="return formValidate()" autocomplete="off">
<div class="input-name">
<i class="fa fa-user"></i>
<input type="text" placeholder="First Name" class="name1" name="fname" id="fname"/>
<span>
<i class="fa fa-user"></i>
<input type="text" placeholder="Last Name" class="name1" name="lname" id="lname"/>
</span>
</div>
<div class="input-name">
<i class="fa fa-envelope"></i>
<input type="text" placeholder="Email" class="text-name" name="mail" id="mail"/>
</div>
<div class="input-name">
<i class="fa fa-phone"></i>
<input type="text" placeholder="Enter phone number" class="text-name" name="phone" id="phone">
</div>
<div class="input-name">
<i class="fa fa-lock"></i>
<input type="password" placeholder="Password" class="text-name" name="pass" id="pass"/>
</div>

<div class="input-name">

<tr>
	<td >Gender: </td>
	<td>male <input type="radio" name="r1"id="r1" value="male" required ></td>
	<td>female <input type="radio" name="r1" id="r1" value="female"></td>

</tr>
</div>


   <div class="input-name">
   <select class="country" name="state" id="state" >
   <option value="" >Select a state</option>
   <option value="Karanataka">Karanataka</option>
   <option value="Tamilnadu">Tamilnadu</option>
   <option value="Kerala">Kerala</option>
   <option value="Adharpradesh">Adharpradesh</option>
</select>
<div class="arrow"></div>
</div>
<div class="input-name">
<label style="font-size:15px;">Hint :</label><br>
<i class="fa fa-tint"></i>
<input type="password" placeholder="Enter your faviorate Animal Name" class="text-name" id="hint" name="hint"/>
</div>
<div class="input-name">
<input type="checkbox" id="cb" class="check-button" required>
<label for="cb"class="check">I accept the terms and conditions</label>
</div>
<div class="input-name">
<input type="submit" class="button1" value="Register" name="register">
</div>
   <a href="user sign-in.php" style="margin-left:140px;">Already have an Account ?</a>
</div>
</form>
</div>









<footer>
  <p>&copy; 2022 Online Job Portal. All rights reserved | Design by XYZ Names(Mob-1234567890).</p>
</footer> 

</body>
<script>
function formValidate()
{
		  var namepattern =/^[A-Za-z\s]+$/;
		  var emailpattern=/^[A-Za-z0-9._]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		  var numberpattern = /^[0-9]+$/;
		  var passpattern=/^[0-9]+$/; 
		  var hintpattern =/^[A-Za-z\s]+$/;



		  
		  var fname = document.getElementById('fname').value;
		  var lname = document.getElementById('lname').value;
		  var mail = document.getElementById('mail').value;
		  var phone = document.getElementById('phone').value;
		  var pass = document.getElementById('pass').value;
		  var hint = document.getElementById('hint').value;
		  var state=document.myForm.state.value;
		 


		  
		  //username validation code
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
		 
		 var lname = document.getElementById('lname').value;
		 
		 
		 
		 
		 
		  
		  //lastname validation code
         if(lname=="" || lname.length<3 || lname.length>15)
		 {
			  alert("Please provide a valid lname");
			  document.myForm.lname.focus();
			  document.myForm.lname.style.border="solid 3px red";
			  return false;
		 }
         if(!lname.match(namepattern))
		 {

			alert( "Please provide your lname!" );
            document.myForm.lname.focus();
			document.myForm.lname.style.border="solid 3px red";
            return false;
		 }
		 //username validation code end here
		 
		 
		 
		 
		  
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
		
		
		
		
	//password number validation
		if(pass=="")
		{
			alert( "No blank password is allowed" );
            document.myForm.pass.focus();
			document.myForm.pass.style.border="solid 3px red";
            return false;
		}
		if(pass.length<8 || pass.length>15)
		{
			alert( "Please provide atleast 8 digit  pass" );
            document.myForm.pass.focus();
			document.myForm.pass.style.border="solid 3px red";
            return false;
		}
	
		if(!pass.match(passpattern))
		{
			alert( "Please enter valid password" );
            document.myForm.pass.focus();
			document.myForm.pass.style.border="solid 3px red";
            return false;
		}
				 
		 //state validate//
		 
		 if(state=="")
		 {
			alert( "Please Enter  statet!" );
            document.myForm.state.focus();
			document.myForm.state.style.border="solid 3px red";

			 return false;

		 }
		
		//hint validation//
		if(hint=="")
		 {
			  alert("Please provide a valid name");
			  document.myForm.hint.focus();
			  document.myForm.hint.style.border="solid 3px red";
			  return false;
		 }
         if(!hint.match(namepattern))
		 {

			alert( "Please Enter valid hint!" );
            document.myForm.hint.focus();
			document.myForm.hint.style.border="solid 3px red";
            return false;
		 }
		 


		
}




</script>



</html>
			
			
			
<?php
//query	insertion code																																									
if(isset($_POST['register']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$pass=$_POST['pass'];
	$state=$_POST['state'];
	$hint=$_POST['hint'];
	$gender=$_POST['r1'];
	
	$sql1="select * from users where phone=$phone";
	$result1=mysqli_query($conn,$sql1);
	$row=mysqli_num_rows($result1);
	if($row==1)
	{
		echo"<script>";
		echo"swal('opps','your account is already exist','info')";
		echo"</script>";
	}
	else
	{
		$sql="insert into users values('$fname','$lname','$mail','$phone','$pass','$state','$hint','$gender')";
	    $result= mysqli_query($conn,$sql);
	       if($result)
	 {
		 echo "<script>";
		 echo "swal('Thank You','Your Account is created','success')";
		 echo "</script>";
	 }
	 else
	 {
		 echo "<script>";
		 echo "swal('oops','Your Account is not created','error')";
		 echo "</script>";
		 
	 }
	}
		
}


?>