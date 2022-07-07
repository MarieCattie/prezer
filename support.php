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
            <div class="block support">
                <h1 class="title-l title-l-large">Техническая поддержка</h1>
                <form class="form" action="assets/php/support.php" method="post">
                        <div class="form__group">
                            <label for="support__email" class="title-marked form__label m-14">Ваш E-mail</label>
                            <input value="<?= (isset($user["email"]))? $user["email"] : '' ?>" type="email" id="support__email" class="form__field" placeholder="Например, ivan@mail.ru" name="support-email">
                        </div>
                        <div class="form__group">
                            <label for="support__theme" class="title-marked form__label m-14">Тема сообщения</label>
                            <select name="support-theme" id="support__theme" class="form__field support__field">
                                <option value="Возникла ошибка или проблема с сайтом">Возникла ошибка или проблема с сайтом</option>
                                <option value="У меня есть идея">У меня есть идея</option>
                                <option value="У меня есть вопрос/нужна помощь">У меня есть вопрос/нужна помощь</option>
                                <option value="Другое">Другое</option>
                            </select>
                            
                        </div>
                        <div class="form__group">
                            <label for="support__message" class="title-marked form__label m-14">Сообщение</label>
                            <textarea placeholder="Напишите сюда текст сообщения" name="support-message" id="support__message" cols="30" rows="10" class="form__field support__field"></textarea>
                        </div>
                        <input type="submit" class="btn action-btn form__submit" value="Отправить" name="support-btn">
                        <?php if(isset($_SESSION["message"])): ?>
                        <p class="form__message"><?php showMessage($_SESSION["message"]);  unset($_SESSION["message"]); ?></p>
                        <?php endif; ?>

                    </form>  
            </div>
        </div>
    </main>
    <footer class="footer-l">
        <div class="container container-flex footer-l__wrapper">
            <a href="landing.php" class="logo"><img src="assets/img/logos/logo.svg" alt="">
                <p class="logo__slogan">Творите, создавайте, награждайте!</p>
            </a>
            <div class="footer__contacts">
                <p class="contact">
                    <span class="contact-icon"><img src="assets/img/icons/fluent_mail.svg" alt=""></span>
                    mashalena123@mail.ru
                </p>
                <p class="contact">
                    <span class="contact-icon"><img src="assets/img/icons/entypo_phone.svg" alt=""></span>
                    +7 (920) 326-71-96
                </p>
            </div>
            <div class="footer-l__contacts">
                <p class="footer-l__text">Связь с автором проекта:</p>
                <div class="social footer-l__social">
                    <a href="https://vk.com/id222362313" class="social__icon"><img src="assets/img/landing/social-vk-icon.svg" alt=""></a>
                    <a href="https://t.me/neustroyevamaria" class="social__icon"><img src="assets/img/landing/social-tg-icon.svg" alt=""></a>
                    <a style="width:28px; height:28px" href="https://api.whatsapp.com/send?phone=79203267196" class="social__icon"><img src="assets/img/landing/social-whatsup-icon.svg" alt=""></a>
                </div>
            </div>
            <a href="index.php" class="btn action-btn btn-small">Войти</a>
        </div>
    </footer>
    <!-- //Часто задаваемые вопросы -->
    <script src="assets/js/functions.js"></script>
</body>

</html>