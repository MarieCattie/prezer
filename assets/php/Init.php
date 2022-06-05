<?php
require "Database.php";
require "User.php";
$logo = $db->get('logo-id:1')->fetch_assoc();
if(!$user)
{
    header("Location: login.php");
}
?>