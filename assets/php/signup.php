<?php
session_start();
require_once "config/connect.php";


$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$password_confirm = $_POST["password_confirm"];
if ($password === $password_confirm) {
    mysqli_query($connect, "INSERT INTO `users`(`id`, `name`, `email`, `password`) VALUES (NULL,'$name','$email','$password')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header("Location: /retflix");
} else{
    $_SESSION['message'] = "Пароли не совпадают!";
    header("Location: /retflix/index.php#register");
}
