<?php

$name = $_POST['name'];
$vicitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'v.abrar7@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n"."User Email: $email.\n"."User Message: $message.\n";

$to = "abr.std7@gmail.com";
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $vicitor_email \r\n";
mail($to, $email_subject,$email_body,$headers);
header("Location: index.html");
?>