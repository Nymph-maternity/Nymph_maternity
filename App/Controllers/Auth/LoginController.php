<?php

namespace App\Controllers\Auth;

use App\service\AuthService;

class LoginController
{
    public function login()
    {
        require_once("./App/view/login.php");
    }
    public function doLogin()
    {
        $login = new AuthService;
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($login->loginUser($password, $email)) {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['logged_in'] = true;
        } else {
            $message = "No user with the provided email";
        }
    }
    public function doLogout()
    {
        session_start();
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        unset($_SESSION['logged_in']);
        header("Location: ../view/index.html.php");
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
