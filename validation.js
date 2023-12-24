function formValidate()
{
		  var namepattern =/^[A-Za-z\s]+$/;
		  var emailpattern=/^[A-Za-z0-9._]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
		  var numberpattern = /^[0-9]+$/;
		  var passpattern=/^[0-9]+$/; 


		  
		  var fname = document.getElementById('fname').value;
		  var lname = document.getElementById('lname').value;
		  var mail = document.getElementById('mail').value;
		  var phone = document.getElementById('phone').value;
		  var pass = document.getElementById('pass').value;
		 


		  
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
	
		if(!pass.match(passpattern))
		{
			alert( "Please enter valid password" );
            document.myForm.pass.focus();
			document.myForm.pass.style.border="solid 3px red";
            return false;
		}
		
}





