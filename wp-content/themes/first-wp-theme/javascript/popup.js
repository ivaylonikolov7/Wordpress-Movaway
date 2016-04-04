$(document).ready(function(){
    $('#help-pack-welcome').click(function(e)
    {
        $('#overlay').fadeIn();
        $('#overlay-welcome-to-london').fadeIn();
        $('body').css('overflow', 'hidden');
    });

    $('#pack-staff').click(function(e)
    {
        $('#overlay').fadeIn();
        $('#overlay-pack-staff').fadeIn();
        $('body').css('overflow', 'hidden');
    });
    $('#taxis-modal').click(function()
    {
        $('#overlay').fadeIn();
        $('#overlay-taxi').fadeIn();
        $('body').css('overflow', 'hidden');
    })
    $('#overlay').click(function(e)
    {
        if(e.target!==this)
        {
            console.log(e.target)
            console.log(this)
            return;
        }
       $('#overlay').fadeOut();
        $('#overlay-welcome-to-london').fadeOut();
        $('#overlay-pack-staff').fadeOut();
        $('#overlay-taxi').fadeOut();
        $('#terms-of-agreemtn').fadeOut();
        $('body').css('overflow', 'scroll');
    });
    $(document).on('click','.toa',function()
    {
        $('#overlay').fadeIn();
        $('#terms-of-agreement').fadeIn();
        $('body').css('overflow', 'hidden');
    })
})