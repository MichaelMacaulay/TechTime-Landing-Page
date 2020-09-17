<?php 

// $_POST["name"]; = 'userName';
// Also need to add person's name to the email message. Do it later

$subject = 'Here is your download!';
$message = "Hey You will be a programming pro in no time! Thanks so much for joining the email list.";
$headers = "From: <techtimedev@gmail.com";


// Call the mail function & pass in the to email, subject, message and headers/from email
mail($_POST["email"], $subject, $message, $headers);

?>