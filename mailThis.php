<?php 

// $_POST["name"]; = 'userName';
// Also need to add person's name to the email message. Do it later

$subject = 'HELLO WORLD';
$message = "DOWNLOAD THIS NOW";
$headers = array(
    'From' => 'techtimedev@gmail.com',
    'Reply-To' => 'techtimedev@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);


// Call the mail function & pass in the to email, subject, message and headers/from email
mail($_POST["email"], $subject, $message, $headers);

?>