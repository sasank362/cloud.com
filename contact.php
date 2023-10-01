<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "chenchusasankp@email.com";
        
    $headers = "From: $email" . "\r\n" .
            "Reply-To: $email" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();

    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Phone Number: $phoneNumber\n";
    $emailMessage .= "Subject: $subject\n\n";
    $emailMessage .= "Message:\n$message";

    $mailSent = mail($to, $subject, $emailMessage, $headers);

    if ($mailSent) {
    header("Location: thank_you.html");
    exit;
    } else {
    echo "Sorry, there was an error sending your message.";
    }
}
?>