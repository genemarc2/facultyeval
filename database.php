<?php

$hostName = "localhost"; 
$dbUser = "root"; 
$dbPassword = ""; 
$dbName = "facultysystem"; 

// Create connection
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    echo "Failed to connect DB".$conn->connect_error;
}
?>
