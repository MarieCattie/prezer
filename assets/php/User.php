<?php
session_start();
 if(isset($_SESSION["user"]))
        {
            $db = new DB();
            $user = $db->get('users-id:' . $_SESSION["user"])->fetch_assoc();
        }
        else {
            $user = false;
        }

