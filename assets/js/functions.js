$(document).ready(function () {
    $('.accordion__description').slideUp()
    $('.popup__close').on('click', function (e) {
        e.preventDefault();
        let popup = $(this).parent().parent().css('opacity', 0).addClass('hidden');
    })
    //выпадающее меню
    $('.accordion__head').on('click', function () {
        let accordionDescription = document.querySelectorAll('.accordion__description');
        
        if ($(this).next('.accordion__description').hasClass('active-dropdown')) {
            $(this).find('.accordion__open').css({"backgroundImage": "url(assets/img/dropdown-arrow-bottom.svg)"})
            $(this).next('.accordion__description').slideUp()
        } 
        else {
            $(this).find('.accordion__open').css({"backgroundImage": "url(assets/img/dropdown-arrow-top.svg)"})
            $(this).next('.accordion__description').slideDown()
        } 
        openDropdown(accordionDescription, this);

    })
    function getActiveDropdown(activeElement) {
        let accordionHeaders = document.querySelectorAll('.accordion__head');
        let index = Array.prototype.indexOf.call(accordionHeaders, activeElement);
        return index
    }
    function openDropdown(accordionList, activeElement) {
        accordionList.forEach((accordionElem) => {
            let indexDescription = Array.prototype.indexOf.call(accordionList, accordionElem)
            if (getActiveDropdown(activeElement) == indexDescription) {
                accordionList[indexDescription].classList.toggle('active-dropdown');
            }
        })
    }
})
