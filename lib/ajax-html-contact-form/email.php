<?php
$subject = 'Addressing Homes Contact Form: ' . $_REQUEST['email']; // Subject of your email
$to = "pcannon@addressinghomes.org";  //Recipient's E-mail
  
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['email'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message .= 'Name: ' . $_REQUEST['name'] . "<br><br>";
$message .= 'Message: ' . $_REQUEST['message'] . "<br><br>";
$message .= 'Phone: ' . $_REQUEST['phone'] . "<br><br>";
$message .= 'Email: ' . $_REQUEST['email'] . "<br><br>";
$message .= 'Country: ' . $_REQUEST['country'] . "<br><br>";

$honeypot = false;

if ($_REQUEST['subject'] != '') {
  $honeypot = true;
}


if (!($honeypot == true) && @mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>