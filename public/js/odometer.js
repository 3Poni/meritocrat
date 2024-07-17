
var flag = true;

$(document).ready(function(){
    var offsetTop = $('.about-company').offset().top, //offset from top of element - element has id of 'test'
        finalOffset = offsetTop - document.documentElement.clientHeight; //screen size
    $(window).on('scroll',function(){
        var whereAmI = $(document).scrollTop();
        if(whereAmI >= offsetTop && flag){
            flag = false;
            runNumbers()
        }
    })
})

function runNumbers() {
    $('.count').each(function() {
        $(this).prop('Counter', 0).animate({
            Counter:$(this).text()
        },{
            duration: 1000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        })
    })
}


