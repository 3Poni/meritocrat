
  $(window).on('resize', function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.government-items').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: false,
        adaptiveHeight: false,
        centerMode: false,
        variableWidth: false
      });
    } else {
      $('.row-blocks-mobile').slick('unslick');
    }
  });
  
  // Инициализация слайдера при загрузке страницы
  $(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.government-items').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        adaptiveHeight: false,
        centerMode: false,
        variableWidth: false
      });
    } else {
      $('.government-items').slick('unslick');
    }
  });