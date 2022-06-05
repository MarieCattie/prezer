$('.form__link').on('click', function() {
    $('.form').each(function(index, form) {
        $(form).toggleClass('hidden-form');
    });
    hide($(this).parent());
    $('.form').each(function(index, form) {
        if(!($(form).hasClass('hidden-form'))) {
            $(form).delay(500).animate({height: 'show'}, 1000);
        }
        
    });
})
function hide(blockId) {
    if(!($(blockId).hasClass('hidden-form')))
    {
        $(blockId).animate({height: 'show'}, 500);
    }
    else
    {
        $(blockId).animate({height: 'hide'}, 500);
    }
}
function show(blockId) {
    if(($(blockId).hasClass('hidden-form')))
    {
        $(blockId).animate({height: 'show'}, 500);
    }
    else
    {
        $(blockId).animate({height: 'hide'}, 500);
    }
}
