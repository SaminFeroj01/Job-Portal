<?php

namespace app\controllers;


use app\models\UserModel;

class LoginController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                echo "Please fill in all login fields.";
                return;
            }

            $emailRegex = '/\S+@\S+\.\S+/';
            if (!preg_match($emailRegex, $email)) {
                echo "Please enter a valid email.";
                return;
            }

            $userModel = new UserModel();
            $user = $userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                header('Location: /home');
                exit;
            } else {
                echo "Invalid email or password.";
            }
        }

        include __DIR__ . '/../Views/login.php';
    }
}
