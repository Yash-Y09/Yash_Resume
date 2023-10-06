<?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $countryCode = $_POST["countryCode"]; // Added line to get country code
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    
    // Replace with your email address
    $email_from = 'info@yash-y09.github.io';
    $to = "prajapati2248@gmail.com";
    $subject = "Contact Form Submission from $name";
    
    $headers = "From: $email_from" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // Include country code and phone number in the email content
    $mailContent = "Name: $name\n" .
                   "Email: $email\n" .
                   "Country Code: $countryCode\n" . // Added line for country code
                   "Phone: $phone\n\n" .
                   "Message:\n$message";
    
    mail($to, $subject, $mailContent, $headers);

    header("Location: contact.html")
?>
