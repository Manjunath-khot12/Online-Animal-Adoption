<?php
$conn=mysqli_connect('localhost','root','','oaa1');

session_start();
ob_start();

if(isset( $_SESSION['phone']))
{
	$phone=$_SESSION['phone'];
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details Page</title>
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 8%;
}
nav .logo{
    font-size: 32px;
    font-weight: 500;
    cursor: pointer;
}
nav ul li{
    list-style: none;
    display: inline-block;
}
nav ul li a{
    display: block;
    margin: 0 10px;
    color: #000;
    font-weight: 500;
    text-decoration: none;
    font-size: 17px;
    position: relative;
}
nav ul li a::before{
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    background-color: #000;
    width: 0;
    height: 2.5px;
    transition: all 0.3s ease;
}
nav ul li a:hover::before{
    width: 100%;
}
nav ul i{
    font-size: 20px;
    margin-left: 10px;
    cursor: pointer;
}
.flex-box{
    display: flex;
    width: 1000px;
    margin: 20px auto;
}
.left{
    width: 40%;
}
.big-img{
    width: 400px;
}
.big-img img{
    width: inherit;
}
.images{
    display: flex;
    justify-content:space-around;
    width: 100%;
    margin-top: 15px;
	position:relative;

}
<!--
.small-img{
    width: 150px;
	height:70px;
    overflow: hidden;
    border: 1.5px solid black;
	background-size:cover;



	
}
.small-img img{
    width: inherit;
    cursor: pointer;
    transition: all 0.3s ease;



}
.small-img:hover img{
    transform: scale(1.2);
}
-->
.url{
    font-size: 16px;
    font-weight: 400;
    color: rgb(0, 102, 255);
}
.pname{
    font-size: 22px;
    font-weight: 600;
    margin-top: 50px;
}
.ratings i{
    color: rgb(255, 136, 0);
}
.price{
    font-size: 20px;
    font-weight: 500;
    margin: 20px 0;
}
.size{
    display: flex;
    align-items: center;
    margin: 20px 0;
}
.size p{
    font-size: 18px;
    font-weight: 500;
}
.psize{
    width: 60px;
    height: 30px;
    border: 1px solid #ff5e00;
    color: #000;
    text-align: center;
    margin: 0 10px;
    cursor: pointer;
}
.psize.active{
    border-width: 1.5px;
    color: #ff5e00;
    font-weight: 500;
}
.quantity{
    display: flex;
}
.quantity p{
    font-size: 18px;
    font-weight: 500;
}
.quantity input{
    width: 0px;
    font-size: 17px;
    font-weight: 500;
    margin-left: 30px;
	text-align:center;
}
.btn-box{
    display: flex;
    margin-top: 40px;
}
.btn-box button{
    font-size: 18px;
    padding: 8px 25px;
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    color: white;
}
.cart-btn{
    background-color: #ff5e00;
    margin-right: 20px;
}
.buy-btn{
    background-color: #00aeff;
}
.buy-btn a{
    background-color: #00aeff;
	text-decoration:none;
}
.cart-btn:hover{
    background-color: #ff3c00;
}
.buy-btn:hover{
    background-color: #0066ff;
}




	</style>
</head>
<body>
    <nav>
        <div class="logo" style="margin-left:450px;color:red;">ANIMAL INFORMATION</div>
        <ul>
            <li><a href="userh.php">Home</a></li>

            <i class="fas fa-shopping-cart"></i>
        </ul>
    </nav>
	<?php
if(isset($_GET['a_id']))
{
	$a_id=$_GET['a_id'];
	$sql="select * from animal where a_id='$a_id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);

}
?>

    <div class="flex-box" >
	<form method="POST" enctype="multipart/form-data">
        <div class="left">
            <div class="big-img">
			  <?php echo '<img src="data:imgage/jpeg;base64,'.base64_encode($row['image']).'"width="650px" height="540px" "/>';?>

            </div>
           
        </div>
		</form>
		
<?php
if(isset($_GET['a_id']))
{
	$a_id=$_GET['a_id'];
	$sql="select * from animal where a_id='$a_id'";
	$res=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($res);

}
?>
        <div class="right"style="margin-left:100px;" >
		<form method="POST">
		<input type="hidden" name="a_id" value="<?phpecho $row['a_id'];?>">
            <div class="pname"style="margin-top:10px;">Animal Information</div><br>
            <div class="ratings">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <div class="quantity">
                
            </div>
			 <div class="size">
                <p>Animal Name :<input type="text" name="aname" value="<?php echo $row['aname']?>" style="font-size:20px;border:none;padding-left:10px;width:200px;" disabled></p>
                
            </div><br>
			 <div class="quantity">
			 <p>GENDER :<input type="text" name="age" value="<?php echo $row['gender']?>" style="font-size:20px;border:none;width:70px;" disabled></p>
             </div><br><br>
			<div class="quantity">
                <p>AGE : <input type="text" name="aname" value="<?php echo $row['age']?>" style="font-size:20px;border:none;width:110px;" disabled></p>
            </div> <br><br>
			<div class="quantity">
                <p>LifeTime : <input type="text" name="aname" value="<?php echo $row['lifetime']?>" style="font-size:20px;border:none;width:50px;" disabled></p>
            </div> <br><br>
			<div class="quantity">
                <p>Breed : <input type="text" name="aname" value="<?php echo $row['breed']?>" style="font-size:20px;border:none;width:200px;margin-left:-5px;" disabled></p>
            </div><br><br>
			
			<div class="quantity">
			                <p>Amount :  <input type="text" name="aname" value="<?php echo $row['amount']?>" style="font-size:20px;border:none;width:200px;margin-left:-5px;" disabled></p>
             </div>
			           
           
            <div class="btn-box">
                <button class="buy-btn"><a href="adoption-form.php?a_id=<?php echo $row['a_id'];?>">Adopt Now</a></button>
            </div>
			</form>
					

        </div>
    </div>


    <script>
        let bigImg = document.querySelector('.big-img img');
        function showImg(pic){
            bigImg.src = pic;
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