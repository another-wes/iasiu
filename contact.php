<?php
require './vendor/autoload.php';

$name 	  = $_POST["fullName"];
$email	  = $_POST["email"];
$message  = $email . "\r\n\r\n" . $_POST["message"];
$to       = 'isaacbell388@gmail.com';
$subject  = "IASIU Mailer: Contact Request from $name";
// $headers  = 'From: noreply@al-iasiu.com' . "\r\n" .
            // 'Reply-To: noreply@al-iasiu.com' . "\r\n" .
            // 'X-Mailer: PHP/' . phpversion();

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $to;
$mail->Password = 'Goonernoob334';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->SMTPDebug = 2;

$mail->setFrom('noreply@al-iasiu.com', 'IASIU Mailer');
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body    = $message;
$mail->isHTML(true);

if(!$mail->Send()) {
    echo 'Message was not sent.';
    echo 'Mailer error: ' . $mail->ErrorInfo;
}else {
    echo 'Message has been sent.';
}

// $mail->Send();

// mail($to, $subject, $message, $headers);

// Note: Deprecated this because of redirect error
// header("Location: http://www.al-iasiu.com/");
// exit();

// if(!$mail->Send()) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
//  } else {

// $redirectURL = 'http://al-iasiu.com/'; // Must be abs. path
// function redirect($url){
//     if (headers_sent()){
//     die('<script type="text/javascript">window.location=\''.$url.'\';</script‌​>');
//     }else{
//     header('Location: ' . $url);
//     die();
//     }    
// }


// redirect($redirectURL);
// exit();
?> 
