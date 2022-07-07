<?php
function showMessage($message)
{
    if(isset($message)) {
        echo $message;
        unset($message);
    }
}
function checkUser($user) {
    if(!$user)
{
    header("Location: login.php");
}
}