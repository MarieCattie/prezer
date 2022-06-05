<?php
session_start();
require "Init.php";
header("Location: ../../profile.php");
if(isset($_POST["editPassword"]))
{
    if($_POST["pass"] !== $_POST["re-pass"])
    {
        $_SESSION["message"] = "Ошибка при смене пароля: вы неверно ввели новый пароль повторно";
        exit();
    }
    $db->que("UPDATE `users` SET `password` = '".md5($_POST["pass"])."' WHERE `id` = " . $user["id"]);
    $_SESSION["message"] = "Пароль успешно обновлен";
}
