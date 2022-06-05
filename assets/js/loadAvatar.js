function showAgree() {
    if($('#loadavatar').val() !== '') {
        $('#load-agree').fadeIn(500);
    }
}
function hideAgree() {
    $('#load-agree').on('click', function() {
        $(this).fadeOut(500);
    })
}
$('.profile__avatar').mouseenter(function() {
    $('.profile__load').css('opacity', 1);
    showAgree() ;
    hideAgree();
})
$('.profile__avatar').mouseleave(function() {
    $('.profile__load').css('opacity', 0);
    showAgree();
    hideAgree();
})