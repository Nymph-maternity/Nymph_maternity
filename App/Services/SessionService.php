<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class SessionService
{
    public function SessionStart()
    {
        $context = Request::createFromGlobals();
    }
    public function SessionStop()
    {
        $session = new Session();
        $session->clear();
        header("location: ./home");
    }
}
