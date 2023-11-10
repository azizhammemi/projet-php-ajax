<?php
    session_start();
    session_unset();
    $_SESSION["connecte"]="0";
    header("location:login form/login.php"); 
?>