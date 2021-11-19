<?php
require "../scripts/register.php";
require_once "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$username = "";
$email = "";
$password = "";
$repeatpassword = "";
$message = "please enter your details";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeat"];
}
$register = new register;


if ($register->emptydetails($username, $email, $password, $repeatpassword) == true) {
    $message = "you cannot leave any field empty";
} else {
    if ($register->passwordCheck($password, $repeatpassword) == true) {
        $message = "password mismatch";
    } else {
        if ($register->userExist($username, $email) == false) {
            echo "user already exists";
        } else {
            $register->createUser($username, $email, $password);
            try {
                $email = $_POST['email'];
                $phpmailer = new PHPMailer();
                $phpmailer->isSMTP();
                $phpmailer->Host = 'smtp.mailtrap.io';
                $phpmailer->SMTPAuth = true;
                $phpmailer->SMTPSecure = "tls";
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
                    header("location: ../view/login.html.php");
                } else {
                    echo "could not send mail";
                }
            } catch (Exception $e) {
                echo "an error occured while trying to send mail \n ";
                print_r($email->ErrorInfo);
            }
        }
    }
}
