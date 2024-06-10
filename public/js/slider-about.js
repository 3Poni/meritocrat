
if($(window).width() < 767) {
    $('.project-slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });
  } else {
    $('.project-slider').slick({
      dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1
    })
  }
