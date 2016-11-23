$(document).ready(function(){

	/* insert element to click and element to scroll to */
	$('#Verslun').click(function (){
                
           scrollToElement('#Verslun1');	               
    });
   	$('#Contact').click(function (){
                
    	   scrollToElement('#Contact1');	               
    });

});

var scrollToElement = function(element)
{
	$('body').animate({
               scrollTop: ($(element).offset().top)
           }, 1000);
}