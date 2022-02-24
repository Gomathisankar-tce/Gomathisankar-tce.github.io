<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'gomathishankar253@gmail.com'

$email_subject = 'new form submission'

$email_body = "User Name:$name.\n".
              "User email:$visitor_email.\n".
               "subject:$subject.\n".
               "User message:$visitor_email.\";



$to = 'gomathisankarb@student.tce.edu';

$headers = "From: $email_from\r\n";

$headers = "Reply to:$visitor_email \r\n";               


mail($to,$email_subject,$email_body,$headers);

headers("Location:contact.html");



?>




