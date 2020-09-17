<?php

// Create simple message & email
$email_to = 'michaelmacaulay33@gmail.com';
$subject = 'Here is your download!';
$message = "You will be a programming pro in no time! \n\n Thanks so much for joining the email list.";


// Create the email headers including the from
$headers = "From: TechTime <techtimedev@gmail.com.me>";

// Send the email to the user
    if ( mail($email_to, $subject, $message, $headers) )
        echo 'success';
    else
        echo 'not sent';


?>