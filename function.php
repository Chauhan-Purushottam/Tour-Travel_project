<?php

$databaseHost = 'localhost';
$databaseName = 'tourandtravel';
$databaseUsername = 'root';
$databasePassword = 'cse15157';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

 
?>


