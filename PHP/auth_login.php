<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents("../data/users.json"), true);

    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $_SESSION['username'] = $user['name'];

            if (isset($_POST['remember'])) {
                setcookie("remember_user", $user['name'], time() + (7 * 24 * 60 * 60), "/");
            }

            header("Location: ../dashboard.php");
            exit();
        }
    }

    echo "Invalid credentials!";
}
?>
