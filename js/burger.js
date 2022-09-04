$(function() {
    $('.burger').click(function(){
        $(this).toggleClass('open');
        $('.header').toggleClass('mobile__header')
        $('.header__nav').slideToggle('slow')
        $('body').toggleClass('overflow')
    });

    $('.header__nav-item').click(() => {
        if ($(window).width() < 1000) {
            $('.burger').removeClass('open')
            $('.header__nav').slideUp('slow')
            $('body').removeClass('overflow')
            $('.header').removeClass('mobile__header')
        }
    })
});