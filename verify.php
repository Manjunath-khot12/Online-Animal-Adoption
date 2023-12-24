<?php

if(isset($_POST['adopt']))
{
	 $a_id = $_POST['a_id'];
	 $Tqty = $_POST['Tqty'];
	 $name = $_POST['name'];
	 $mail = $_POST['mail'];
	 $phone = $_POST['phone'];
	 $aname = $_POST['aname'];
	 $age = $_POST['age'];
	 $acat = $_POST['acat'];
	 $year = $_POST['year'];
	 $adate = $_POST['adate'];
	 $gender = $_POST['gender'];
     $lifetime = $_POST['lifetime'];
	 $amount = $_POST['amount'];
	
}


?>
<html>
<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> 

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

</head>
	<body style="border:2px solid black;">
		    <h2><a style="margin-left:20px;padding-top:500px;"class="back-link" href="Adopt-now.php"><i class="fa fa-arrow-left"></i></a></h2>


	 <img src="IMAGES3/payment.png"   alt="" style="margin-left:250px;margin-top:-200px;border-radius:25px;border:2px solid white;width:500px;display:inline-block;padding:200px;">

	<h1 style="text-align:center;margin-left:0px;margin-top:-100px;">Thank You!!!   Your Data is verified  Next ..<br>..  Pay the Adoption Amount </h1>
	<input type="hidden" name="a_id" id="a_id" value="<?php echo $a_id; ?>">
	<input type="hidden" name="Tqty"  id="Tqty" value="<?php echo $Tqty; ?>">
	<input type="hidden" name="name"  id="name" value="<?php echo $name; ?>">
	<input type="hidden" name="mail"  id="mail" value="<?php echo $mail; ?>">
	<input type="hidden" name="phone"  id="phone" value="<?php echo $phone; ?>">
	<input type="hidden" name="aname"  id="aname" value="<?php echo $aname; ?>">
	<input type="hidden" name="age"  id="age" value="<?php echo $age; ?>">
	<input type="hidden" name="acat"  id="acat" value="<?php echo $acat; ?>">
	<input type="hidden" name="year"  id="year" value="<?php echo $year; ?>">
	<input type="hidden" name="adate"  id="adate" value="<?php echo $adate; ?>">
	<input type="hidden" name="gender"  id="gender" value="<?php echo $gender; ?>">
	<input type="hidden"name="lifetime"  id="lifetime" value="<?php echo $lifetime; ?>">
	<input type="hidden" name="amount" id="amount" value="<?php echo $amount; ?>">







	<center><input type="button" onclick="pay_now()" value="Pay NoW" style="padding:15px;background-color:orange;cursor:pointer;"></center>
	 </div>
	</body>
</html>
<script>
 function pay_now()
	{
      
       
        var name=jQuery('#name').val();
        var mail=jQuery('#mail').val();
		 var phone=jQuery('#phone').val();
        var aname=jQuery('#aname').val();
        var lifetime=jQuery('#lifetime').val();
        var age=jQuery('#age').val();
        var acat=jQuery('#acat').val();
        var year=jQuery('#year').val();
        var adate=jQuery('#adate').val();
        var gender=jQuery('#gender').val();
		 var amount=jQuery('#amount').val();
		 var Tqty=jQuery('#Tqty').val();
		 var a_id=jQuery('#a_id').val();
		 	 
       
		   
   jQuery.ajax({
               type:'post',
               url:'payment_process.php',
               data:"name="+name+"&mail="+mail+"&Tqty="+Tqty+"&a_id="+a_id+"&phone="+phone+"&aname="+aname+"&lifetime="+lifetime+"&age="+age+"&acat="+acat+"&year="+year+"&adate="+adate+"&gender="+gender+"&amount="+amount,
               success:function(result)
			   {
                   var options= 
				   {
                        "key": "rzp_live_kk5tGkTaooRTd0", 
                        "amount": 1*100, 
                        "currency": "INR",
                        "name": "Acme Corp",
                        "description": "Test Transaction",
                        "image": "https://image.freepik.com/free-vector/logo-sample-text_355-558.jpg",
                        "handler": function (response)
						{
                           jQuery.ajax(
						   {
                               type:'post',
                               url:'payment_process.php',
                               data:"payment_id="+response.razorpay_payment_id,
                               success:function(result)
							   {
								   
                                   window.location.href="thank_you.php";
                               }
                           });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
               }
           });
		 
        
        
    }
	
</script>
 
 