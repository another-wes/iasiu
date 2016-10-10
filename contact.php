<?php

$name 	  = $_POST["fullName"];
$email	  = $_POST["email"];
$message  = $_POST["message"];
$to       = 'isaacbell388@gmail.com';
$subject  = "IASIU Contact Request: $name";
$headers  = 'From: noreply@al-iasiu.com' . "\r\n" .
            'Reply-To: noreply@al-iasiu.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header("Location: http://www.al-iasiu.com/");
exit();

// Redirect failsafe using JS
// $url = 'http://al-iasiu.com/';
// function redirect($url){
//     if (headers_sent()){
//       die('<script type="text/javascript">window.location=\''.$url.'\';</script‌​>');
//     }else{
//       header('Location: ' . $url);
//       die();
//     }    
// }
?> 