<?php
session_start();
require "Init.php";
header("Location: ../../profile.php");
$img = '../img/avatars/'.$_FILES["avatar"]["name"];
$db->que("UPDATE `users` SET `avatar` = '".$_FILES["avatar"]["name"]."'  WHERE `id` = ".$user["id"]);
copy($_FILES["avatar"]["tmp_name"], $img);