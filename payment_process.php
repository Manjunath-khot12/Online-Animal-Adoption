<?php
session_start();
ob_start();

 $conn=mysqli_connect("localhost","root","","oaa1");
if(isset($_POST['amount']) && $_POST['phone'])
{
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$phone=$_POST['phone'];
	$aname=$_POST['aname'];
	$lifetime=$_POST['lifetime'];
	$age=$_POST['age'];
	$acat=$_POST['acat'];
	$year=$_POST['year'];
	$adate=$_POST['adate'];
	$gender=$_POST['gender'];
	$amount=$_POST['amount'];
	$Tqty=$_POST['Tqty'];
	$a_id=$_POST['a_id'];
   
    $sql = "update animal set qunt=0 where a_id='$a_id'";
	$res = mysqli_query($conn,$sql);
	
	$sql = "insert into adopt values('','$name','$mail','$phone','$aname','$gender','$lifetime','$age','$acat','$year','$adate','$amount','COMPLETED')";
	$res = mysqli_query($conn,$sql);
	
	
	
	
}




?>
    
	
		




