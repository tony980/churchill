<?php
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/Exception.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail=new PHPMailer();

$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->SMTPAuth="true";

$mail->SMTPSecure="tls";
$mail->Port="587";
$mail->Username="laugheventschurchill@gmail.com";
$mail->Password="mwanamisi49";
$mail->Subject="Test Data";

$mail->setFrom("laugheventschurchill@gmail.com");
$mail->isHTML(true);
$mail->addAttachment('img/email.jpg');

$mail->Body="<h1>Plain text data trial</h1><br><p>This is html paragraph...";
$mail->addAddress("tonywex49@gmail.com");


$mail->send();


$mail->smtpclose();



?>