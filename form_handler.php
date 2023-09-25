<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from = 'mmanzana.prince8@gmail.com'

$email_subject = 'New form submission'

$email_body = "User name: $name.n\".
               "User email: $visitor_email.n\".
               "Subject: $subject.n\".
               "User message: $message.n\";

$to = 'mmanzana.prince8@gmail.com'
$headers = "From: $email_from \r\n";
$headers .="reply-To: $visitor_email \r\n";

email($to, $email_subject,$email_body, $headers );

header("location: contact.html")
?>