<?php

require_once 'config/connect.php';

$id = $_GET['id'];

mysqli_query($connect, query: "DELETE FROM `films` WHERE `id` = '$id'");

header('Location: /retflix/');
?>