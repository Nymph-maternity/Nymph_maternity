<?php

namespace App\Class;

class Controller
{
    public function login()
    {
        require_once("./App/view/login.php");
    }
    public function dashboard()
    {
        require_once("./App/view/dashboard.php");
    }
    public function profile()
    {
        require_once("./App/view/profile.php");
    }
    public function details2()
    {
        require_once("./App/view/details2.php");
    }
    public function register()
    {
        require_once("./App/view/register.php");
    }
    public function home()
    {
        require_once("./App/view/home.php");
    }
    public function details()
    {
        require_once("./App/view/details.php");
    }
}
