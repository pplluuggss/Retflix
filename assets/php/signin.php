<?php
    session_start();
    require_once 'config/connect.php';

    $email = $_POST["email"];
    $password = $_POST["password"];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "email" => $user['email']
        ];
        $_SESSION['role'] = $user['role'];
        header("Location: /retflix/profile.php");
    } else{
        $_SESSION['message'] = 'Не верный логин или пароль';
        header("Location: /retflix/");
    }
?>