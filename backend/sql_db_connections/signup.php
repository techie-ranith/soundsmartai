<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_pwd = $_POST["confirm_pass"];

    $signupError = ""; // Initialize an error message variable

    // Validate user inputs
    if (empty($name) || empty($email) || empty($password) || empty($confirm_pwd)) {
        $signupError = "Please provide all required information.";
        $_SESSION['signup_error'] = $signupError;
        exit();
    } elseif ($password != $confirm_pwd) {
        $signupError = "Passwords do not match.";
        $_SESSION['signup_error'] = $signupError;
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $signupError = "Invalid email format.";
        $_SESSION['signup_error'] = $signupError;
        exit();
    }

    // Check if there are no validation errors
    if (empty($signupError)) {
        // Continue with registration process

        // Check if the user with the same email already exists
        include "sql_db_connection.php";
        $checkEmail = "SELECT * FROM user WHERE email = ?";
        $stmtCheck = $conn->prepare($checkEmail);
        $stmtCheck->bind_param("s", $email);
        $stmtCheck->execute();
        $resultCheck = $stmtCheck->get_result();

        if ($resultCheck->num_rows == 0) {
            // User does not exist, proceed with registration

            // Hash the password (you should use a secure password hashing mechanism like bcrypt)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Create a prepared statement for registration
            $price_plan = "free";
            $sql = "INSERT INTO user(name,email,password) VALUES(?,?,?)";
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                // Bind parameters
                $stmt->bind_param("sss", $name, $email, $hashedPassword);

                // Execute the statement
                if ($stmt->execute()) {
                    // Registration successful, redirect to a protected page
                    $_SESSION["user_id"] = $stmt->insert_id;
                    $_SESSION["user_email"] = $email;

                    // Redirect to a protected area or display a success message
                    header("Location: ../../function.php");
                    exit();
                } else {
                    $signupError = "Registration failed: " . $stmt->error;
                    $_SESSION['signup_error'] = $signupError;
                    exit();
                }
            } else {
                $signupError = "Database error: " . $conn->error;
                $_SESSION['signup_error'] = $signupError;
                exit();
            }
            // Close the prepared statement for registration
            $stmt->close();
        } else {
            $signupError = "Email already exists. Please choose another email.";
            $_SESSION['signup_error'] = $signupError;
            exit();
        }

        // Close the prepared statement for checking existing email
        $stmtCheck->close();
    }
}
?>
