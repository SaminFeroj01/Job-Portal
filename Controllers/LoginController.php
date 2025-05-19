<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $emailRegex = '/\S+@\S+\.\S+/';
    if (!preg_match($emailRegex, $email)) {
        $_SESSION['error'] = "Please enter a valid email";
        header('Location: ../Views/login.php');
        exit;
    }
    else {
        unset($_SESSION['error']);// need to be set to null or empty string
        $_SESSION['user'] = $email;
        header('Location: ../Views/home2.php');
        exit;
    }
}
?>
