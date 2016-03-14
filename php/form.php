<?php
$name = $_GET['userName'];
$email = $_GET['userEmail'];
$message = $_GET['userMessage'];

$to = 'galvin9@hotmail.com';
$email_subject = "Contact form submitted by: $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $email\n Message \n $message";
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: header test <galvin9@hotmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$retval = mail($to,$email_subject,$email_body,$headers);
		
if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }	
?>