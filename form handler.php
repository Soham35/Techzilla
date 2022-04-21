<?php 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];

$email_form = 'https://techzillaorg.netlify.app';

$email_subject ='New Form Submission';

$email_body = "User Name: $name.n\".
               "User email: $visitor_email.n\".
               "subject: $subject.n\".
               "User massege: $message .\n";
   
               

  $to = 'sohamchak127@gmail.com';

  $headers = "From: $email_form \r\n";

  $headers .= "Reply-To $visitor_email \r\n";

  mail ($to, $email_subject, $email_body,$headers);

  header("Location: contact.html.html");


?>