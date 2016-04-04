Stripe.setPublishableKey('pk_test_rIVolSdn7s5HAxAD1DKIPgZD');

$(document).ready(function()
{			
	$(document).on('submit', 'form', function(e)
	{
		console.log($('#accept-terms-and-conditions').is(':checked'));
		$('.submit-button').attr('disabled','disabled');
		function stripeResponseHandler(status, response)
    	{
    		if($('#accept-terms-and-conditions').is(':checked'))
			{
				if(response.error)
				{
	    			error = response.error.message;
	    			$('#errors').html(error);
					$('.submit-button').removeAttr('disabled');
					$('.payment-errors').html();
				}
				else
				{
					var $form = $('form');		
					var token = response['id'];
					$form.append("<input type='hidden' name='stripeToken' value='" + token + "' />")
					$form.get(0).submit();
				}
			}
			else
			{
				alert('Please accept terms of agreement');
			}
    	}
    	Stripe.createToken(
    	{
        	'number': $('.card-number').val().split('-').join(''),
        	'cvc': $('.card-cvc').val(),
        	'exp_month': stringMonthToInteger($('#month').val()),
        	'exp_year': $('#year').val()
    	}, stripeResponseHandler);    
    	function stringMonthToInteger(month)
    	{
    		switch(month)
    		{
    			case 'January': return 1; break;
    			case 'February': return 2; break;
    			case 'March': return 3; break;
    			case 'April': return 4; break;
    			case 'May': return 5; break;
    			case 'June': return 6; break;
    			case 'July': return 7; break;
    			case 'August': return 8; break;
    			case 'September': return 9; break;
    			case 'October': return 10; break;
    			case 'November': return 11; break;
    			case 'December': return 12; break;
    			default: return 0;
    		}
    	}
    return false; // submit from callback
	});
	$('#clauses :checkbox').change(function(e)
	{
		var checkBoxIsChecked = ($(this).is(':checked'));
		var re = /([0-9]+)/g; 
		var priceLabel = $("label[for='"+$(this).attr('id')+"']").html();
		var priceInt = priceLabel.match(re);
		console.log(priceInt)
		if(checkBoxIsChecked) 
		{		
			$('.currency-ammount').html(parseInt($('.currency-ammount').html())+parseInt(priceInt));
		}
		else
		{
			$('.currency-ammount').html(parseInt($('.currency-ammount').html())-parseInt(priceInt));	
		}
	})
})