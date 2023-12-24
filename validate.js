 function formValidate()
{
		 var ayear=document.myForm.ayear.value;
       if(ayear=="")
		 {
			alert( "No blank is allowed!" );
            document.myForm.ayear.focus();
			document.myForm.ayear.style.border="solid 3px red";

			 return false;

		 }
}