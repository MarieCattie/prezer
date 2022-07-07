<?php
$from = 
$to = "mashalena123@mail.ru";
$from = $_POST["support-email"];
$headers = "From: От кого письмо <".$from.">\r\n"; 
$headers .= "Reply-To: ".$from."\r\n"; 
echo mail($to, $_POST["support-theme"], $_POST["support-message"]); 
?>