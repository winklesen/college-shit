$(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
new WOW().init();
// $(document).ready(function(){
//     $('.owl-carousel').owlCarousel();
//   });