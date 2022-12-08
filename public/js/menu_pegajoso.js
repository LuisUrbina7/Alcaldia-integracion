$(document).ready(function() {
    var menu = $('.menu-pegajoso-inicio').offset().top;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > menu) {
            $('.menu-pegajoso-inicio').addClass('menu-fijo');
        } else {
            $('.menu-pegajoso-inicio').removeClass('menu-fijo');
        }
    })
});