<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Create email content
    $to = "soundsmartai@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $name <$email>";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    $success = mail($to, $subject, $body, $headers);
    if ($success) {
        echo "<script>alert('respond sent')</script>";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} 

else {
    // Redirect to the form if accessed directly
    header("Location:../../faq.php");
    exit();
}
?>
