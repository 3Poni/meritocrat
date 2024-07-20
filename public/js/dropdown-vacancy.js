$('.dropdown').on('click', function (event) {
    var clickedBtn = $(this);
    clickedBtn.next()[0].classList.toggle('show');
});
