<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'mailer/vendor/phpmailer/src/Exception.php';
require 'mailer/vendor/phpmailer/src/PHPMailer.php';
require 'mailer/vendor/phpmailer/src/SMTP.php';

require 'mailer/vendor/autoload.php';


if(!function_exists('sendMailNoReply')){
    function sendMailNoReply($to,$subject,$message){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->CharSet    = 'UTF-8';
            $mail->isSMTP();
            $mail->SMTPDebug  = 0;
            $mail->Host       = 'mail.ivoirebox.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'no-reply@ivoirebox.com';
            $mail->Password   = 'Dj221tjRukF8';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('no-reply@ivoirebox.com', 'Ivoire Box');
            $mail->addAddress($to);
            $mail->addReplyTo('support@ivoirebox.com', 'Ivoire Box');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
            return 'send';
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}

if(!function_exists('sendMailTo')){
    function sendMailTo($to,$subject,$message){
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->CharSet = 'UTF-8';
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host       = 'mail.ivoirebox.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'support@ivoirebox.com';
            $mail->Password   = 'RKjxN1pIscVq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;

            $mail->setFrom('support@ivoirebox.com', 'Ivoire Box');
            $mail->addAddress($to);
            $mail->addReplyTo('support@ivoirebox.com', 'Ivoire Box');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
           return 'send';
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}

if(!function_exists('sendMailToMe')){
    function sendMailToMe($from,$fromName,$subject,$message){
        $mail = new PHPMailer(true);
        try {
            $mail->CharSet = 'UTF-8';
            $mail->SMTPDebug = 0;
            $mail->setFrom($from, $fromName);
            $mail->addReplyTo($from, $fromName);
            $mail->addAddress('support@ivoirebox.com', 'Ivoire Box');

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $message;

            $mail->send();
           return 'send';
        } catch (Exception $e) {
            return $mail->ErrorInfo;
        }
    }
}

