$(document).ready(function()
{
	$('.post-cv').click(function(){
	    $('#modal-overlay').fadeIn();
    	$('body').css('overflow', 'hidden');
	});
	$('#modal-overlay').click(function(e)
	{
	    if(e.target!==this)
	    {
        	return;
    	}
    	$('body').css('overflow', 'scroll');
	   	$('.modal').fadeOut();
	   	$('#modal-overlay').fadeOut();
	});
})
