<?php
session_start();
require "assets/php/Init.php";
checkUser($user);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/light-theme.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
   <script src="assets/js/jquery.min.js"></script> 
    <title>Prezer | Создать шаблон</title>
</head>
<body>
<?php require "assets/components/header.php"; ?>
<?php if(isset($_SESSION["message"])): ?>
<div class="popup__wrapper <?= (isset($_SESSION["message"]) && $_SESSION["message"] == '')? 'hidden' : ''?>">
    <p class="popup__message popup" >
        <a href="" class="popup__close close circle"></a>
        <?php showMessage($_SESSION["message"]);  unset($_SESSION["message"]); ?>
    </p>
</div>
<?php endif; ?>
    <main>
        <div class="container">
            <form action="assets/php/template.php" class="certificate content-block" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="MAX_FILE_SIZE" value="20000000000000000">
                <p class="title-bg">Создать шаблон</p>
                <div class="form__group certificate__group">
                    <label for="template-name" class="title-marked form__label m-14">Название шаблона</label>
                    <input type="text" placeholder="Например, конкурс по программированию на Java" id="template-name" class="form__field" name="template-name">
                </div>
                <div class="form__group certificate__group">
                    <label for="template-image" class="title-marked form__label m-14">Изображение грамоты для создания шаблона</label>
                    <div class="form__field">
                        <label class="form__uploadtext" for="template-image">Загрузить изображение</label>
                        <input type="file" id="template-image" name="template-image">
                    </div>
                </div>
                <div class="form__group certificate__group">
                    <p class="form__description m-14">Щелкните по шаблону, где должен начинаться текст для предпросмотра или введите координаты вручную</p>
                    
                </div>
                <!-- Template Preview -->
               <div class="certificate__preview">
                   <!-- КАРТИНКА ПРЕВЬЮ -->
                    <div class="textbox hidden">
                        <!-- НАСТРОЙКИ - ВСПЛЫВАЮЩЕЕ ОКНО -->
                    <div class="popup textbox__popup">
                        <!-- ШРИФТ -->
                        <div title="Выберите шрифт" class="form__field form__field-select textbox__field">
                            <p class="select-font textbox__field"></p>
                            <select name="template-font-popup" class="form__font form__select">
                                <option class="form__field form__font-option" value="Montserrat">Montserrat</option>
                                <option class="form__field form__font-option" value="SourceSansPro" style="font-family: 'SourceSansPro';">SourceSansPro</option>
                                <option class="form__field form__font-option" style="font-family: 'Roboto';" value="Roboto">Roboto</option>
                            </select>
                        </div>
                        <!-- РАЗМЕР ШРИФТА -->
                        <input title="Размер шрифта" type="number" class="form__field textbox__field template-fontsize" value="34" min="10" max="288" name="template-fontsize-popup">
                        <!-- ЦВЕТ -->
                        <div title="Цвет текста" class="form__field template-color textbox__field" >
                           <input type="color" class="color" name="color-popup" style="z-index: 5;"> 
                        </div>
                        <div title="Выравнивание текста" class="form__field textbox__field">
                            <!-- ВЫРАВНИВАНИЕ -->
                        <input title="По левому краю" type="radio" name="align" value="left" class="align-left" class="align" checked> Left
                        <input title="По центру" type="radio" name="align" value="center" class="align-center" class="align"> Center
                        <input title="По правому краю" type="radio" name="align" value="right" class="align-right" class="align"> Right
                        </div>
                        <!-- ширина блока -->
                        <div title="Ширина рабочей области" class="form__field textbox__field textbox__number">
                           <input type="number" class="textbox__number width" name="width2" value="904"> 
                        </div>
                        <!-- ВЫСОТА БЛОКА -->
                        <div title="Высота рабочей области" class="form__field textbox__field textbox__number">
                        <input type="number" class="textbox__number height" name="height2" value="100">
                        </div>
                        <!-- Отступ слева -->
                        <div title="Отступ слева" class="form__field textbox__field textbox__number">
                        <input type="number" class="left textbox__number" name="left2" value="0">
                        </div>
                        <!-- Отступ справа -->
                        <div title="Отступ справа" class="form__field textbox__field textbox__number">
                            <input type="number" class="right textbox__number" name="right2" value="0">
                        </div>
                        <!-- Отступ сверху -->
                        <div title="Отступ сверху" class="form__field textbox__field textbox__number">
                            <input type="number" class="top textbox__number" name="top2" value="0">
                        </div>
                        
                    </div>   
                    <p class="text-size-test textbox__text">Иванов Иван</p>
                    </div>
                   <img src="" alt="" class="template-preview-img certificate__img">
                </div>
               
                <!-- //Template Preview -->
               <div class="form__group certificate__group certificate__settings">
                    <div class="certificate__setting">
                        <label for="template-font" class="title-marked form__label m-14">Шрифт</label>
                        <div class="form__field form__field-select">
                        <p class="select-font"></p>
                        <select name="template-font" class="form__font form__select">
                            <option class="form__field form__font-option" value="Montserrat">Montserrat</option>
                            <option class="form__field form__font-option" value="SourceSansPro" style="font-family: 'SourceSansPro';">SourceSansPro</option>
                            <option class="form__field form__font-option" style="font-family: 'Roboto';" value="Roboto">Roboto</option>
                        </select>
                        </div>
                    </div>
                    <div class="certificate__setting">
                        <label class="title-marked form__label m-14">Выравнивание</label>
                        <input type="radio" name="align2" value="left" class="align-left" class="align" checked> Left
                        <input type="radio" name="align2" value="center" class="align-center" class="align"> Center
                        <input type="radio" name="align2" value="right" class="align-right" class="align"> Right
                    </div>
                    <div class="certificate__setting">
                        <label for="template-fontsize" class="title-marked form__label m-14">Размер</label>
                        <input type="number"  id="template-fontsize" class="form__field template-fontsize" value="34" min="10" max="288" name="template-fontsize">
                    </div>
                    <div class="certificate__setting">
                        <label for="color" class="title-marked form__label m-14">Цвет</label>
                        <div class="form__field template-color">
                           <input type="color" class="color" name="color" style="z-index: 5;"> 
                        </div>
                    </div>
                    <div class="certificate__setting">
                        <label for="width" class="title-marked form__label m-14">Выберите ширину блока</label>
                        <div class="form__field">
                           <input type="number" class="width" name="width" value="904"> 
                        </div>
                    </div>
                    <div class="certificate__setting">
                        <label for="height" class="title-marked form__label m-14">Выберите высоту блока</label>
                        <div class="form__field">
                        <input type="number" id="height" class="height" name="height" value="100">
                        </div>
                    </div>
                    <div class="certificate__setting">
                        <label for="left" class="title-marked form__label m-14">Выберите отступ слева</label>
                        <div class="form__field">
                        <input type="number" id="left" class="left" name="left" value="0">
                        </div>
                    </div>
                    <div class="certificate__setting">
                        <label for="top" class="title-marked form__label m-14">Выберите отступ сверху</label>
                        <div class="form__field">
                        <input type="number" class="top" id="top" name="top" value="0">
                    </div>
                    </div>
                    <div class="certificate__setting">
                        <label for="right" class="title-marked form__label m-14">Отступ справа</label>
                        <div class="form__field">
                        <input type="number" class="right" id="right" name="right" value="0">
                        </div>
                    </div>
                    <div class="certificate__setting">
                    <label for="template-image" class="title-marked form__label m-14">Расположение текста</label>
                        <div class="form__field">
                        <input type="text" id="template-coordinate" name="template-coordinate">
                        </div>
                    </div>
                    <input class="hidden" type="text" id="template-color-text" name="template-color"> 
               </div>
               
                  <p id="preview-text" class="text-size-test">Текст для предпросмотра</p>
               <div class="template__btn">   
               <button type="submit" name="add-template" class="btn btn-large action-btn certificate__btn">Создать</button>   
               </div>
               
            </form>
        </div>
    </main>
<?php require "assets/components/footer.php"; ?>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/fieldsFill.js"></script>
    <script src="assets/js/template.js"></script>
</body>
</html>