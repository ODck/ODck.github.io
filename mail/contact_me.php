<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	    ||
   empty($_POST['subject'])     ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Please fill in all fields";
	return false;
   }
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject']
$message = $_POST['message'];

// Create the email and send the message
$to = 'odck.studio@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_body = "New form from web:\nName: $name\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: ODck Web<info@odck.es>\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
$headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
mail($to,$subject,utf8_decode($email_body),$headers);
return true;			
?>