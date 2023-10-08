<?php
    include "db_connection.php"; // Include your database connection script

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        // Check if the provided data is not empty
        if (!empty($name) && !empty($email) && !empty($password)) {
            // Check if the user with the same email already exists
            $checkEmail = "SELECT * FROM user WHERE email = ?";
            $stmtCheck = $conn->prepare($checkEmail);
            $stmtCheck->bind_param("s", $email);
            $stmtCheck->execute();
            $resultCheck = $stmtCheck->get_result();
            
            if ($resultCheck->num_rows == 0) {
                // User does not exist, proceed with registration
                
                // Hash the password (you should use a secure password hashing mechanism like bcrypt)
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                
                // Create a prepared statement for registration
                $sql = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                
                if ($stmt) {
                    // Bind parameters
                    $stmt->bind_param("sss", $name, $email, $hashedPassword);
                    
                    // Execute the statement
                    if ($stmt->execute()) {
                        // Registration successful, you can proceed with user authentication
                        // Start a session
                        session_start();
                        
                        // Store user information in the session
                        $_SESSION["user_id"] = $stmt->insert_id;
                        $_SESSION["user_email"] = $email;

                        // Echo the session id as a JavaScript variable
                        echo "<script>var sessionId = '$sessionId';</script>";

                        // Redirect to a protected area or display a success message
                        header("Location: function.php");
                        exit();
                    } else {
                        $signupError = "Registration failed: " . $stmt->error;
                    }
                } else {
                    $signupError = "Database error: " . $conn->error;
                }
                
                // Close the prepared statement for registration
                $stmt->close();
            } else {
                $signupError = "Email already exists. Please choose another email.";
            } 
            // Close the prepared statement for checking existing email
            $stmtCheck->close();
        } else {
            $signupError = "Please provide all required information";
        }
    }
?>
