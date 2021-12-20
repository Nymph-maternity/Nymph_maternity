<?php
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// class Mailer extends database
// {

//     public function SendMail($email)
//     {

//         $mail = new PHPMailer(true);
//         $mail->isSMTP();
//         $mail->CharSet = 'UTF-8';
//         $mail->Host = "stmp.mailtrap.oi";
//         $mail->Port       = 2525;
//         $mail->SMTPAuth   = true;
//         $mail->SMTPSecure = "tls";
//         $mail->Username   = '4ee7d40d8d29ab';
//         $mail->Password   = '99ac8ff640b39d';

//         $mail->setFrom = "aminuoluwatosin2000@gmail.com";
//         $mail->FromName = "Aminu Halimat";


//         $mail->addAddress($email);
//         $mail->addReplyTo("aminuoluwatosin2000@gmail.com", "Reply");
//         $mail->isHTML(true);

//         $mail->Subject = "CONGRATULATIONS Registeration successful";
//         $mail->Body = "<p> you are recieving this message because you registered at NYPH maternity";
//         $mail->AltBody = "This is the plain text version of the email content";

//         try {
//             $mail->send();
//             echo "Message has been sent successfully";
//             header("../view/dashboard.html.php");
//         } catch (Exception $e) {
//             echo "Mailer Error: " . $mail->ErrorInfo;
//         }
//     }
// }
try {
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

    if ($mail->send()) {
        echo "mail sent successfully";
    } else {
        echo "could not send mail";
    }
} catch (Exception $e) {
    echo "an error occured while trying to send mail \n ";
    print_r($email->ErrorInfo);
}
