$(document).ready(function() {
    $('.popup__close').on('click', function (e) {
        e.preventDefault();
        let popup = $(this).parent().parent().css('opacity', 0).addClass('hidden');
    })
})
