// main slider
// document.addEventListener("DOMContentLoaded", function () {
//     $('#start-screen__slider').on('init reInit afterChange', function (event, slick, currentSlide) {
//         // Update slide count dynamically
//         const current = (currentSlide ? currentSlide : 0) + 1;
//         $('#start-screen__slider-count').text(`${current}/${slick.slideCount}`);
//     });
// });


// testimonial
jQuery(document).ready(function(){
    
    
    // $('#start-screen__slider').slick({
    //     autoplay: true,
    //     fade: true,
    //     speed: 1200,
    //     dots: true,
    //     appendDots: '#start-screen__slider-nav',
    //     customPaging: function (slider, i) {
    //         // Use custom dots (e.g., numbers or icons)
    //         return `<span class="slick-dot"></span>`;
    //     },
    //     responsive: [
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 appendDots: '#start-screen__slider-nav'
    //             }
    //         }
    //     ]
    // });
    

    jQuery('.review--slider1').slick({
      dots: true, 
      arrows: false,
      autoplay: true, 
      autoplaySpeed: 3000,
      infinite: true, 
      speed: 500, 
      slidesToShow: 1,
      slidesToScroll: 1, 
      appendDots: $('#slick-dots--container-0'), 
    });
  });

  jQuery(document).ready(function ($) {
    $('.brands-list--slider').slick({
        slidesToShow: 5, 
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                },
            },
        ],
    });
});

