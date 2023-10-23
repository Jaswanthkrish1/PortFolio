<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $to = "Jaswanthdarapaneni4@gmail.com";  // Replace with your email address
    $headers = "From: $email\r\n";
    
    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Subject: $subject\n";
    $mailBody .= "Message:\n$message";
    // mail($to,$subject, $message,$headers)
    echo "{$name,$email}"
    if (mail($to, "Contact Form Submission", $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
}
?>
