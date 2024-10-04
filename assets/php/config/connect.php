<?php

$connect = mysqli_connect('localhost', 'root', '', 'retflix');

if (!$connect) {
    die ('Error connect to database!');
}
?>