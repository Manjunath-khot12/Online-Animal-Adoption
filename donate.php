
<?php
$conn=mysqli_connect('localhost','root','','oaa1');
session_start();
ob_start();

if(isset( $_SESSION['phone']))
{
	$phone=$_SESSION['phone'];
?>
<?php   
$sql1="select * from users where phone='$phone'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
?>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>donate page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/adoption-form.css" rel="stylesheet" type="text/css" media="all" />
	<script src="../js/ak.js"></script>


 <script src="JS3/user.js"></script>
 
 </head>
 <body>
 <!..header section starts..>
 


  <script src="JS3/script.js"></script>
 <!..header section ends..>
 
 
 
 <!..home section starts..>
    <h2><a class="back-link" href="userh.php"><i class="fa fa-arrow-left"></i></a></h2>

 
 
 <div class="contanier">


 <form method="POST" action="verify1.php" name="myForm" onsubmit="return formValidate()" autocomplete="off"enctype="multipart/form-data">

<h1 class="main_heading" style="background-color:#00bcd4;color:white;" > Amount Donate Request Form</h1>
<hr>
<h2> Donar Personal Information</h2>
		<input type="hidden" name="d_id" id="d_id" value="<?php echo $row['d_id'];?>">

<p>Name :<input type="text" name="name" id="name"  value="<?php echo $row1['fname'];?>"placeholder="Enter Name"></p>
 <p>Email Address :<input type="email" name="mail" id="mail" id="email" value="<?php echo $row1['mail'];?> "placeholder="Enter Email"></p>
 <p>Mobile:<input type="text" name="phone" id="mobile" value="<?php echo $row1['phone'];?>" placeholder="Enter Mobile" readonly></p>
  <p>Address :<textarea name="address" id="address" id="address" cols="100" rows="8" placeholder="Enter Address"></textarea></p>
   <p>Gender :  <input type="radio" name="gender" id="gender" value="male" required >Male  <input type="radio" name="gender" id="gender" value="female">Female</p><br>
<p>Age :<input type="text" name="age" id="age" placeholder="Enter Age"></p>

<p>Enter your Amount :<input type="text" id="amount" name="amount" placeholder="Enter Animal Amount"></p>

 
 <input type="submit" name="donate" value="donate" style="	background-color:#4daea1;
	color:white;
	padding:12px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
	width:25%;
	position:relative;
	left:200px;">
	
 <input type="reset"  value="CANCEL" style="	background-color:#4daea1;
	color:white;
	padding:12px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
	width:25%;
	position:relative;
	left:200px;
	">
 
  </form>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 



 </body>
 <script>
 function formValidate()
{
		  var namepattern =/^[A-Za-z\s]+$/;
		  var emailpattern=/^[A-Za-z0-9._]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		  var numberpattern = /^[0-9]+$/;
		  var addresspattern1 =/^[A-Za-z0-9._]+$/;



		  var address = document.getElementById('address').value;
		  var age = document.getElementById('age').value;
		  var amount = document.getElementById('amount').value;
		  




		 
		//address//
		if(address=="" || address.length<3 || address.length>50)
		 {
			  alert("Please provide a valid address");
			  document.myForm.address.focus();
			  document.myForm.address.style.border="solid 3px red";
			  return false;
		 }
         if(!address.match(addresspattern1))
		 {

			alert( "Please provide your address and also enter pincode!" );
            document.myForm.address.focus();
			document.myForm.address.style.border="solid 3px red";
            return false;
		 }
		
		 //age//
		 if(age=="")
		{
			alert( "No blank is allowed" );
            document.myForm.age.focus();
			document.myForm.age.style.border="solid 3px red";
            return false;
		}
		if(age<18)
		{
			alert( "Enter valid age and not allowed greater than animallifetime  " );
            document.myForm.age.focus();
			document.myForm.age.style.border="solid 3px red";
            return false;
		}
		if(!age.match(numberpattern))
		{
			alert( "Please enter valid age number" );
            document.myForm.age.focus();
			document.myForm.age.style.border="solid 3px red";
            return false;
		}
		//mobile number validation
		if(amount=="")
		{
			alert( "No blank mobile number is allowed" );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
            return false;
		}
		if(amount<1000)
		{
			alert( "Please provide greater than 1000 amount" );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
            return false;
		}
		if(!amount.match(numberpattern))
		{
			alert( "Please enter correct amount" );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
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
