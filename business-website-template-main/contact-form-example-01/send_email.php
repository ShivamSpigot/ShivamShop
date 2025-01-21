<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "shivamvermaofficial80@gmail.com"; // Your email address
    $subject = "Contact Form Submission: " . $_POST['name'];
    
    // Form Data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email content
    $body = "You have received a new message from the contact form on your website.\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";
    
    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
