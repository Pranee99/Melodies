<?php
$name =  $_POST['name'];
$visiitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = "info@kpg.com";

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n"
             "User Email: $visitor_email.\n"
             "Subject: $subject.\n"
             "User Message: $message.\n";

$to = 'prnithye123@gmail.com'

$headers = "From: $email_form \r\n";

$headers = "Replay-TO: $visitor-email \r\n";

mail($To.$email_subject,$email_body,$headers);

header("Location: Contact.html");
?>