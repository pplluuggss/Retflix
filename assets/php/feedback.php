<?php
    session_start();
    require_once "config/connect.php";

    $name = $_POST["name"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    mysqli_query($connect, "INSERT INTO `feedback`(`id`, `name`, `phonenumber`, `email`, `text`) VALUES (NULL,'$name','$tel','$email','$text')");
    header("Location: /retflix/faq.php");
?>