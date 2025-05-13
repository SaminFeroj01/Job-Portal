<?php
session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['remember_user'])) {
    $_SESSION['username'] = $_COOKIE['remember_user'];
}

if (!isset($_SESSION['username'])) {
    header("Location: ../login.php");
    exit();
}
?>
