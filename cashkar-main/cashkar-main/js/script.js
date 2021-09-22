  // testimonial
  $(".testimonial__carousel .owl-carousel").owlCarousel({
    nav: true,
    navText: [
        '<i class="fas fa-angle-left"></i>',
        '<i class="fas fa-angle-right"></i>'
    ],
    margin:20,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    autoplaySpeed: 3000,
    navSpeed: 2000,
    loop: true,
    responsive:{
        0:{
            items:1,
            nav: true
        },
        600:{
            items:2,
        },
        1000:{
            items:3,
            nav: true
        }
    }
});

// Top selling model
$(".top-sell__carousel .owl-carousel").owlCarousel({
  nav: true,
  navText: [
      '<i class="fas fa-angle-left"></i>',
      '<i class="fas fa-angle-right"></i>'
  ],
  margin:20,
  dots: false,
  responsiveClass: true,
  autoplay: true,
  autoplaySpeed: 3000,
  navSpeed: 2000,
  loop: true,
  responsive:{
      0:{
          items:2,
          nav: true
      },
      600:{
          items:3,
      },
      1000:{
          items:5,
          nav: true
      }
  }
});


// Scroll TO TOP
$(document).ready(function(){
    // show hide button on scroll
    $(window).scroll(function(){
      if($(this).scrollTop() > 200){
        $('.scrollToTop').fadeIn();
      }
      else{
        $('.scrollToTop').fadeOut();
      }
    });
    //smooth scrolling to top
    $('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop: 0}, 1000)
    })
  });

