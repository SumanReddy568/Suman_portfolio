<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact-name'];
    $phone = $_POST['contact-phone'];
    $email = $_POST['contact-email'];
    $subject = $_POST['subject'];
    $message = $_POST['contact-message'];

    // Send email
    $to_email = "sumanreddy568@gmail.com"; // Your email address
    $email_subject = "New Contact Form Submission";
    $email_body = "Name: $name\nPhone: $phone\nEmail: $email\n\nSubject: $subject\n\nMessage:\n$message";
    
    // Set headers
    $headers = "From: $name <$email>\r\nReply-To: $email\r\n";
    
    // Send email
    if (mail($to_email, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request!";
}
?>
