<?php
$host = "178.128.23.227"; 
$username = "admin"; 
$password = "123456789Qw"; 
$database = "soun_soundsmartai"; 
$port = 8090;

$conn = new mysqli($host, $username, $password, $database,$port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection succeeded, generate JavaScript alert
    echo "<script>alert('Database connection successful');</script>";
}
?>
