$(function () {
    'use strict';


    $('.links').on('click' , function () {
        $('.links').removeClass('activeLink');
        $(this).addClass('activeLink');
    });



});

$(".university p ").each(function(i){
    len=$(this).text().length;
    if(len>80)
    {
        $(this).text($(this).text().substr(0,80)+'...');
    }
});


lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
});

$(window).scroll(function () {
$scroling = $(this).scrollTop()
    if ($scroling > 1400 ){
    $('#scroll-top').css('display','block');

    }else{
        $('#scroll-top').css('display','none');

    }


});
$('#scroll-top').click(function () {
    $('html,body').animate({scrollTop:0}, 900);

});
