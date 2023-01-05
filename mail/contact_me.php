<?php
if(empty($_POST['fname'])  		||
   empty($_POST['lname'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
	

$to = 'leicgm@yahoo.com';
$email_subject = "Information from:  $fname $lname ";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $fname $lname\n\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email\n";
$headers .= "Reply-To: $email";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>