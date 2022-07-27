<?php
include('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$query = "insert into contact (name, city, email, contact, message) values ('$name', '$city', '$email', '$contact', '$message')";

mysqli_query($con, $query);
header('loction:index.php');
?>