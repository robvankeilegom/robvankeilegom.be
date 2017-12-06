
/**
* First we will load all of this project's JavaScript dependencies which
* include Vue and Vue Resource. This gives a great starting point for
* building robust, powerful web applications using Vue and Laravel.
*/

require('./bootstrap');
require('jquery-match-height');
require('slick-carousel');
require('magnific-popup');

$( function() {
    $('.projects-slider').slick({
        adaptiveHeight: true,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        autoplay: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.projects-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var slide = $(slick.$slides[nextSlide]);
        var projectContent = $('.project-content');
        projectContent.fadeOut('fast', function() {
            projectContent.html('');
            projectContent.append(slide.children('.links').clone());
            projectContent.append(slide.children('.description').clone());
            projectContent.append(slide.children('.tags').clone());
            projectContent.fadeIn('fast');
        });
    });

    $('.projects-slider').on('click', '.slick-slide', function (e) {
        e.stopPropagation();
        var index = $(this).data("slick-index");
        if ($('.projects-slider').slick('slickCurrentSlide') !== index) {
            $('.projects-slider').slick('slickGoTo', index);
        }
    });
});
