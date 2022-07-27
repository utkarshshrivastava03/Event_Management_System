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

$query = "insert into events (title, description, sdate, edate, stime, etime, food, address, contact, email, location, message) values ('$title', '$description', '$startdate', '$enddate', '$starttime', '$endtime', '$food', '$address', '$contact', '$email', '$location', '$message')";

echo $query;

mysqli_query($con, $query);
header('location:index.php');
?>