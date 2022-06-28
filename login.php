<?php
session_start();
require_once "assets/php/functions.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/light-theme.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
   <script src="assets/js/jquery.min.js"></script> 
    <title>Prezer | Авторизация</title>
</head>
<body>
    <main>
        <div class="container-bg">
            <div class="wrapper">
                <div class="popup">
                    <form class="form" action="assets/php/Auth.php" method="post">
                        <h1 class="title form__title">Авторизация</h1>
                        <div class="form__group">
                            <label for="email" class="title-marked form__label m-14">Электронная почта</label>
                            <input type="email" id="email" class="form__field" placeholder="Например, ivan@mail.ru" name="email">
                        </div>
                        <div class="form__group">
                            <label for="pwd" class="title-marked form__label m-14">Пароль</label>
                            <input type="password" id="pwd" class="form__field" name="password">
                        </div>
                        <input type="submit" class="btn btn-large form__submit" value="Войти" name="auth">
                        <?php if(isset($_SESSION["message"])): ?>
                        <p class="form__message"><?php showMessage($_SESSION["message"]);  unset($_SESSION["message"]); ?></p>
                        <?php endif; ?>
                        <a class="form__link">Зарегистрироваться</a>

                    </form>  
                    <form class="form hidden-form" style="display: none;" action="assets/php/Auth.php" method="post">
                        <h1 class="title form__title">Регистрация</h1>
                        <div class="form__group">
                            <label for="email" class="title-marked form__label m-14">Электронная почта</label>
                            <input type="email" id="email" class="form__field" placeholder="Например, ivan@mail.ru" name="email">
                        </div>
                        <div class="form__group">
                            <label for="surname" class="title-marked form__label m-14">Фамилия</label>
                            <input type="text" id="surname" class="form__field" placeholder="Например, Иванов" name="surname">
                        </div>
                        <div class="form__group">
                            <label for="name" class="title-marked form__label m-14">Имя</label>
                            <input type="text" id="name" class="form__field" placeholder="Например, Иван" name="name">
                        </div>
                        <!-- <div class="form__group">
                            <label for="tel" class="title-marked form__label m-14">Телефон</label>
                            <input type="tel" id="tel" class="form__field" placeholder="Например, + 7(999) 999-99-99" name="phone">
                        </div> -->
                        <div class="form__group">
                            <label for="pwd" class="title-marked form__label m-14">Пароль</label>
                            <input type="password" id="pwd" class="form__field" name="password">
                        </div>
                        <input type="submit" class="btn btn-large form__submit" value="Зарегистрироваться" name="register">
                        <a class="form__link">Войти</a>
                    </form>                
                </div>
                       
            </div>
        </div>
    </main>
    <script src="assets/js/showForms.js"></script>
</body>
</html>