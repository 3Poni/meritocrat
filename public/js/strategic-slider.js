  $(window).on('resize', function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.strategic-icons').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
      });
    } else {
      $('.strategic-icons').slick('unslick');
    }
  });
  
  // Инициализация слайдера при загрузке страницы
  $(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
      $('.strategic-icons').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        
      });
    } else {
      $('.strategic-icons').slick('unslick');
    }
  });


  $(window).on('resize', function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 767) {
      $('.row-blocks').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        
      });
    } else {
      $('.row-blocks').slick('unslick');
    }
  });
  
  // Инициализация слайдера при загрузке страницы
  $(document).ready(function() {
    var windowWidth = $(window).width();
    if (windowWidth <= 767) {
      $('.row-blocks').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true
      });
    } else {
      $('.row-blocks').slick('unslick');
    }
  });