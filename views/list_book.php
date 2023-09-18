<?php
//session_start();
if(isset($_COOKIE['user_role'])){
    echo "bienvenue".$_COOKIE['user_role'];
}

//if(isset($_SESSION["user_role]));
//echo "bienvenue".$_SESSION['user_role'];