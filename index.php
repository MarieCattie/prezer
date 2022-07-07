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
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
   <script src="assets/js/jquery.min.js"></script> 
    <title>Prezer | Создать шаблон</title>
</head>
<body class="screen-size">
    <?php require "assets/components/header.php"; ?>
    <main>
        <div class="container">
           <div class="container-flex main-content">
               <div class="content-block-2">
                   <div class="icon main-settings__icon"><img src="assets/img/icons/template.svg" alt=""></div>
                   <p class="content-block-2__title">Создать шаблон</p>
                   <a href="template.php" class="content-block-2__arrow arrow-right circle main-settings__arrow"></a>
                </div>
               <div class="content-block-2">
                    <div class="icon main-settings__icon"><img src="assets/img/icons/certificate.svg" alt=""></div>
                    <p class="content-block-2__title">Создать грамоты</p>
                    <a href="certificate.php" class="content-block-2__arrow arrow-right circle main-settings__arrow"></a>
               </div>
           </div>
           <div class="content-block main-settings">
               <div class="container-flex">
                    <div class="icon main-settings__icon"><img src="assets/img/icons/settings.svg" alt=""></div>
                    <p class="main-settings__title">Настройте личный кабинет под себя</p>  
               </div>
                <a href="profile.php" class="arrow-right circle main-settings__arrow"></a>
           </div>
        </div>
    </main>
    <?php require "assets/components/footer.php"; ?>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/fieldsFill.js"></script>
</body>
</html>