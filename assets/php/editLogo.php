<?php
session_start();
header("Location: ../../profile.php");
require "Init.php";
if(isset($_POST["editLogo"]))
{
    if(is_uploaded_file($_FILES["logo"]["tmp_name"]))
    {
        $logo_file = '../img/logos/' . $_FILES["logo"]["name"];
        $db->que("UPDATE `logo` SET `logo_img` = '".$_FILES["logo"]["name"]."' WHERE `id` = 1");
        copy($_FILES["logo"]["tmp_name"], $logo_file);
    }
    if(isset($_POST["slogan"]))
    {
        $db->que("UPDATE `logo` SET `slogan` = '".$_POST["slogan"]."' WHERE `id` = 1");
    }
    $_SESSION["message"] = "Логотип изменен!";
}