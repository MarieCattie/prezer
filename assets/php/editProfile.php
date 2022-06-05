<?php
session_start();
header("Location: ../../profile.php");
require "Init.php";
if(isset($_POST["editProfile"]))
{
    $db->que("UPDATE `users` SET `email` = '".$_POST["email"]."', `surname` = '".$_POST["surname"]."', `name` = '".$_POST["name"]."', `phone` = '".$_POST["phone"]."' WHERE  `id` = " . $user["id"]);
    $_SESSION["message"] = "Профиль обновлен!";
}
