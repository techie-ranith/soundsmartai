<?php
$host = "localhost"; 
$username = "soun_admin"; 
$password = "N-oxH3CMgi+7ex%!"; 
$database = "soun_soundsmartai"; 


$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Connection succeeded, generate JavaScript alert
    echo "<script>alert('Database connection successful');</script>";
}
?>
