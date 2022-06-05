$('#change').on('change', function() {
    let fileway = $('#change').val().split('\\');
    let filename = fileway[2];
    $('.logo-change__text').text(filename);
    $('.logo-change__btn').removeClass('hidden');
})
$('#slogan').on('input', function() {
    $('.logo-change__btn').removeClass('hidden');
})