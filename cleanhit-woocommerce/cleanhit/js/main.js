(function($) {

	"use strict";


    $(window).on('load', function() {

    // Preloader
      $('#preloader').delay(350).fadeOut('slow');
      //mixitup
       $('#Container .custom .row').mixItUp();

    })

    // Navbar Scroll To Fixed
    $('.fixed-header').scrollToFixed();

    //menu active
    $('#menu').cookcodesmenu();

    // Pogo Slider
    $('#pogo-slider').pogoSlider({
        autoplay: true,
        autoplayTimeout: 5000,
        displayProgess: true,
        targetWidth: 1920,
        responsive: true,
        pauseOnHover: false,
    }).data('plugin_pogoSlider');

    // AOS active
    AOS.init({
        duration: 2000,
        once: false,
        offset: 200,
    });


    // Testimonial carousel
    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: true,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            animateIn: 'flipInX',
            navText: [
              '<i class="fa fa-long-arrow-down"></i>',
              '<i class="fa fa-long-arrow-up"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }


    // Blog carousel
    if($('.blog-slider').length){
        $('.blog-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            navText: [
              '<i class="fa fa-long-arrow-left"></i>',
              '<i class="fa fa-long-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                480:{
                    items:1,
                    center: false
                },
                600: {
                    items: 1,
                    center: false
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        })
    }



    // Team carousel
    if($('.team-slider').length){
        $('.team-slider').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            autoplayHoverPause: false,
            autoplay: true,
            autoplayTimeout: 4000,
            smartSpeed: 700,
            navText: [
              '<i class="fa fa-long-arrow-left"></i>',
              '<i class="fa fa-long-arrow-right"></i>'
            ],
            responsive: {
                0: {
                    items: 1,
                    center: false
                },
                575:{
                    items:2,
                    center: false
                },
                600: {
                    items: 2,
                    center: false
                },
                768: {
                    items: 3
                },
                992: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        })
    }

    //home slide two 
    if($('.main-slider').length){
        $('.main-slider').owlCarousel({
            loop: true,
            nav: false,
            dots: true,
            margin: 0,
            autoplay: true,
            autoplayTimeout: 4500,
            autoplayHoverPause: false,
            autoplaySpeed: 1200,
            animateIn: 'fadeIn',
            navText: [
                    '<i class="fa fa-long-arrow-left"></i>',
                    '<i class="fa fa-long-arrow-right"></i>'
                ],
            responsive: {
                0: {
                    items:1
                },
                600:{
                    items:1
                },
                1000: {
                    items:1
                }
            }
        });
    }
    // CounterUp
    $('.counter').counterUp({
          delay: 10,
          time: 1000
      });

    // Parallax background
    $('.jarallax').jarallax({
        speed: 0.5
    });

    // Water ripples animation
    $('#water-animation').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.04
    });

    //Scroll-Up
    dyscrollup.init({
        showafter : 500,
        scrolldelay : 1000,
        position : 'right',
        shape : 'squre',
        width : "20",
        height : "20"
    });
/*----------------------------------
    background image taken code
    -----------------------------------*/
    if ($('.background-image').length > 0) {
        $('.background-image').each(function () {
          var src = $(this).attr('data-src');
          $(this).css({
            'background-image': 'url(' + src + ')'
          });
        });
      }




})(window.jQuery);