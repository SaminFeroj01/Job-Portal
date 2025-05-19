<?php

namespace app\controllers;

use app\views\View;
use app\models\UserModel;

class SignupController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirm_password'];

            if (empty($name) || empty($email) || empty($password) || empty($confirmPassword)) {
                echo "Please fill in all signup fields.";
                return;
            }

            $emailRegex = '/\S+@\S+\.\S+/';
            if (!preg_match($emailRegex, $email)) {
                echo "Please enter a valid email.";
                return;
            }

            if ($password !== $confirmPassword) {
                echo "Passwords do not match.";
                return;
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $userModel = new UserModel();
            $userModel->createUser([
                'name' => $name,
                'email' => $email,
                'password' => $hashedPassword
            ]);

            header('Location: /login');
            exit;
        }

        include __DIR__ . '/../Views/signup.php';
    }
}
