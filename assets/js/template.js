$(document).ready(function () {
  //Show filename in the field after upload
  $("#template-image").on("change", function () {
    let fileway = $("#template-image").val().split("\\");
    let filename = fileway[2];
    $(".form__uploadtext").text(filename);
  });
  //Создание шаблона, появление превью
  $("#template-image").change(function () {
    //Получаем сам html-элемент(тег)
    let input = $(this)[0];
    let reader = new FileReader();
    reader.onload = function (e) {
      $(".template-preview-img").attr("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  });
  $('.certificate__img').on('mousemove', function(e) {
    // console.log(e.offsetX + " " + e.offsetY);
})
//Показываем текстовый блок при клике на область
$('.certificate__img').on('click', function(e) {
    let x = e.offsetX;
    let y = e.offsetY;
    $('.textbox').removeClass('hidden');
    $(".textbox").css({
        top: y,
        left: x,
        width: $('.width').val(),
        height: $('.height').val(),
        "textAlign": $('.align:checked').val()
      });
      $(".textbox .text-size-test").css({
        "fontSize": Number($('.template-fontsize').val()),
      })
      $('#template-coordinate').val(x + ',' + y);
})

//Меняем ширину и высоту блока
$('.width').on('input', function(e) {
  $('.width').val($(this).val())
  if($(this).val() == '') {
    $(this).val(904)
  }
    $(".textbox").css({
        width: `${$(this).val()}px`,
      });
})
$('.height').on('input', function(e) {
  $('.height').val($(this).val())
  if($(this).val() == '') {
    $(this).val(100)
  }
    $(".textbox").css({
        height: `${$(this).val()}px`,
      });
})
//Меняем отступы от краев блока
$('.right').on('input', function() {
  $('.right').val($(this).val())
    $(".textbox").css({
        paddingRight:`${$(this).val()}px`,
      });
})
$('.left').on('input', function() {
  $('.left').val($(this).val())
    $(".textbox").css({
        paddingLeft:`${$(this).val()}px`,
      });
    // $('#right').val(Number($('#width').val()) - Number($(this).val()) - Number($('.textbox__text').width()).toFixed(0));
})
$('.top').on('input', function() {
  $('.top').val($(this).val())
    $(".textbox").css({
        paddingTop:`${$(this).val()}px`,
      });
})
$('.bottom').on('input', function() {
    $(".textbox").css({
        paddingBottom:`${$(this).val()}px`,
      });
})
$('.align-left').on('change', function() {
  $('.align-left').prop('checked', true)
  $(".textbox").css({
    textAlign: 'left',
  });
})
$('.align-right').on('change', function() {
  $('.align-right').prop('checked', true)
  $(".textbox").css({
    textAlign: 'right',
  });
})
$('.align-center').on('change', function() {
  $('.align-center').prop('checked', true)
  $(".textbox").css({
    textAlign:'center',
  });
})
  //предпоказ по выбору размера шрифта
  $(".template-fontsize").on('input', function () {
    $(".template-fontsize").val($(this).val())
    let size = Number($(this).val());
    $(".text-size-test").css({
      fontSize: size,
    });
  });
  //предпоказ для выбора цвета текста
  $('.color').on('input', function() {
    $('.color').val($(this).val())
    let color = String($(this).val());
    $('.text-size-test').css({
        color: color,
    });
    let colorrgb = $(this).val();
    const r = parseInt(colorrgb.substr(1,2), 16);
    const g = parseInt(colorrgb.substr(3,2), 16);
    const b = parseInt(colorrgb.substr(5,2), 16);
  // console.log(`red: ${r}, green: ${g}, blue: ${b}`);
  $(this).closest('.container').find('#template-color-text').val(`${r},${g},${b}`);
})
//предпоказ шрифта
$('#form__font').on('input', function() {
    var valueSelected = this.value;
    $('.text-size-test').css({
        fontFamily: valueSelected,
    });
})
$('.form__font').on('change', function () {
  $('.textbox__text').css({
    fontFamily: $(this).val(),
  })
})

//Показ панели при наведении на рабочую область
$('.textbox').on('mouseover', function() {
  $('.textbox__popup').fadeIn()
});
$('.textbox').on('mouseleave', function() {
  $('.textbox__popup').fadeOut()
});
});
