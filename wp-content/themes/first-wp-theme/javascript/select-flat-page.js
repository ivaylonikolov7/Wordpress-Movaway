$(document).ready(function()
{
	$('#month').selectOrDie(
		{
			customClass: 'card-expiry-month'
		});
	$('#year').selectOrDie(
	{
		customClass: 'card-expiry-year'
	})
	$('#period').selectOrDie();	    
})

