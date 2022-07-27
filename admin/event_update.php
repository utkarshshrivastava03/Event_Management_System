<?php
include('connection.php');

$title = $_POST['Title'];
$description = $_POST['Description'];
$startdate = $_POST['StartDate'];
$enddate = $_POST['EndDate'];
$starttime = $_POST['TimeTo'];
$endtime = $_POST['TimeFrom'];
$food = $_POST['Food'];
$address = $_POST['Address'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$location = $_POST['location'];
$message = $_POST['message'];
$id = $_POST['id'];

$query = "UPDATE events SET title = '$title',description = '$description', sdate = '$starttime', edate = '$enddate', stime = '$starttime', etime = '$endtime', food = '$food', address = '$address', contact = '$contact', email = '$email', location = '$location', message = '$message' WHERE id = '$id'";

// echo $query;

mysqli_query($con, $query);
header('location:event.php');
?>