<?php
session_start();

unset($_SESSION['user']);
header('Location: ../Views/login.php');
exit;
?>