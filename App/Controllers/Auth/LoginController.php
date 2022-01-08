<?php

namespace App\Controllers\Auth;

use App\Services\AuthService;
use App\Services\SessionService;
use Symfony\Component\HttpFoundation\Request;



class LoginController
{
    public function login()
    {
        require_once("./App/view/login.php");
    }
    public function doLogin()
    {
        $context = Request::createFromGlobals();
        $password = $context->request->get('password');
        $email = $context->request->get('email');
        $login = new AuthService();
        $login->loginUser($password, $email);
        SessionService::SetSessionDetails($email);
    }
    public function doLogout()
    {
        $session = new SessionService();
        $session->StopSession();
    }

    public function dashboard()
    {
        require_once("./App/view/dashboard.php");
    }
    public function profile()
    {
        require_once("./App/view/profile.php");
    }
}
