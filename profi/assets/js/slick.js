jQuery(function($) {
 $(document).ready(function(){
      var elements = $('.modal-overlay, .modal');

        $('.btn-contact').click(function(){
         elements.addClass('active');
        });

        $('.close-modal').click(function(){
          elements.removeClass('active');
        });
         $('.modal-overlay').click(function(){
          elements.removeClass('active');
        });
let width = window.innerWidth 
|| document.documentElement.clientWidth
|| document.body.clientWidth;
      if (width < 1200) {
      $('.about-slider').slick({
    		dots: true,
    		infinite: false,
    		speed: 300,
    		slidesToShow: 8,
    		slidesToScroll: 8,
    		responsive: [		
          {
            breakpoint: 1199,
            settings: {
            slidesToShow: 2,
            slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 1200,
           	settings: "unslick"
           }
        ]
      });
    }
  $('.team-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [   
          {
            breakpoint: 2560,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3
            }
          },
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });

  });
});
