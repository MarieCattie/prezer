<?php
function showMessage($message)
{
    if(isset($message)) {
        echo $message;
        unset($message);
    }

}