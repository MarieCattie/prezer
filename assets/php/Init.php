<?php
require "Database.php";
require "User.php";
require "functions.php";
$logo = $db->get('logo-id:1')->fetch_assoc();
?>