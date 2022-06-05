$(document).ready(function() {
    //начальные значения
    $('.select-font').text($('.form__font').first().val());
    $('.form__font').change(function() {
        $('.select-font').text($(this).val());
    })
    $('.color').change(function() {
    })
})