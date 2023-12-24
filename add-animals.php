<?php
$conn=mysqli_connect('localhost','root','','oaa1');

session_start();
ob_start();
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
				<script src="../js/ak.js"></script>

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
	   <div class="name">Manju Khot</div>
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
		   <li><a class="item" href="../index.php"> Logout</a></li>
		</ul>
		</div>

	</div>
	
	
	

 <div class="contanier" style="margin-left:20px;width:45%;height:130%;">
 <form method="POST" name="myForm" onsubmit="return formValidate()" autocomplete="off" enctype="multipart/form-data">

<h1 class="main_heading" style="background-color:#00bcd4;color:white;margin-top:20px;"> ADD ANIMALS</h1><br>
<hr>
<h2> ANIMAL INFORMATION</h2><br>
 <p>Image Of  The Animal : <input type="file" id="image" name="image" accept="image/*" value="upload"></p><br>
<p> Animal Name :<input type="text" name="aname" id="aname"placeholder="Enter Animal Name"></p><br>
 <p>Gender :  <input type="radio" name="gender" id="email" value="male" required >Male  <input type="radio" name="gender" id="email" value="female">Female</p><br>
 
 <p> Date Of Birth :<input type="date" name="date" id="dob" max="2023-08-01" ></p><br>
 
 <p> Animal Type :
 <select name="type" id="type" id="card_type">
 <option value="">--Animal Type--</option>
 <option value="Cowshed">Cowshed</option>
 <option value="Zoo">Zoo</option>
 </select>
 </p><br><br>
 <p>Life Time :<input type="text" id="lifetime" name="lifetime" placeholder="Enter Life-Time"></p><br>
 <p>Age :<input type="text" name="age" id="age" placeholder="Enter Age"></p><br>
 <p>Breed  :<input type="text" name="breed" id="breed" placeholder="Enter Breed"></p><br>
 <p>Quntity  :<input type="text" name="qunt"id="qunt" placeholder="Enter quntity"></p><br>
 <p>Amount  :<input type="text" name="amount" id="amount" placeholder="Enter Amount"></p><br>
 <input type="submit" name="add" value="ADD" style="margin-left:-25px;">
 <input type="reset" name="reset" value="RESET">
 
  </form>
 
 
	
	
	
	
	
	
	
	
	
	
	
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
	<script>
	function formValidate()
{
		  var namepattern =/^[A-Za-z\s]+$/;
		  var numberpattern = /^[0-9]+$/;
		  var dateRegex = /^(19|20)\d\d[- /.](0[1-9]|1[0-2])[- /.](0[1-9]|[12][0-9]|3[01])$|(0[1-9]|1[0-2])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d$/;


		  var type=document.myForm.type.value;

		  
		  var aname = document.getElementById('aname').value;
		  var lifetime = document.getElementById('lifetime').value;
		  var age = document.getElementById('age').value;
		  var breed = document.getElementById('breed').value;
		  var qunt = document.getElementById('qunt').value;
		  var amount = document.getElementById('amount').value;
		  var image = document.getElementById('image').value;
		  var dob = document.getElementById('dob').value;

		  
		  
		  //add animal validation code
		  //animal name validation code//
         if(aname=="" || aname.length<3 || aname.length>15)
		 {
			  alert("Please provide a valid name");
			  document.myForm.aname.focus();
			  document.myForm.aname.style.border="solid 3px red";
			  return false;
		 }
         if(!aname.match(namepattern))
		 {

			alert( "Please provide your animalname correctly!" );
            document.myForm.aname.focus();
			document.myForm.aname.style.border="solid 3px red";
            return false;
		 }
		  //type validate//
		 
		 if(type=="")
		 {
			alert( "Please select Animal type!" );
            document.myForm.type.focus();
			document.myForm.type.style.border="solid 3px red";

			 return false;

		 }
		 		  //end type validate//

		//lifetime  validation//
		if(lifetime=="")
		{
			alert( "No black is allowed" );
            document.myForm.lifetime.focus();
			document.myForm.lifetime.style.border="solid 3px red";
            return false;
		}
		if(lifetime<=0)
		{
			alert( "Please provide correct lifetime" );
            document.myForm.lifetime.focus();
			document.myForm.lifetime.style.border="solid 3px red";
            return false;
		}
		if(!lifetime.match(numberpattern))
		{
			alert( "Please enter valid lifetime" );
            document.myForm.lifetime.focus();
			document.myForm.lifetime.style.border="solid 3px red";
            return false;
		}
				//lifetime  end validation//

		
		//age validatiom//
		
		if(age=="")
		{
			alert( "No age blanck is allowed" );
            document.myForm.age.focus();
			document.myForm.age.style.border="solid 3px red";
            return false;
		}
		if(age<=0 || age>lifetime)
		{
			alert( "Enter valid age " );
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
				//age validatiom//
				
				
				//breed validatiom//

		if(breed=="" || breed.length<3 || breed.length>15)
		 {
			  alert("Please provide a valid breed");
			  document.myForm.breed.focus();
			  document.myForm.breed.style.border="solid 3px red";
			  return false;
		 }
		 if(!breed.match(namepattern))
		 {

			alert( "Please provide your animal breed correctly!" );
            document.myForm.breed.focus();
			document.myForm.breed.style.border="solid 3px red";
            return false;
		 }
		 				//breed end validatiom//

		 
		 //qunt start//
		 if(qunt=="")
		{
			alert( "No black Quntity" );
            document.myForm.qunt.focus();
			document.myForm.qunt.style.border="solid 3px red";
            return false;
		}
		if(qunt<=0)
		{
			alert( "Enter valid Quntity " );
            document.myForm.qunt.focus();
			document.myForm.qunt.style.border="solid 3px red";
            return false;
		}
		if(!qunt.match(numberpattern))
		{
			alert( "Please enter valid Quntity" );
            document.myForm.qunt.focus();
			document.myForm.qunt.style.border="solid 3px red";
            return false;
		}
				 //qunt end //

		//amount//
		if(amount=="")
		{
			alert( "No black allowed" );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
            return false;
		}
		if(amount<=0)
		{
			alert( "Enter valid amount " );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
            return false;
		}
		if(!amount.match(numberpattern))
		{
			alert( "Please enter valid amount " );
            document.myForm.amount.focus();
			document.myForm.amount.style.border="solid 3px red";
            return false;
		}
		if(image=="")
		{
			alert( "chose any file " );
            document.myForm.image.focus();
			document.myForm.image.style.border="solid 3px red";
            return false;
		}
		// Split the date into components (year, month, day)
    var dateComponents = dob.split(/[-/ ]/);
    var year = parseInt(dateComponents[0]);
    var month = parseInt(dateComponents[1]);
    var day = parseInt(dateComponents[2]);
	
	if(dob=="")
	{
	alert("Please enter a valid date of birth in the format DD/MM/YYYY.");
        document.myForm.date.focus();
		document.myForm.date.style.border="solid 3px red";
        return false;	
	}

    if (!dateRegex.test(dob)) {
        alert("Please enter a valid date of birth in the format DD/MM/YYYY.");
        document.myForm.date.focus();
		document.myForm.date.style.border="solid 3px red";
        return false;
    }
    // Validate the year, month, and day
    else if (year < 1900 || year > new Date().getFullYear() || month < 1 || month > 12 || day < 1 || day > 31)
		{
        alert("Please enter a valid date of birth.");
        document.myForm.date.focus();
		document.myForm.date.style.border="solid 3px red";
        return false;
    }
    else {
        document.myForm.date.focus();
		document.myForm.date.style.border="none"; 
    }

		
}


	</script>
</html>

<?php
}
else
{
	header('location:../admin.php');
}

if(isset($_POST['add']))
{
	$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$aname=$_POST['aname'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];  																	
	$type=$_POST['type'];
	$lifetime=$_POST['lifetime'];
	$age=$_POST['age'];
	$breed=$_POST['breed'];
	$qunt=$_POST['qunt'];
	$amount=$_POST['amount'];
	
	$sql="insert into animal values('','$image','$aname','$gender','$date','$type','$lifetime','$age','$breed','$qunt','$amount')";
	$res=mysqli_query($conn,$sql);
	if($res)
	{
		echo "<script>";
		echo "swal('animal added successfully','','success')";
		echo "</script>";
		header('Refresh:1');

	}
	else
	{
		echo "<script>";
		echo "swal('animal not added','error')";
		echo "</script>";
	}
}






?>