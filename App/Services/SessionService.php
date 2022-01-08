<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Session\Session;


class SessionService
{

    public static function StartSession()
    {
        $session = new Session();
        $session->start();
    }
    public static function SetSessionDetails($email)
    {
        $session = new Session();
        $session->set('email', $email);
        $session->migrate();
    }
    public static function GetSessionDetails()
    {
        $session = new Session();
        $email = $session->get('email');
        return $email;
    }
    public static function StopSession()
    {
        $session = new Session();
        $session->clear();
    }
}
