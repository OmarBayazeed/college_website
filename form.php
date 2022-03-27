<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



$email_from = 'mywebsite.com';


$email_subject = 'new form';


$email_body = "user name : $name.\n" .
              "user email : $email.\n".
              "user subject : $subject.\n".
              "user message : $message.\n";



$to = "omtb1990@gmail.com";

$headers = "from : $email_from \r\n";


$headers .= "replay to : $email \r\n";


mail($to, $email_subject, $email_body,$headers);


header("location : contact.html");


?>