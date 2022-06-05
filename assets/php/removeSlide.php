<?php
session_start();
require "Init.php";
$db->que("DELETE FROM `templates` WHERE `user_id` = " . $user["id"] . " AND `id` = " . $_POST["slideId"] );
$_SESSION["message"] = "Шаблон удален";
$out = array(
    'message' => $_SESSION["message"],
);
echo json_encode($out);
?>
