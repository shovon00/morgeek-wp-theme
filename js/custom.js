(function ($) {
    "use strict";

      // pre loader
      $(window).on('load', function(){
        $('.preloader').fadeOut(750); // set duration in brackets    
      });

      // scroll-down
      $('.about-head-text a').click(function(){
         $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 1000);
       return false;
      });

      // Go top
      $(window).on('scroll', function() {
        if ($(this).scrollTop() > 200) {
          $('.go-top').fadeIn(200);
            } else {
              $('.go-top').fadeOut(200);
          }
        });   
        // Animate the scroll to top
        $('.go-top').on('click', function(event) {
          event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
      })

      // counter-up
     
    $(window).on('load', function($){
        $('.counter').counterUp({
          delay: 30,
          time: 2000
        });
      });


      new WOW().init();



})(jQuery);