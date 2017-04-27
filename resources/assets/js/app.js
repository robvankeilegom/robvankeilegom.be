
/**
* First we will load all of this project's JavaScript dependencies which
* include Vue and Vue Resource. This gives a great starting point for
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');
require('jquery-match-height');
require('slick-carousel');

$( function() {
    $('.projects-slider').slick({
        adaptiveHeight: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.projects-slider').on('afterChange', function(event, slick, currentSlide, nextSlide){
        console.log(currentSlide);
    })
});
