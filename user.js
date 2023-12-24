/*strat of feedback*/

	 function showgivefeedback()
	  {
      
		document.querySelector(".Main-div").classList.add('showgivefeedback');
	  }
	  function closeFeedback()
	  {
      
		document.querySelector(".Main-div").classList.remove('showgivefeedback');
	  }
/*end feedback*/



/*top button javascript start here*/
window.onload=(function()
{
let mybutton=document.getElementById("myBtn");
window.onscroll=function()
{
scrollFunction();
}
function scrollFunction()
{
if(document.body.scrollTop > 50)
{
mybutton.style.display="block";
navbar.classList.add("sticky");
}
else
{
mybutton.style.display="none";
navbar.classList.remove("sticky");

}
}
});
function topFunction()
{
document.body.scrollTop=20;
}
/*top button javascript end here*/





