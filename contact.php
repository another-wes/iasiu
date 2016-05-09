<?php

$name 	  = $_POST["fullName"];
$email	  = $_POST["email"];
$message  = $_POST["message"];
$to       = 'isaacbell388@gmail.com';
$subject  = "IASIU Contact Request: $name";
$headers  = 'From: action.mailer@al-iasiu.com' . "\r\n" .
    'Reply-To: action.mailer@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://www.al-iasiu.com/");
?> 