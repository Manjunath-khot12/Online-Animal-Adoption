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
<style>
input[name="button"]
input[type="reset"]
{
	ground-color:#4daea1;
	color:white;
	padding:12px 20px;
	border:none;
	border-radius:4px;
	cursor:pointer;
	width:25%;
	position:relative;
	left:200px;
	
	
}
input[type="submit"]:hover,
input[type="reset"]:hover
{
	background-color:#4caf84;
	
}

</style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>adoption form page</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 
<link href="CSS3/adoption-form.css" rel="stylesheet" type="text/css" media="all" />
	<script src="../js/ak.js"></script>
	<script src="js/validate.js"></script>
	
	

 <script src="JS3/user.js"></script>
 </head>
 <body> 
    <h2><a class="back-link" href="Adopt-now.php"><i class="fa fa-arrow-left"></i></a></h2>
<?php   
$sql1="select * from users where phone='$phone'";
$res1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($res1);
?>





 <div class="contanier">
 <?php
if(isset($_GET['a_id']))
{
	$a_id=$_GET['a_id'];
	$sql="select * from animal where a_id='$a_id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);

}
?>
 <form method="POST" name="myForm"  action="verify.php" onsubmit="return formValidate()" autocomplete="off"enctype="multipart/form-data">

<h1 class="main_heading" style="background-color:#00bcd4;color:white;"> Adoption Form</h1>
<hr>

<h2>Personal Information</h2>
		<input type="hidden" name="a_id" id="a_id" value="<?php echo $row['a_id'];?>">
		<input type="hidden" name="Tqty" id="Tqty" value="<?php echo $row['qunt'];?>">

<p>Name:<input type="text" name="name" id="name" value="<?php echo $row1['fname'];?>" placeholder="Enter Name" readonly></p>
 <p>Email:<input type="email" name="mail" id="mail" value="<?php echo $row1['mail'];?>" placeholder="Enter Email" readonly></p>
 <p>Mobile:<input type="text" name="phone" id="phone" value="<?php echo $row1['phone'];?>" placeholder="Enter Mobile" readonly></p>
 <p>Animal name:<input type="text" name="aname" id="aname" value="<?php echo $row['aname'];?>" placeholder="Enter Name"readonly ></p>
 <p>Animal lifetime:<input type="text" name="lifetime" id="lifetime"  value="<?php echo $row['lifetime'];?>" placeholder="Enter Name"readonly ></p>
  <p>Animal Age:<input type="text" name="age" id="age" value="<?php echo $row['age'];?>" placeholder="Enter Name"readonly ></p>

 <p>Animal category:<input type="text" name="acat" id="acat"  value="<?php echo $row['type'];?>" placeholder="Enter Name" readonly></p>
 
 

 
 
 <p>Choose Number Of Year:
 <select name="year" id="year">
 <option value="" >--Choose Number Of Year--</option>
 <option value="1 Year">1 Year</option>
 </select>
 </p>
 
 <p>Adoption date:<input type="text" name="adate" class="txtdate" placeholder="Gender" readonly id="adate" value="<?php echo date('d-m-y');?>" ></p>
      <p>Gender:
 <input type="text" name="gender" id="gender" value="<?php echo $row['gender'];?>" placeholder="Gender" readonly>
 
 </select>
 </p>
 <p>Amount In Rupes:<input type="text" name="amount" id="amount" value="<?php echo $row['amount'];?>"placeholder="Enter Amount" readonly></p>
 <hr >
 <input type="submit" value="Adopt Now" name="adopt" style="background-color:#4daea1;color:white;padding:12px 20px;border:none;border-radius:4px;cursor:pointer;width:25%;position:relative;left:200px;">
  <input type="reset" value="clear" style="background-color:#4daea1;color:white;padding:12px 20px;border:none;border-radius:4px;cursor:pointer;width:25%;position:relative;left:200px;">

 
  </form>
  </div>
<script>
 
    
 
 function formValidate()
 {
 var cat=document.myForm.year.value;
 if(cat=="")
 {
	alert( "Please Enter  catagory!");
            document.myForm.year.focus();
			document.myForm.year.style.border="solid 3px red";

			 return false;
 }
 }
 </script>




 
 
 
 
 
 
 
 
 
 
 
 
 
 


 </body>
 
 </html>
 <?php
}
else
{
	header('location:../login.php');
}


?>