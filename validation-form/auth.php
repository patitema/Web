<?php
    $login = isset($_POST['login']) ? htmlspecialchars(trim($_POST['login'])) : '';
    $password = isset($_POST['password']) ? htmlspecialchars(trim($_POST['password'])) : '';

    $password = md5($password."werwnbfddkj");

    $mysql = new mysqli("localhost", "root", "root", "users", 8889);

    $result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");
    $user = $result->fetch_assoc();

    if (!$user) {
        echo "Ничего не найдено";
        exit();
    }

    setcookie("user", $user["name"], time() + 3600, "/");

    $mysql->close();

    header("Location: /");
?>
