
if($(window).width() < 767) {
    $('.discussion-items-mobile').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    $('.discussion-items-mobile').slick({
      dots: true,
      infinite: true
    });
  } else {
    $('.discussion-items-mobile').slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1
    });
    $('.discussion-items-mobile').slick({
      dots: true,
      infinite: true
    });
  }

