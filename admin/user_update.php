<?php
include('connection.php');

$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$userid = $_POST['id'];


$query = "UPDATE users SET username ='$username', email ='$email', contact ='$contact', password ='$password' WHERE id = '$userid'";


// echo $query;

mysqli_query($con, $query);
header('location:user.php');
?>