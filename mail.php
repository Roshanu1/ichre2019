<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

function sendMail($body){
    $mail = new PHPMailer(true);                                  // Passing `true` enables exceptions
    try {
        // Server settings
        $mail->SMTPDebug = 0;                                	            // Enable verbose debug output
        $mail->isSMTP();                                     	            // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';												// Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                              	            // Enable SMTP authentication
        $mail->Username = 'ichre2019@gmail.com';                            // SMTP username
        $mail->Password = '#';                                      // SMTP password
        $mail->SMTPSecure = 'tls';                                          // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                                  // TCP port to connect to

        //Recipients
        $mail->setFrom('ichre2019@gmail.com', 'ICHRE 2019');
        $mail->addReplyTo('ichre2019@gmail.com', 'ICHRE 2019');
        $mail->AddAddress('roshanbhandari.716@gmail.com');
        $mail->isHTML(true); 												// Set email format to HTML
        $mail->Subject = 'ICHRE INQUIRY';
        $mail->Body    = $body;						                        // message

        $mail->send();
        return true;
    } catch (\Exception $e) {
        return false;
    }
}
?>