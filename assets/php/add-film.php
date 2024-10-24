<?php
session_start();
require_once "config/connect.php";

$img = $_POST['img'];
$title = $_POST['title'];
$description = $_POST['description'];

mysqli_query($connect, query: "INSERT INTO `films`(`id`, `img`, `title`, `rating`, `description`) VALUES (NULL,'$img','$title',0,'$description')");
header('Location: /retflix/');
?>