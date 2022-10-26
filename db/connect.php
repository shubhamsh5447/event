<?php

$servername = "sql671.main-hosting.eu";
$username = "u429173902_event";
$password = "Event@123";
$db = "u429173902_event";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
