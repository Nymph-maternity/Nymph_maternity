<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


class SessionService
{
    public function SessionStart()
    {
        $context = Request::createFromGlobals();
        $context->request->start();
    }
    public function SessionStop()
    {
        $session->clear();
        header("location: ./home");
    }
}
