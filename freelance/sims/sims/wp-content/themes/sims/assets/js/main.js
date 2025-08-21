
// Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('.mob-menu-area').append($mobile_nav);
    $('.mob-menu-area').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
    $('.mob-menu-area').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }



  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 100);
    return false;
  });

//Course Carousel

      var owl = $('.course-slider');
      owl.owlCarousel({
        margin: 30,
        autoplay: true,
        autoplayHoverPause:true,
        nav: true,
        loop: true,
        items:1,
        responsiveClass:true,
        responsive: {
          0: {
            items: 1,
            nav:false
          },
          600: {
            items: 2
          },
          1000: {
            items: 4,
            nav:false
          }
        }
      });

// Testimonial Carousel

      var owl = $('.testimonial-carousel');
      owl.owlCarousel({
        autoplay: false,
        autoplayHoverPause:true,
        dots: false,
        nav: true,
        loop: true,
        items:1,
        responsiveClass:true,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      });
	  
// recruiters Carousel

      var owl = $('.recruiters-carousel');
      owl.owlCarousel({
        margin: 30,
        autoplay: true,
        autoplayHoverPause:true,
        dots: true,
        loop: true,
        items:1,
        responsiveClass:true,
        responsive: {
          0: {
            items: 2,
            dots:false
          },
          600: {
            margin: 0,
            items: 4,
            margin: 60,
            dots:false
          },
          1000: {
            items: 6,
            dots:true
          }
        }
      });
  
  // AOS.init();

  AOS.init({
  duration: 1500,

});

