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
        <div class="container">
            <div class="block about">
                <h1 class="title-l title-l-large">О сервисе</h1>
                <p class="about__text"><span class="about__logo">Призёр</span> - новый развивающийся редактор грамот, дипломов, сертификатов и т.д. Основная задача сервиса - упростить и ускорить создание грамот для большого количества участников.</p>
                <p class="about__text">Если вы преподаватель или занимаетесь созданием наградных документов, вам известно, сколько времени и сил занимает вводить вручную имена участников, особенно если их 200, 500, 1000.</p>
                <h2 class="about__text">Наш конструктор избавит вас от повторяющихся операций и всю монотонную работу сделает за вас.</h2>
                <h1 class="title-l about__title title-l-large">Достижения</h1>
                <div class="checked-list">
                    <p class="checked-list__item">Сервис был разработан по заказу центра IT-Cube Смоленск и внедрен в систему IT-Cube с января 2022 года.</p>
                    <p class="checked-list__item">Более <span>1500</span> дипломов создано при помощи данного сервиса</p>
                    <p class="checked-list__item">Сервис был представлен на Открытой защите проектов для IT компаний в центре IT-Cube</p>
                    <p class="checked-list__item">Проект принял участие в выставке на базе Смоленского Государственного Университета в рамках VI Всероссийской научно-практической конференции «Развитие научно-технического творчества детей и молодёжи - 2022”</p>
                </div>
                <div class="container-flex">
                    <!-- Пост из вк 1 -->
                    <div class="about__post" id="vk_post_-189705382_2462"></div>
                    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
                    <script type="text/javascript">
                        (function() {
                            VK.Widgets.Post("vk_post_-189705382_2462", -189705382, 2462, 'ICYCn9TCJSkJMdkKltdqOgwLmDA6');
                        }());
                    </script>
                    <!-- Пост из вк 2 -->
                    <div class="about__post" id="vk_post_-189705382_2354"></div>
                    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?169"></script>
                    <script type="text/javascript">
                        (function() {
                            VK.Widgets.Post("vk_post_-189705382_2354", -189705382, 2354, 'XhP-UVdhBkqjmlSIt7UsbWWsZgUa');
                        }());
                    </script>

                </div>
                <p class="about__text">Сервис постоянно совершенствуется, мы следим за его работоспособностью и стремимся улучшать. Прочитайте <a target="__blank" href="guide.php" class="link-l">пошаговое руководство</a> по работе с сервисом.</p>
            </div>


        </div>
    </main>
    <?php require "assets/components/footer-landing.php"; ?>
    <!-- //Часто задаваемые вопросы -->
    <script src="assets/js/functions.js"></script>
</body>

</html>