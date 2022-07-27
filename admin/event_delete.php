<?php
include('connection.php');
$eventid = $_GET['event'];

$query = "DELETE FROM events WHERE id = '$eventid'";

mysqli_query($con, $query);
header('location:event.php');
?>