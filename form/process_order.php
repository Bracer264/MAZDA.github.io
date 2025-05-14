<?php

require ('./db_connect.php');

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$model =$_POST['model'];
$trim = $_POST['trim'];
$color = $_POST['color'];
$delivery_date = $_POST['delivery_date'];
$comments = $_POST['comments'];

$add = "INSERT INTO `orders` (`fullname`, `email`, `phone`, `trim`, `color`, `delivery_date`, `comments`,`model`)
VALUES ('$fullname', '$email', '$phone', '$trim', '$color', '$delivery_date', '$comments' , '$model')";

$connect -> query($add);
header('Location: ./form6.html');