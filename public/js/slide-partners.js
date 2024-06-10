
// if($(window).width() > 855){
//     $('.partners-sliders').slick({
//         dots: true,
//         slidesToShow: 4,
//         slidesToScroll: 1
//     });  
// }

// if($(window).width() < 855){
//     $('.partners-sliders').slick({
//         dots: true,
//         slidesToShow: 1,
//         slidesToScroll: 1
//     });
// }


// if(windowWidth >)
// $('.partners-sliders').slick({
//   dots: true,
//   slidesToShow: 1,
//   slidesToScroll: 1
// });  


    var windowWidth = $(window).width();
    if (windowWidth <= 855) {
        $('.partners-sliders').slick({
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    } else {
        $('.partners-sliders').slick({
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 1
        });  
    }

