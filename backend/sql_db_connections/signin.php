<?php
ini_set('session.gc_maxlifetime', 300);

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check for empty email or password
    if (empty($email) || empty($password)) {
        $_SESSION['error'] = "Please fill in both email and password.";
        header("Location: siginin.php"); // Redirect back to the login page
        exit;

    } else {
        // Query the database to check if the user exists
        include "sql_db_connection.php";
        
        $sql = "SELECT * FROM user WHERE email = ? ";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Check if the user exists and the password is correct
        if ($user !=null && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['U_id'];
            $_SESSION['user_email'] = $user['email'];

            header("Location: ../../function.php");
            exit;
        } else {
            $_SESSION['error'] = "Invalid email or password.";
            header("Location: siginin.php"); // Redirect back to the login page
            exit;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
