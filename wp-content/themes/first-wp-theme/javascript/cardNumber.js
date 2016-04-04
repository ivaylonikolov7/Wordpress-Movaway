$(document).ready(function(){
    $('.card-number').keydown(function(e)
    {
        var cardVal = $(this).val().split('-').join('');  
        if(e.keyCode!=8 && cardVal.length>15)
        {
            e.preventDefault();
        }
    })
    $('.card-number').keyup(function()
    {
        var cardVal = $(this).val().split('-').join('');
        if(cardVal.length>0)
        {
            cardVal = cardVal.match(new RegExp('.{1,4}', 'g')).join('-');
        }

        $(this).val(cardVal);
    });
})