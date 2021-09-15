<?php 
    session_start();
    unset($_SESSION['user']);
    unset($_SESSION['id']);
    header('location: Home_XeHue.php');
?>