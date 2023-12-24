<?php
$conn = mysqli_connect("localhost","root","","oaa1");
?>



<html>
<head>
<title>Forget password</title>
<link rel="stylesheet" href="CSS/forget.css">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<script src="js/ak.js"></script>
	 <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<body>

  <img class="login-image" src="IMAGES/ab-img2.png" width="60px;">

	
  
  <span  class="span-text">USER FORGOT PASSWORD</span>
  
   <h2><a class="back-link" href="Login.php"><i class="fa fa-arrow-left"></i></a></h2>
 <div class="login-content" style="width:50%; background-color:#fffc;">
 
 
	<div class="login-form">
		<h2 style="text-align:center; color:purple;padding-top:20px;">WELCOME</h2><br><br>
		
		<form method="POST">	
		
			<div class="input-group">
		<label>	Enter E-mail :</label>
				<i class="fas fa-user"></i>

		<input type="text" name="email" placeholder="E-mail">
			</div>
						<br>

			
			<div class="input-group1">
		<label>	Enter your  Hit :</label>	
		<i class="fas fa-lock"></i>
       <input type="text" name="hint" placeholder="Enter hit">
			</div><br>
			

        
		
			
			
			<br><br>
	
			<div class="input-group5">
			     <input class="Login-button" type="submit" name="forgot" value="VERIFY"/><br>		
			   <input class="login-button1" type="reset" name="reset" value="RESET"/>	</a>	
			</div>
			</form>
			
	</div>
   </div>

</head>
</body>
</html>


<?php
if(isset($_POST['forgot']))
{
	$email = $_POST['email'];
	$hint = $_POST['hint'];
	
	$sql ="select * from users where mail='$email' and hint='$hint'";
	$res = mysqli_query($conn,$sql);
	$row=mysqli_num_rows($res);
	
	if($row>0)
	{
		$row1= mysqli_fetch_array($res);
		$pass = $row1['pass'];
		
		echo "<script>";
	    echo "swal('Nice','Your Password is: $pass','success')";
	    echo "</script>";
	}
	else
	{
			
		echo "<script>";
	    echo "alert('Please Enter Valid Email Or Hint')";
	    echo "</script>";
	
		
	}
	
	
}

?>