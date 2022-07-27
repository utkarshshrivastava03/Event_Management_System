<?php
$host="localhost";
$user = "root";
$password = "";
$database = "ems";

$con = mysqli_connect($host, $user, $password, $database);

if ($con) 
{
	//echo "Connected Successfully";
}

else
{
	echo "Connection Problem";
}
?>