<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

$mail = new PHPMailer(true);

try {
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'yasserfcesar@gmail.com';
$mail->Password   = 'ocni qdxo essp vvgl';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port       = 465;

$mail->setFrom('yasserfcesar@gmail.com', 'TIENDA ENERGIA 4D');
$mail->addAddress('cesarvlad.oficial@gmail.com', 'Joe User');

$mail->isHTML(true);       
$mail->Subject = 'Detalles de su compra';
$mail->Body = 'Esta es una prueba de <b>Venta</b>';
$mail->send();

echo 'Correo enviado';

} catch (Exception $e) {
    echo 'Mensaje '. $mail->ErrorInfo;
    
}