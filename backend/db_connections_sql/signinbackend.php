<?php

// Check if the user is already logged in, and if so, redirect them to a welcome page
if (isset($_SESSION['user_id'])) {
    header("Location: function.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Replace these variables with your database connection details
    $dbHost = 'your_db_host';
    $dbUser = 'your_db_username';
    $dbPass = 'your_db_password';
    $dbName = 'your_db_name';


    // Get user inputs from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate user inputs (add more validation as needed)
    if (empty($email) || empty($password)) {
        $error = "Please fill in both email and password.";
    } else {
        // Query the database to check if the user exists
        $sql = "SELECT id, email, password FROM users WHERE email = ? LIMIT 1";
        include "sql_db_connection.php";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verify the password if a user was found
        if ($user && password_verify($password, $user['password'])) {
            // Password is correct, create a session
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            header("Location: .../function.html");
            exit;
        } else {
            $error = "Invalid email or password.";
        }
    }
    $stmt->close();
    $conn->close();
}
?>