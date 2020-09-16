<?php

require_once('PHPMailer/PHPMailerAutoload.php');

$email_to = 'michaelmacaulay33@gmail.com';

$email_from = 'TechTimeDev@gmail.com';

$email_subject = 'Here is your download!';

$email_body = 'You will be a programming pro in no time! Thanks so much for joining the email list.';

$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>