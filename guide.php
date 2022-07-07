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
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/swiper.css">
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
        <div class="container">
            <div class="block guide">
                <h1 class="title-l title-l-large">Пошаговое руководство</h1>
                <!-- Аккордеон -->
                <div class="accordion faq__accordion">
                    <!-- Вопрос -->
                    <div class="container-flex accordion__head"><a class="accordion__title">Содержание</a> <a class="accordion__open"></a></div>
                    <!-- //Вопрос -->
                    <!-- Ответ -->
                    <div class="accordion__description">
                        <a href="#register" class="link-l accordion__link accordion__link-bottom guide__link">Как создать личный кабинет</a>
                        <a href="#profile" class="link-l accordion__link accordion__link-bottom guide__link guide__link-second">Функции в личном кабинете</a>
                        <a href="#steps" class="link-l accordion__link accordion__link-bottom guide__link guide__link">Как создать грамоты - два простых шага</a>
                        <a href="#template" class="link-l accordion__link accordion__link-bottom guide__link guide__link-second">Создание шаблона</a>
                        <a href="#generate" class="link-l accordion__link accordion__link-bottom guide__link guide__link-second">Создание грамот на основе шаблона</a>
                        <a href="#excel" class="link-l accordion__link accordion__link-bottom guide__link">Особенности создания Excel файла со списком участников</a>
                    </div>
                </div>
                <!-- // Аккордеон -->
                <div class="container-flex">
                    <div id="register">
                        <h2 class="guide__title">Как создать личный кабинет</h2>
                        <p class="guide__text">
                            Чтобы создать грамоты онлайн, нужно зарегистрироваться. Это обязательно, так как в личном кабинете будут храниться все ваши созданные шаблоны, с которыми вы будете работать. Создать личный кабинет просто:
                        </p>
                        <p class="guide__text">
                            В шапке сайта нажмите на кнопку <span class="btn action-btn small-btn guide__btn">Личный кабинет</span>
                        </p>
                        <p class="guide__text">
                            Вы попадете на страницу входа в систему. Если вы первый раз работаете с системой, нажмите на кнопку <a class="link-l">Зарегистрироваться</a> на модальном окне.
                        </p>
                        <p class="guide__text">
                            В окне регистрации заполните все поля и нажмите на кнопку <span class="btn action-btn small-btn guide__btn">Зарегистрироваться</span>
                        </p>
                        <p class="guide__text">
                            <span class="decorated">Личный кабинет создан!</span>
                            Теперь вы можете войти.
                        </p>
                        <p class="guide__text">
                            На этой же странице в окне входа введите почту и пароль, указанные при регистрации.
                        </p>
                        <p class="guide__text">
                            По кнопке <span class="btn action-btn small-btn guide__btn">Личный кабинет</span> также можно <a href="" class="link-l">перейти в личный кабинет</a>, если он у вас уже есть.
                        </p>
                    </div>
                    <div class="mockup">
                        <img src="assets/img/MacBookPro16.png" alt="">
                        <video class="mockup__video" autoplay="autoplay" controls="controls" poster="assets/img/MacBookPro16Preview.png">
                            <source src="assets/videos/Prezer1_2_logo.mp4">
                            Тег video не поддерживается вашим браузером.
                            <a href="assets/videos/Prezer1_2_logo.mp4">Скачайте видео</a>.
                        </video>
                    </div>
                </div>
                <!-- Функции в личном кабинете -->
                <div id="profile">
                    <h2 class="guide__title">Функции в личном кабинете</h2>
                    <p class="guide__text">
                        Личный кабинет - это ваше рабочее пространство, которое вы можете настроить под себя:
                    </p>
                    <div class="checked-list">
                        <p class="checked-list__item">Сменить аватарку</p>
                        <p class="checked-list__item">Просмотреть и удалить созданные шаблоны</p>
                        <p class="checked-list__item">Изменить логотип на сайте</p>
                        <p class="checked-list__item">Изменить информацию о себе</p>
                        <p class="checked-list__item">Обновить пароль</p>
                    </div>
                    <!-- Ряд 1 -->
                    <div class="container-flex profile__functions-guide">
                        <!-- Функция личного кабинета ряд1 -->
                        <div class="function-guide">
                            <div class="function-guide__image"><img src="assets/img/icons/guide-user-circle.svg" alt=""></div>
                            <div>
                                <h3 class="function-guide__name">Смена аватарки</h3>
                                <p class="guide__text">Нажмите на иконку в профиле, выберите изображение и подтвердите загрузку</p>
                                <div class="container-flex">
                                    <div class="function-guide__tutorial"><img src="assets/img/landing/guide-profile-create.png" alt=""></div>
                                    <div class="function-guide__tutorial"><img src="assets/img/landing/guide-profile-create2.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <!-- // Функция личного кабинета -->
                        <!-- Функция личного кабинета ряд1 -->
                        <div class="function-guide">
                            <div class="function-guide__image"><img src="assets/img/icons/guide-diploma-circle.svg" alt=""></div>
                            <div>
                                <h3 class="function-guide__name">В профиле вы можете просматривать свои шаблоны грамот</h3>
                                <p class="guide__text">Чтобы удалить шаблон, наведите на него курсор и нажмите на крестик.</p>
                                <div class="container-flex">
                                    <div class="function-guide__tutorial"><img src="assets/img/landing/guide-profile-create3.png" alt=""></div>
                                    <div class="function-guide__tutorial"><img src="assets/img/landing/guide-profile-create4.png" alt=""></div>
                                </div>
                            </div>
                        </div>
                        <!-- // Функция личного кабинета -->
                    </div>
                    <!-- //Ряд 1 -->
                    <!-- Ряд 2 -->
                    <div class="container-flex profile__functions-guide">
                        <!-- Функция личного кабинета -->
                        <div class="function-guide">
                            <div class="function-guide__image"><img src="assets/img/icons/guide-settings-circle.svg" alt=""></div>
                            <div>
                                <h3 class="function-guide__name">Вы можете изменить данные о себе в любой момент</h3>
                                <p class="guide__text">
                                    Достаточно изменить текст в полях и нажать кнопку <span class="btn action-btn small-btn guide__btn">Обновить</span>
                                </p>

                            </div>
                        </div>
                        <!-- // Функция личного кабинета -->
                        <!-- Функция личного кабинета -->
                        <div class="function-guide">
                            <div class="function-guide__image"><img src="assets/img/icons/guide-password-circle.svg" alt=""></div>
                            <div>
                                <h3 class="function-guide__name">Придумайте новый пароль и заполните форму</h3>
                                <p class="guide__text">
                                    Достаточно изменить текст в полях и нажать кнопку <span class="btn action-btn small-btn guide__btn">Обновить</span>
                                </p>
                            </div>
                        </div>
                        <!-- // Функция личного кабинета -->
                    </div>
                    <!--// Ряд 2 -->
                    <p class="guide__text profile__problem-text">Если возникли проблемы со входом в систему или забыли пароль, напишите нам через <a href="support.php" class="link-l">форму технической поддержки</a> или на электронную почту</p>
                    <!-- Ряд 3 -->
                    <div class="container-flex profile__functions-guide">
                        <!-- Функция личного кабинета -->
                        <div class="function-guide">
                            <div class="function-guide__image"><img src="assets/img/icons/guide-logo-circle.svg" alt=""></div>
                            <div>
                                <h3 class="function-guide__name">Загрузите собственный логотип и сделайте профиль более индивидуальным.</h3>
                                <p class="guide__text">
                                    Загрузите изображение, и оно появится вместо логотипа. По желанию вы можете написать слоган, который отобразится под логотипом. Чтобы убрать слоган, оставьте поле пустым и нажмите <span class="btn action-btn small-btn guide__btn">Применить</span>
                                </p>

                            </div>
                        </div>
                        <!-- // Функция личного кабинета -->
                        <div><img src="" alt=""></div>
                    </div>
                    <!--// Ряд 3 -->
                </div>
                <!-- // Функции в личном кабинете -->
            </div>
            <!-- Этапы работы -->
            <div class="block" id="steps">
                <h2 class="guide__title">Как создать грамоты - два простых шага</h2>
                <div class="container-flex">
                    <div class="steps__description-1">
                        <p class="guide__text">Вам больше не нужно вручную вводить ФИО, настраивать параметры текста в фотошопе для каждого участника отдельно.</p>
                        <p class="guide__text">Достаточно один раз выставить нужные параметры в конструкторе при создании шаблона и вы получите универсальный шаблон с нужными настройками для всего списка участников</p>
                    </div>
                    <div class="steps__description-2">
                        <p class="guide__text">Работа с сервисом происходит в 2 этапа: создание шаблона и генерация грамот на основе шаблона.</p>
                        <p class="guide__text">Это сделано для удобства и разделения функционала. </p>
                    </div>
                </div>
            </div>
            <!-- //Этапы работы -->
            <!-- Создание шаблона -->
            <div class="block" id="template">
                <div class="container-flex">
                    <div class="template__circle circle principes__circle-l mr-30">01</div>
                    <h2 class="guide__title">Создание шаблона</h2>
                </div>
                <div class="guide__steps mini-steps">
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__number">1</span>
                        <p class="guide__text step__text">Загрузите макет грамоты. Появится изображение для предпросмотра, которое будем редактировать.</p>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__mark">*</span>
                        <p class="guide__text step__quote">Макет - это графическое изображение в форматах jpeg, jpg или png, оформленное визуально в Photoshop или другом графическом редакторе. На макете обязательно должно быть пустое место для текста.</p>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__number">2</span>
                        <p class="guide__text step__text">Выделите рабочую область. Чтобы рабочая область появилась на шаблоне, кликните по макету там, где она будет начинаться (как правило, левая граница изображения)</p>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__mark">*</span>
                        <p class="guide__text step__quote">Рабочая область - это контейнер или блок, внутри которой текст - ФИО, у которого можно изменять параметры. На этапе создания шаблона вы увидите текст для предпросмотра, вместо которого на втором этапе будут подставлены реальные фамилии участников.</p>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__number">3</span>
                        <p class="guide__text step__text">Меняйте параметры отображения текста на панели настроек под предпросмотром или на всплывающей мини-панели настроек над рабочей областью. Выбирайте шрифт, размер и цвет шрифта, позиционирование, ширину, высоту и внутренние отступы рабочей области.</p>
                    </div>
                    <!-- row -->
                </div>
                <div class="container-flex steps__mockup">
                    <div class="mockup">
                        <img src="assets/img/MacBookPro16.png" alt="">
                        <video class="mockup__video" autoplay="autoplay" controls="controls" poster="assets/img/MacBookPro16Preview.png">
                            <source src="assets/videos/Prezer1_2_template.mp4">
                            Тег video не поддерживается вашим браузером.
                            <a href="assets/videos/Prezer1_2_template.mp4">Скачайте видео</a>.
                        </video>
                    </div>
                </div>
                <p class="template__help-text">
                    Вы сможете увидеть, как будут отображаться имена участников на шаблоне. Как закончите редактировать, нажмите на кнопку <span class="btn action-btn small-btn guide__btn">Применить</span>. Шаблон со всеми настройками сохранится в профиле и вы сможете выбрать его при создании грамот.
                </p>
            </div>
            <!-- Создание шаблона -->
            <!-- Создание грамот -->
            <div class="block" id="generate">
                <div class="container-flex">
                    <div class="template__circle circle principes__circle-l mr-30">02</div>
                    <div>
                        <h2 class="guide__title">Создание грамот на основе шаблона</h2>
                        <p class="guide__text">На страницу создания грамот можно попасть сразу после создания шаблона по ссылке или из главного меню</p>
                    </div>

                </div>

                <div class="guide__steps mini-steps">
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__number">1</span>
                        <p class="guide__text step__text">Выберите шаблон из созданных вами. Чтобы выбрать шаблон, кликните по нему мышкой. Выбранный шаблон будет выделен фиолетовой рамкой</p>
                    </div>
                    <!-- row -->
                    <!-- row -->
                    <div class="mini-steps__item step">
                        <span class="step__number">2</span>
                        <p class="guide__text step__text">Загрузите файл Excel со списком участников. Узнайте <a href="#excel" class="link-l">особенности создания файла Excel </a> или <a href="excel/students.xlsx" class="link-l">скачайте образец Excel файла</a> и заполните своими данными.</p>
                    </div>
                    <!-- row -->
                    <p class="template__help-text">
                        Сервис обработает список участников, подставит имена в шаблон и применит стили текста, которые вы выбрали на этапе создания шаблона.
                    </p>
                </div>
                <div class="container-flex steps__mockup">
                    <div class="mockup">
                        <img src="assets/img/MacBookPro16.png" alt="">
                        <video class="mockup__video" autoplay="autoplay" controls="controls" poster="assets/img/MacBookPro16Preview.png">
                            <source src="assets/videos/Prezer1_2_certificate.mp4">
                            Тег video не поддерживается вашим браузером.
                            <a href="assets/videos/Prezer1_2_certificate.mp4">Скачайте видео</a>.
                        </video>
                    </div>
                </div>
            </div>
            <!-- Создание грамот -->
            <!-- Excel -->
            <div class="block" id="excel">
                <h2 class="guide__title">Особенности создания Excel файла со списком участников</h2>
                <div class="container-flex">
                    <div class="excel__content">
                        <p class="excel__quote">Важно!</p>
                        <p class="guide__text">Имена участников записываются строго во втором столбце</p>
                        <p class="guide__text">Обязательна первая строка-заголовок. В заголовке второго столбца указывайте “ФИО” или “фио”</p>
                        <p class="guide__text">В первом столбце заполняются порядковые номера строк (заголовок столбца “ID” расшифровывается как “идентификатор”). <b>Он необязателен и никак не задействован</b> при генерации грамот. Служит только для информационной цели, чтобы вы всегда знали количество участников. </p>
                        <p class="guide__text">Первый столбец можно <b>полностью оставить пустым</b></p>
                    </div>
                    <!-- Slider main container -->
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide"><img src="assets/img/Эксель.PNG" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/Эксель2.PNG" alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/Эксель3.PNG" alt=""></div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-custom swiper-button-prev-custom"></div>
                        <div class="swiper-button-custom swiper-button-next-custom"></div>

                        <!-- If we need scrollbar -->
                        <div class="swiper-scrollbar"></div>
                    </div>
                </div>
                <div class="container-flex">
                    <div class="excel__content">
                        <img src="assets/img/illustration-excel.svg" alt="">
                    </div>
                    <div class="excel__content">
                        <p class="guide__text excel__text">
                            Во втором столбце не обязательно указывать ФИО полностью. Указывайте те данные, которые нужны вам для отображения на шаблоне. Это может быть фамилия и имя, имена нескольких участников, ФИО в родительном падеже и т.д
                        </p>
                    </div>
                </div>
            </div>
            <!-- Excel -->
        </div>
    </main>
    <?php require "assets/components/footer-landing.php"; ?>
    <!-- //Часто задаваемые вопросы -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/functions.js"></script>
</body>

</html>