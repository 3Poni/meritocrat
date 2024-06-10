
if($(window).width() < 767) {
    $('.reviews-sliders').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    $('.reviews-docs-slider').slick({
      dots: true,
      infinite: true
    });
  } else {
    $('.reviews-sliders').slick({
      dots: true,
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1
    });
    $('.reviews-docs-slider').slick({
      dots: true,
      infinite: true
    });
  }

