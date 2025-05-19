<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
        $_SESSION['error'] = "All fields are required.";
        header("Location: ../Views/signup.php");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Invalid email format.";
        header("Location: ../Views/signup.php");
        exit;
    }

    if ($password !== $confirmPassword) {
        $_SESSION['error'] = "Passwords do not match.";
        header("Location: ../Views/signup.php");
        exit;
    }

    $_SESSION['success'] = "Account created successfully!";
    header("Location: ../Views/login.php");
    exit;
}
?>
