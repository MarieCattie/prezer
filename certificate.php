<?php
session_start();
require "assets/php/Init.php";
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
   <script src="assets/js/jquery.min.js"></script> 
    <title>Prezer | Создать грамоты</title>
</head>
<body>
<?php require "assets/components/header.php"; ?>
<?php if(isset($_SESSION["message"])): ?>
<div class="popup__wrapper <?= (isset($_SESSION["message"]) && $_SESSION["message"] == '')? 'hidden' : ''?>">
    <p class="popup__message popup" >
        <a href="" class="popup__close close circle"></a>
        <?php if(isset($_SESSION["message"])) showMessage($_SESSION["message"]);  unset($_SESSION["message"]); ?>
    </p>
</div>
<?php endif; ?>
    <main>
        <div class="container">
            <form class="certificate content-block" method="POST" action="assets/php/certificate.php" enctype="multipart/form-data">
                <p class="title-bg">Создать грамоты</p>
                <h1 class="certificate__title title">Выберите шаблон</h1>
                <div class="slider">
                    <div class="owl-carousel owl-theme" id="slider">
                    <?php
                    while($temp = $templates->fetch_assoc()):
                    ?>    
                    <div class="slide">
                        <input type="radio" name="temp" id="t<?= $temp["id"] ?>" value="<?= $temp["id"] ?>">
                        <img class="slide-image" src="assets/img/templates/<?= $temp["template_img"] ?>" alt="">
                    </div>
                    <?php endwhile; ?>
                </div>
                <nav class="slider__nav"></nav>
                </div>
                <h1 class="certificate__title title">Выбрать участников</h1>
                <p class="templates__postitle postitle">Загрузите файл из Excel со списком участников, для которых хотите создать грамоты</p>
                <div class="certificate__btns">
                
                <a class="btn second-btn certificate__btn"><input name="load" type="file">Загрузить файл</a>
                <button name="create" type="submit" class="btn btn-large action-btn certificate__btn">Создать</button>  
                </div>
                
            </form>
        </div>
    </main>
<?php require "assets/components/footer.php"; ?>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slider.js"></script>
</body>
</html>