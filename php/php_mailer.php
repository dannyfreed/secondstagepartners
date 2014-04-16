<?php
require '/php/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'relay-hosting.secureserver.net';  // Specify main and backup server


$mail->From = 'freed.danny@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('freed.danny@gmail.com', 'Danny Freed');  // Add a recipient
$mail->addAddress('danny@gadole.com');  
$mail->addAddress('larry.freed@2ndstagepartners.com');              // Name is optional
$mail->addReplyTo('freed.danny@gmail.com', 'Danny Freed');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');



$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';