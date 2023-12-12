<?php
ini_set('session.gc_maxlifetime', 300);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check for empty email or password
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill in both email and password.";
    } else {
        // Query the database to check if the user exists
        include "sql_db_connection.php";
        $sql = "SELECT * FROM user WHERE email ='$email' AND password ='$password' ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();   
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();


        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['U_id'];  // Corrected column name
            $_SESSION['user_email'] = $user['email'];
        
            header("Location: ../../function.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password.";
        }
        
    }

    // Query the database to check if the user exists
    include "sql_db_connection.php";

    $sql = "SELECT U_id, email, password FROM user WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Check if the user exists and the password is correct
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['U_id']; // Fix the session variable name
        $_SESSION['user_email'] = $user['email'];
        header("Location: ../../function.php");
        exit;
    } else {
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: login.php"); // Redirect back to the login page
        exit;
    }

    $stmt->close();
    $conn->close();
}

?>
