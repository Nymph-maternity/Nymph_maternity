<?php

namespace App\Controller\Auth;

require_once "../vendor/autoload.php";



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerController
{
    public function mail()
    {
        try {
            $email = $_POST["email"];
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;

            $phpmailer->Username = '4ee7d40d8d29ab';
            $phpmailer->Password = '99ac8ff640b39d';


            $phpmailer->setFrom("aminuoluwatosin2000@gmail.com", "Kardinal pharmaceuticals");
            $phpmailer->addAddress($email);
            $phpmailer->addReplyTo("aminuoluwatosin2000@gmail.com", "Reply");

            $phpmailer->isHTML(true);
            $phpmailer->Subject = "CONGRATULATIONS Registeration successful";
            $phpmailer->Body = "<p> you are recieving this message because you registered at NYPH maternity";
            $phpmailer->AltBody = "This is the plain text version of the email content";

            if ($phpmailer->send()) {
                echo "mail sent successfully";
            } else {
                echo "could not send mail";
            }
        } catch (Exception $e) {
            echo "an error occured while trying to send mail \n ";
            print_r($email->ErrorInfo);
        }
    }
}
