<?php

namespace App\Controllers\Auth;

use  App\service\AuthService;

class RegisterController
{

    public function register()
    {
        require_once("./app/view/register.php");
    }
    public function doRegister()
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repeatpassword = $_POST["repeat"];
        $register = new AuthService;
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
                    header("location: /nymphmaternity/login");
                }
            }
        }
    }
}
