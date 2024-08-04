<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Set email variables
    $to = 'asbiebly@proton.me'; // Replace with your email address
    $subject = 'Contact Form Submission from ' . $name;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    
    // Send email
    $mail_sent = mail($to, $subject, $message, $headers);
    
    if ($mail_sent) {
        echo 'Thank you for contacting us. Your message has been sent.';
    } else {
        echo 'Sorry, something went wrong. Please try again.';
    }
}
?>

