<?php

include("menu.php");

session_start();
if(isset($_SESSION["user"])){
    unset($_SESSION["user"]);
    unset($_SESSION["pass"]);
//    unset session
    session_regenerate_id();
    session_destroy();
    header("Location: index.php");
}