<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "betboom@hotmail.com";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message Sent Successfully!'); window.location='index.php#contact';</script>";
    } else {
        echo "<script>alert('Failed to Send. Try Again Later.'); window.location='index.php#contact';</script>";
    }
}
?>
