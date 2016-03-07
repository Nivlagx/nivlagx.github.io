<?php
$name = $_POST['userName'];
$email = $_POST['userEmail'];
$message = $_POST['userMessage'];

$to = 'galvin9@hotmail.com';
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $email\n Message \n $message";
$headers = "From: test@test.com\n";
$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>