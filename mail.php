<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

try {
    //Server settings                   // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'davidulo123@gmail.com';                     // SMTP username
    $mail->Password   = 'kokot7788';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Recipients
    $mail->setFrom('davidulo123@gmail.com', 'Dávid Slačka');
    $mail->addAddress('davidulo123@gmail.com', 'Dávid Slačka');
    $mail->addReplyTo($_POST['mail'], $_POST['name']);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Dobrá Stavba požiadavka s predmetom: '.$_POST['subject'];
    $mail->Body    = 'Dostali sme e-mail od zaujemcu<b> '.$_POST['name'].'</b> so spravou: <br><br>'.$_POST['message'];

    $mail->send();
    echo 'Sprava bola odoslana, mozete sa vratit naspat.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}