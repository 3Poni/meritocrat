
if($(window).width() < 767) {
    $('.industries-mobile-slider').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    $('.industries-mobile-slider').slick({
      dots: true,
      infinite: true
    });
  } else {
    $('.industries-mobile-slider').slick({
      dots: true,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1
    });
    $('.industries-mobile-slider').slick({
      dots: true,
      infinite: true
    });
  }

