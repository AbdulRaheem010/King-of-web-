<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $details = htmlspecialchars($_POST['details']);

    $to = "abubakarabdulraheem16@gmail.com";
    $subject = "New Quote Request from " . $name;
    $message = "Name: " . $name . "\n"
             . "Email: " . $email . "\n"
             . "Phone: " . $phone . "\n\n"
             . "Project Details:\n" . $details;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your request has been sent.";
    } else {
        echo "Sorry, there was an error sending your request. Please try again later.";
    }
}
?>