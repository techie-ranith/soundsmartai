<?php

$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "soundsmartai"; 


$conn = new mysqli($host, $username, $password, $database,3308);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection succeeded, generate JavaScript alert
    echo "<script>alert('Database connection successful');</script>";
}
?>
