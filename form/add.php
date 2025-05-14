<?php

require ('./db_connect.php');

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$data = $_POST['data'];
$comment = $_POST['comment'];

$add = "INSERT INTO `test`(`name`, `tel`, `email`, `data`, `comment`) VALUES ( '$name', '$tel', '$email', '$data', '$comment')";

$connect -> query($add);
header('Location: ./form.html');