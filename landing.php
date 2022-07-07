<?php
session_start();
require "assets/php/Init.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/landing.css">
    <link rel="stylesheet" href="assets/css/light-theme.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <!-- Шрифты -->
    <!-- font-family: 'Baloo Bhaijaan 2', cursive;
    font-family: 'Open Sans', sans-serif; -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2:wght@400;500;600;700;800&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
    <!-- // Шрифты -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <title>Prezer - онлайн редактор грамот</title>
</head>

<body>
    <?php require "assets/components/header.php"; ?>
    <main>
        <!-- Баннер -->
        <div class="banner">
            <div class="container banner__wrapper">
                <div class="banner__item">
                    <h1 class="banner__title"><span class="banner__logo">Prizer</span> - удобный сервис для <br> создания грамот, дипломов и сертификатов</h1>
                    <a href="index.php" class="btn action-btn btn-medium">Создать грамоту</a>
                </div>
                <div class="banner__item banner__img">
                    <div class="circle banner__img-icon"><img src="assets/img/landing/banner-icon-plane.svg" alt=""></div>
                    <div class="circle banner__img-icon"><img src="assets/img/landing/banner-icon-bulb.svg" alt=""></div>
                    <div class="circle banner__img-icon"><img src="assets/img/landing/banner-icon-message.svg" alt=""></div>
                </div>
            </div>
        </div>
        <!-- // Баннер -->
        <!-- Преимущества -->
        <div class="block advantages">
            <div class="container advantages__wrapper">
                <div class="advantages__item advantage">
                    <img src="assets/img/landing/advantages-icon-1000.svg" alt="" class="advantage__icon">
                    <p class="advantage__title">и более участников</p>
                    <p class="advantage__description">Генерация грамот для любого количества участников от одного и до бесконечности</p>
                </div>
                <div class="advantages__item advantage">
                    <img src="assets/img/landing/advantages-icon-browser.svg" alt="" class="advantage__icon">
                    <p class="advantage__title">Работа в режиме онлайн</p>
                    <p class="advantage__description">Вам не придется скачивать приложение, достаточно создать аккаунт</p>
                </div>
                <div class="advantages__item advantage">
                    <img src="assets/img/landing/advantages-icon-bulb.svg" alt="" class="advantage__icon">
                    <p class="advantage__title">Быстро и бесплатно</p>
                    <p class="advantage__description">Сервис бесплатный и постоянно развивается</p>
                </div>
            </div>
        </div>
        <!-- //Преимущества -->
        <div class="block principes">
            <div class="container">
                <h1 class="title-l mb-30">Принцип работы сервиса</h1>
                <!-- Первая строка преимуществ -->
                <div class="principes__wrapper">
                    <!-- Large circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-l">01</div>
                        <p class="principes__name">Создайте шаблон</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-right.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-1-upload-maket.svg" alt=""></div>
                        <p class="principes__name">Загрузите макет</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-right.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-2-place-text.svg" alt=""></div>
                        <p class="principes__name">Расположите текст</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-right.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-3-change-styletext.svg" style="margin-left: 10px;" alt=""></div>
                        <p class="principes__name">Меняйте стили текста</p>
                    </div>
                </div>
                <!-- Вторая строка преимуществ -->
                <div class="principes__wrapper">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-6-archive.svg" alt=""></div>
                        <p class="principes__name">Скачивайте ахрив</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-left.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-5-excel.svg" alt=""></div>
                        <p class="principes__name">Загрузите Excel-файл</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-left.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-l">02</div>
                        <p class="principes__name">Создайте грамоты</p>
                    </div>
                    <!-- Arrow -->
                    <img src="assets/img/landing/principes-arrow-to-left.svg" alt="">
                    <!-- Medium circle -->
                    <div class="principes__item">
                        <div class="circle principes__circle-m"><img src="assets/img/landing/principes-icon-4-save-template.svg" alt=""></div>
                        <p class="principes__name">Сохраните шаблон</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Преимущества -->
        <!-- Пошаговое руководство -->
        <div class="block guide">
            <div class="container guide__wrapper">
                <div class="guide__item">
                    <h1 class="guide__title mb-30">Прочитайте пошаговое руководство по работе с редактором</h1>
                    <!-- Список чек лист -->
                    <div class="checked-list guide-list">
                        <p class="checked-list__item guide-list__item">Регистрация и возможности личного кабинета</p>
                        <p class="checked-list__item guide-list__item">Как создать грамоты - два простых шага</p>
                        <p class="checked-list__item guide-list__item">Особенности создания Excel файла со списком участников</p>
                    </div>
                    <!-- //Список чек лист -->
                    <a target="__blank" href="guide.php" class="btn second-btn btn-medium">Пошаговое руководство</a>
                </div>
                <div class="guide__item"><img class="guide__illustration" src="assets/img/landing/guide-illustration.svg" alt=""></div>
            </div>
        </div>
        <!-- //Пошаговое руководство -->
        <!-- Возможности -->
        <div class="block capabilities">
            <div class="container">
                <h1 class="title-l">Возможности</h1>
                <!-- Возможности Элемент1 -->
                <div class="capabilities__wrapper">
                    <div class="capabilities__item">
                        <h2 class="capabilities__title">Создайте собственный шаблон</h2>
                        <h5 class="capabilities__description">
                            Больше не нужно часами заполнять в фотошопе ФИО, настраивать выравнивание, параметры шрифта отдельно для каждого участника</h5>
                        <p class="capabilities__description">
                            Вам достаточно лишь загрузить изображение наградного документа с пустым местом для ФИО участника. Конструктор выполнит монотонную работу за вас!
                        </p>
                        <!-- Список чек лист -->
                        <div class="checked-list">
                            <p class="checked-list__item">Регистрация и возможности личного кабинета</p>
                            <p class="checked-list__item">Как создать грамоты - два простых шага</p>
                            <p class="checked-list__item">Особенности создания Excel файла со списком участников</p>
                        </div>
                        <!-- //Список чек лист -->
                        <a target="__blank" href="guide.php#template" class="link-l capabilities__link capabilities__link-top">Узнать больше, как создать шаблон</a>
                    </div>
                    <div class="capabilities__item">
                        <img src="assets/img/landing/capabilities-1-templates.png" alt="">
                    </div>
                </div>
                <!-- //Возможности Элемент1 -->
                <!-- Возможности Элемент2 -->
                <div class="capabilities__wrapper">
                    <div class="capabilities__item">
                        <img src="assets/img/landing/capabilities-2-profile.png" alt="">
                    </div>
                    <div class="capabilities__item">
                        <h2 class="capabilities__title">Настройте систему под себя</h2>
                        <p class="capabilities__description">
                            В настройках личного кабинета вы можете:
                        </p>
                        <!-- Список чек лист -->
                        <div class="checked-list">
                            <p class="checked-list__item">Сменить аватар</p>
                            <p class="checked-list__item">Обновить пароль и данные о себе</p>
                            <p class="checked-list__item">Поменять изображение логотипа и слоган</p>
                            <p class="checked-list__item">Просматривать и удалять ваши шаблоны</p>
                        </div>
                        <!-- //Список чек лист -->
                        <a target="__blank" href="guide.php#profile" class="link-l capabilities__link capabilities__link-top">Узнать больше о работе в личном кабинете</a>
                    </div>
                </div>
                <!-- //Возможности Элемент2 -->
                <!-- Возможности Элемент3 -->
                <div class="capabilities__wrapper">
                    <div class="capabilities__item">
                        <h2 class="capabilities__title">Работайте с удобными форматами</h2>
                        <!-- Список чек лист -->
                        <div class="checked-list mb-30">
                            <p class="checked-list__item">Выбирайте шаблон из списка в личном кабинете</p>
                            <p class="checked-list__item">Обновить пароль и данные о себеПодготовьте Excel файл со списком участников</p>
                            <p class="checked-list__item">Загрузите файл и конструктор все сделает за вас!</p>
                        </div>
                        <!-- //Список чек лист -->
                        <p class="capabilities__description">
                            Вы можете скачать пример Excel файла участников и заполнить его своими данными или создать файл по образцу, как на картинке справа
                        </p>
                        <div class="container-flex">
                            <a href="excel/students.xlsx" class="btn second-btn btn-small capabilities__btn">Скачать образец</a>
                            <a target="__blank" href="guide.php#excel" class="link-l capabilities__link">Подробнее о работе с Excel</a>
                        </div>
                    </div>
                    <div class="capabilities__item">
                        <img src="assets/img/landing/capabilities-3-excel.png" alt="">
                    </div>
                </div>
                <!-- //Возможности Элемент 3 -->
            </div>
        </div>
        <!-- //Возможности -->
        <!-- Часто задаваемые вопросы -->
        <div class="block faq">
            <div class="container">
                <h1 class="title-l">Часто задаваемые вопросы</h1>
                <h3 class="postitle-l faq__postitle">Если у вас есть вопрос, напишите нам через <a href="support.php" class="link-l">форму</a> технической поддержки или по электронной почте</h3>
                <div class="accordion faq__accordion">
                    <!-- Вопрос -->
                    <div class="container-flex accordion__head"><a class="accordion__title">Зачем нужен личный кабинет и авторизация?</a> <a class="accordion__open"></a></div>
                    <!-- //Вопрос -->
                    <!-- Ответ -->
                    <div class="accordion__description">
                        <p>Работа с сервисом состоит из двух этапов: создание уникального шаблона и сохранение грамот на основе созданного шаблона и списка участников. В вашем личном кабинете будут храниться все созданные вами шаблоны. Вы можете легко управлять шаблонами и настроить профиль под себя</p>
                        <a target="__blank" href="guide.php" class="link-l accordion__link accordion__link-bottom">Узнать больше о работе с сервисом </a> <br>
                        <a target="__blank" href="guide.php#register" class="link-l accordion__link accordion__link-bottom">Как зарегистрироваться</a>

                    </div>
                    <!-- Вопрос -->
                    <div class="container-flex accordion__head"><a class="accordion__title">Это бесплатно?</a> <a class="accordion__open"></a></div>
                    <!-- //Вопрос -->
                    <!-- Ответ -->
                    <div class="accordion__description">
                        <p>
                            Это полностью бесплатный редактор грамот. Так как сервис по созданию грамот новый и постоянно развивается, вам доступны все его функции, вы можете <a target="__blank" href="index.php" class="link-l accordion__link">создать грамоты онлайн</a> или <a href="about.php" target="__blank" class="link-l accordion__link">узнать больше</a> о возможностях редактора
                        </p>
                    </div>
                    <!-- Вопрос -->
                    <div class="container-flex accordion__head"><a class="accordion__title">У меня есть предложение или идея?</a> <a class="accordion__open"></a></div>
                    <!-- //Вопрос -->
                    <!-- Ответ -->
                    <div class="accordion__description">
                        <p>
                            Возможно, вас заинтересовал сервис и вы знаете, как его улучшить; или вы пользуетесь сервисом, но вам не хватает какой-то функции, которая сделает работу с сервисом более удобной.
                        </p>
                        <p>
                            Мы поддерживаем любые идеи наших пользователей по развитию проекта - нам важно, чтобы вам было удобно работать с сервисом. Также принимаются предложения по поддержке сервиса
                        </p>
                    </div><!-- Ответ -->
                    <!-- Вопрос -->
                    <div class="container-flex accordion__head"><a class="accordion__title">У меня возникла ошибка</a> <a class="accordion__open"></a></div>
                    <!-- //Вопрос -->
                    <!-- Ответ -->
                    <div class="accordion__description">
                        <p>Если у вас возникли проблемы при работе с сервисом или что-то не работает, вы можете <a class="link-l accordion__link" href="support.php">написать нам</a> на сайте или на почту <a class="link-l accordion__link">mashalena123@mail.ru</a></p>
                    </div><!-- Ответ -->
                </div>
            </div>
        </div>
        </div>
    </main>
    <?php require "assets/components/footer-landing.php"; ?>
    <!-- //Часто задаваемые вопросы -->
    <script src="assets/js/functions.js"></script>
</body>

</html>