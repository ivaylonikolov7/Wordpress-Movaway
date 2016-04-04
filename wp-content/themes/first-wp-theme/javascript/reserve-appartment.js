$(document).ready(function()
{
    $('#reserve-button').click(
        function() {
            $('#reserve-flat').css('padding-top', '30px')
            $('#phase-one').hide();
            $('#phase-two').show();
    }
);


    $('.slider-image').click(function()
    {
        $('.big-slider').attr('src', $(this).attr('src'));    
        $('.active-slide').removeClass('active-slide');
        $(this).addClass('active-slide')
    })
})