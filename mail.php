<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



// Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug  = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    //$mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'tesleemolamilekan@gmail.com';                     // SMTP username
    $mail->Password   = 'Tescode__@@1998Ola';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('tesleemolamilekan@gmail.com', 'THE PHONE VENDORS CUSTOMER SERVICE');
    $mail->addAddress($email, $fullname);     // Add a recipient
    $mail->addReplyTo('tescodepro@gmail.com', 'CUSTOMER SERVICE');
    //
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to THE PHONE VENDORS CUSTOMER SERVICE <br>';
    $mail->Body    = 'Your details has been successful registratered<br>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}