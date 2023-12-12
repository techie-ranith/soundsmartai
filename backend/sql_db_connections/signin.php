<?php

session_start();

$errors = array(); // Separate variable for errors

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate input
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill in both email and password.";
        exit; // Exit early to prevent further execution
    } else {
        // Query the database to check if the user exists
        include "sql_db_connection.php";
        $sql = "SELECT U_id, email, password FROM user WHERE email = ? LIMIT 1";
        $stmt = $conn->prepare($sql);
        
        // Check if the prepare statement succeeded
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            // Check if the query execution succeeded
            if ($result) {
                $user = $result->fetch_assoc();
                
                // Check if user exists and password is correct
                if ($user && password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['U_id']; // Fix the key name
                    $_SESSION['user_email'] = $user['email'];
                    header("Location: ../../function.php");
                    exit;
                } else {
                    $_SESSION['error'] = "Invalid email or password.";
                }
            } else {
                $_SESSION['error'] = "Error executing the query.";
            }
            
            $stmt->close();
        } else {
            $_SESSION['error'] = "Error preparing the statement.";
        }

        $conn->close();
    }
}
?>
