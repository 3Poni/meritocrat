

  $(window).on('resize', function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.table-benefits').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        adaptiveHeight: false,
        centerMode: false,
        variableWidth: false
      });
    } else {
      $('.table-benefits').slick('unslick');
    }
  });
  
  // Инициализация слайдера при загрузке страницы
  $(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.table-benefits').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        adaptiveHeight: false,
        centerMode: false,
        variableWidth: false
      });
    } else {
      $('.table-benefits').slick('unslick');
    }
  });