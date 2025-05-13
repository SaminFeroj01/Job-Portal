<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $users = json_decode(file_get_contents("../data/users.json"), true);

    foreach ($users as $user) {
        if ($user['email'] === $email) {
            echo "Email already registered!";
            exit();
        }
    }

    $users[] = ['name' => $name, 'email' => $email, 'password' => $password];
    file_put_contents("../data/users.json", json_encode($users, JSON_PRETTY_PRINT));

    header("Location: ../login.php");
    exit();
}
?>
