<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


$query = "insert into users (username, email, contact, password) values ('$username', '$email', '$contact', '$password')";

echo $query;

mysqli_query($con, $query);
header('location:login_form.php');
?>