<?php
$host = "localhost"; 
$username = "soun_mart"; 
$password = "123456789"; 
$database = "soun_mart";



$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error()); 
} else {
    echo "
    <script>alert('Database connection successfull');</script>";
}
?>
