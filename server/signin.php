<?php

session_start();


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user inputs from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user inputs (add more validation as needed)
    if (empty($email) || empty($password)) {
        $error = "Please fill in both email and password.";
    } else {
        // Query the database to check if the user exists
        include "sql_db_connection.php";
        $sql = "SELECT password FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verify the password if a user was found
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, create a session
            echo "<script>alert('Session Created');</script>";
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: ../php/function.php");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    }
    $stmt->close();
    $conn->close();
}
?>