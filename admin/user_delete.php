<?php
include('connection.php');
$userid = $_GET['user'];

$query = "DELETE FROM users WHERE id = '$userid'";

mysqli_query($con, $query);
header('location:user.php');
?>