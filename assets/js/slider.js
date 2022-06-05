//слайдер с грамотами - настройки
$(document).ready(function() {
  $('#slider').owlCarousel({
    items: 2,
    margin: 50,
    dots: false,
    nav: true,
    navContainer: ".slider__nav",
    navText: "",
    autoWidth: true,
    // rewind: true,
})  
    $('.owl-prev').addClass('circle').addClass('arrow-left');
    $('.owl-next').addClass('circle').addClass('arrow-right');
    $('.slide').mouseenter(function() {
        $(this).find('.slide__close').css('opacity', 1);
    })
    $('.slide').mouseleave(function() {
        $(this).find('.slide__close').css('opacity', 0);
    })
})
//удаление шаблона
$('.slide__close').on('click', function(e) {
    e.preventDefault();
    let slideId = $(this).data('slide');
    $.ajax({
        type: "POST",
        url: "assets/php/removeSlide.php",
        data: {
            slideId: slideId
        },
        dataType: "json",
        success: function(data) {
            $('.popup__wrapper').removeClass('hidden');
            $('.popup__message').html('<a href="" class="popup__close close circle"></a> ' + data.message);
            $('.popup__close').on('click', function (e) {
                e.preventDefault();
                let popup = $(this).parent().parent().css('opacity', 0).addClass('hidden');
            })
        }
    })
    $(this).parent().addClass('hidden');
})
