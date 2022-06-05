<?php
session_start();
header("Location: ../../template.php");
require "Init.php";
if(isset($_POST["add-template"])) {
    $db->que("INSERT INTO `templates`(`template_name`, `color`, `font_family`,	`font_size`,	`coordinate`,	`user_id`, `template_img`, `width`, `height`, `leftpad`, `toppad`, `rightpad`, `align`) VALUES('".$_POST["template-name"]."', '".$_POST["template-color"]."', '".$_POST["template-font"]."', ".$_POST["template-fontsize"].", '".$_POST["template-coordinate"]."', ".$user["id"].", '".$_FILES["template-image"]["name"]."', ".$_POST["width"].", ".$_POST["height"].", ".$_POST["left"].", ".$_POST["top"].", ".$_POST["right"].", '".$_POST["align"]."')");
    $url = "../img/templates/".$_FILES["template-image"]["name"];
    copy($_FILES["template-image"]["tmp_name"], $url);
    $_SESSION["message"] = "<span>Шаблон добавлен \n Теперь вы можете <a href='certificate.php' class='popup__link'>Создать грамоты</a> на основе этого шаблона</span>";
}
?>