<?php

// Replace contact@example.com with your real receiving email address
$receiving_email_address = 'sohailahmedsak4@gmail.com';

// Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$subject = $_POST['subject'] ?? '';
$message = $_POST['message'] ?? '';

// Validate form data (you should add more validation as needed)

// Check if required fields are not empty
if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    // Construct email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($receiving_email_address, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "All fields are required.";
}
?>