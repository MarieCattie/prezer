<?php
session_start();
require_once "Database.php";
require_once "User.php";
if(!$user)
{
    //AUTHORISATION
    if(isset($_POST["auth"]))
    {
        //Проверка на заполнение
        if($_POST["email"] == '' || $_POST["password"] == '')
        {
            $_SESSION["message"] = 'Не все поля заполнены';
            header("Location: ../../login.php");
            exit();
        }
        //Ищем пользователя по email
        $find = $db->get('users-email:' . $_POST["email"]);
        if($find->num_rows < 1)
        {
            $_SESSION["message"] = 'Пользователя с таким E-mail не существует';
            header("Location: ../../login.php");
            exit();
        }
        //Ищем пользователя
        $user = $db->get('users-email:' . $_POST["email"] . ',password:' . md5($_POST["password"]));
        if($user->num_rows == 0)
        {
            $_SESSION["message"] = 'Вы ввели неверный пароль';
            header("Location: ../../login.php");
            exit();
        }
        $user = $user->fetch_assoc();
        $_SESSION["user"] = $user["id"];
        header("Location: ../../index.php");

    }
    //REGISTRATION
    if(isset($_POST["register"]))
    {
        $db->que("INSERT INTO `users`(`email`, `surname`, `name`, `password`) VALUES('".$_POST["email"]."', '".$_POST["surname"]."', '".$_POST["name"]."', '". md5($_POST["password"]) ."')");
        $_SESSION["message"] = "Вы успешно зарегистрированы. Войдите в аккаунт";
        header("Location: ../../login.php");
    }

}
else
{
    session_unset();
}
