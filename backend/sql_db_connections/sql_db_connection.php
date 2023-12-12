<?php
$host = "localhost"; 
$username = "soun_mart"; 
$password = "123456789"; 
$database = "soun_mart";


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection succeeded, generate JavaScript alert
    echo "<script>alert('Database connection successful');</script>";
}
?>
