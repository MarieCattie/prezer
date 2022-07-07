<?php
session_start();
require "assets/php/Init.php";
checkUser($user);
$templates = $db->get("templates-user_id: " . $user["id"]);
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
    <title>Prezer | Профиль</title>
</head>
<body>
<?php require "assets/components/header.php"; ?>
<div class="popup__wrapper <?php
if ($_SESSION["message"] == '') {
    echo "hidden";
}
?>">
    <p class="popup__message popup" >
        <a href="" class="popup__close close circle"></a>
        <?php if(isset($_SESSION["message"])) showMessage($_SESSION["message"]);  unset($_SESSION["message"]); ?>
    </p>
</div>

    <main>
        <div class="container">
            <!-- PROFILE BLOCK -->
            <div class="profile content-block">
                    <form action="assets/php/loadAvatar.php" enctype="multipart/form-data" class="profile__person" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                     <a class="avatar profile__avatar">
                         <input type="file" name="avatar" id="loadavatar">
                         <div class="profile__load">
                            Загрузить аватар
                        </div>
                         <?php
                         if($user["avatar"] !== null)
                         {?>
                             <img src="assets/img/avatars/<?= $user["avatar"] ?>" alt="">
                        <?php }
                         ?>
                     </a>
                    <div class="profile__text">
                        <p class="profile__name"><?= $user["surname"] ?> <?=  $user["name"] ?></p>
                        <!-- <p class="profile__role">Учитель</p> -->
                        <input type="submit" class="btn action-btn btn-small" id="load-agree" value="Загрузить" style="display: none">
                    </div>    
                    
                    <div class="profile__contacts">
                        <p class="contact profile__contact">
                            <span class="contact-icon"><img src="assets/img/icons/fluent_mail.svg" alt=""></span>
                            <?= $user["email"] ?>
                        </p>
                        <!-- <p class="contact">
                            <span class="contact-icon"><img src="assets/img/icons/entypo_phone.svg" alt=""></span>
                            <?= $user["phone"] ?>
                        </p> -->
                    </div>
                </form>
                 <div class="container-flex profile__log">
                 <a href="assets/php/logout.php" class="btn action-btn" id="exit">Выйти</a>
                </div>
            </div>
            <!-- //PROFILE BLOCK -->
            <!-- OPTIONS LINK BLOCK -->
            <div class="options container-flex">
            <a class="content-block content-block-4 container-flex" href="#edit">
                <div class="icon"><img src="assets/img/icons/settings.svg" alt=""></div>
                <p class="content-block-4__text">Редактировать профиль</p>
            </a>
            <a class="content-block content-block-4 container-flex" href="#chngpass">
                <div class="icon"><img src="assets/img/icons/key.svg" alt=""></div>
                <p class="content-block-4__text">Сменить пароль</p>
            </a>
            <a class="content-block content-block-4 container-flex" href="#chnglogo">
                <div class="icon"><img src="assets/img/icons/edit-image.svg" alt=""></div>
                <p class="content-block-4__text">Изменить логотип</p>
                
            </a>
            <a class="content-block content-block-4 container-flex" href="#temps">
                <div class="icon"><img src="assets/img/icons/diploma.svg" alt=""></div>
                <p class="content-block-4__text">Мои шаблоны</p>
            </a>
         </div>
         <!-- //OPTIONS LINK BLOCK -->
         <!-- MY TEMPLATES BLOCK -->
         <div class="templates content-block content-block-p" id="temps">
            <p class="title">Мои шаблоны</p>
            <p class="templates__postitle postitle">Вы можете удалить свои шаблоны, и они будут скрыты на странице создания грамот при выборе шаблона</p>
            <div class="slider">
                <div class="owl-carousel owl-theme" id="slider">
                <?php
                    while($temp = $templates->fetch_assoc()):
                    ?>    
                    <div class="slide">
                    <a href="" class="slide__close close circle" data-slide="<?= $temp["id"] ?>"></a>
                    <img class="slide-image" src="assets/img/templates/<?= $temp["template_img"] ?>" alt="">
                </div>
                    <?php endwhile; ?>
            </div>
            <nav class="slider__nav"></nav>
            </div>
         </div>
          <!-- //MY TEMPLATES BLOCK -->
          <!-- LOGO EDIT BLOCK -->
          <div class="logo-change content-block content-block-p" id="chnglogo">
            <p class="title">Изменить логотип на сайте</p>
            <form action="assets/php/editLogo.php" class="logo-change__form edit edit__container" enctype="multipart/form-data" method="post">
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000000">
                <div class="form__group">
                    <label class="logo-change__text" for="change"> Загрузить логотип</label>
                    <input type="file" name="logo" id="change">
                </div>
                <div class="form__group">
                    <label for="slogan" class="title-marked form__label m-14">Слоган (не обязательно)</label>
                    <input type="text" id="slogan" class="form__field" placeholder="Слоган – это короткая фраза, выражающая суть философии бренда" name="slogan" <?php if($logo["slogan"] !== '') {echo "value='".$logo["slogan"]."' ";} ?>>
                </div>
                <input name="editLogo" class="logo-change__btn btn action-btn btn-small hidden" type="submit" value="Применить">
            </form>
          </div>
          <!-- //LOGO EDIT BLOCK -->
          <!-- NAME MAIL PHONE EDIT BLOCK -->
          <div class="edit content-block content-block-p" id="edit">
            <p class="title">Редактировать профиль</p>
              <p class="templates__postitle postitle">Вы можете отредактировать одно или несколько полей на выбор</p>
            <form class="form edit__container" method="post" action="assets/php/editProfile.php">
                <div class="form__group">
                    <label for="email" class="title-marked form__label m-14">Электронная почта</label>
                    <input type="email" id="email" class="form__field" placeholder="Например, ivan@mail.ru" name="email" value="<?= $user["email"] ?>">
                </div>
                <div class="form__group">
                    <label for="surname" class="title-marked form__label m-14">Фамилия</label>
                    <input type="text" id="surname" class="form__field" placeholder="Например, Иванов" name="surname" value="<?= $user["surname"] ?>">
                </div>
                <div class="form__group">
                    <label for="name" class="title-marked form__label m-14">Имя</label>
                    <input type="text" id="name" class="form__field" placeholder="Например, Иван" name="name" value="<?= $user["name"] ?>">
                </div>
                <!-- <div class="form__group">
                    <label for="tel" class="title-marked form__label m-14">Телефон</label>
                    <input type="tel" id="tel" class="form__field" placeholder="Например, + 7(999) 999-99-99" name="phone" value="<?= $user["phone"] ?>">
                </div> -->
                <input type="submit" class="btn btn-large form__submit" name="editProfile" value="Обновить">
            </form>  
          </div>
          <!-- //NAME MAIL PHONE EDIT BLOCK -->
           <!-- PASSWORD EDIT BLOCK -->
           <div class="edit content-block content-block-p" id="chngpass">
            <p class="title">Сменить пароль</p>
            <form class="form edit__container" action="assets/php/changePassword.php" method="post">
                <div class="form__group">
                    <label for="password" class="title-marked form__label m-14">Введите новый пароль</label>
                    <input type="password" id="password" class="form__field" name="pass">
                </div>
                <div class="form__group">
                    <label for="password-repeate" class="title-marked form__label m-14">Повторите пароль</label>
                    <input type="password" id="password-repeate" class="form__field" name="re-pass">
                </div>
                <input name="editPassword" type="submit" class="btn btn-large form__submit" value="Обновить">
            </form>  
          </div>
          <!-- //PASSWORD EDIT BLOCK -->
        </div>
    </main>
<?php require "assets/components/footer.php"; ?>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/loadAvatar.js"></script>
    <script src="assets/js/loadLogo.js"></script>
    <script src="assets/js/functions.js"></script>
</body>
</html>