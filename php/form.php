<?php
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$message = $_POST['userMessage'];

$to = 'galvin9@hotmail.com';
$email_subject = "Contact form submitted by: $name";
$email_body = $name . " " . $email . " " . $message;

mail($to,$email_subject,$email_body);
?>