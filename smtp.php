<?php

date_default_timezone_set('Etc/UTC');

require './lib/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = "smtp.mandrillapp.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "bappa2du@gmail.com";
$mail->Password = "mlAy_U3KtKpK4S1Y_TK9VA";
$mail->setFrom('iftakharul.alam@live.com', 'Restaurant International');
$mail->addReplyTo('bappa2du@gmail.com', 'First Last');
$mail->addAddress('bappa2du@gmail.com', 'John Doe');
$mail->Subject = 'Restaurant Invitation';
$mail->msgHTML(file_get_contents('index.php'), dirname(__FILE__));
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "<h1>Message sent!</h1>";
}
