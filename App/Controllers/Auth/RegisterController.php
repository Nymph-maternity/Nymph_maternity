<?php

namespace App\Controllers\Auth;

use  App\Services\AuthService;
use Symfony\Component\HttpFoundation\Request;

class RegisterController
{

    public function register()
    {
        require_once("./app/view/register.php");
    }
    public function doRegister()
    {
        $context = request::createFromGlobals();
        $username = $context->request->get('username');
        $email = $context->request->get('email');
        $password = $context->request->get('password');
        $repeatpassword = $context->request->get('repeat');
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
                    header("location: ./login");
                }
            }
        }
    }
}
