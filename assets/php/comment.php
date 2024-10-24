<?php
session_start();
require_once "config/connect.php";

$text = $_POST['text'];

mysqli_query($connect, query: "INSERT INTO `forum`(`id`, `rate`, `title`, `text`, `liked`, `comments`, `img`) VALUES (NULL, 0,'Комментарий','$text',0,0,'forum-1.png')");

header("Location: /retflix/forum.php");
?>