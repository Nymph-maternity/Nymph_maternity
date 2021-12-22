<?php

namespace App\Controllers;

class PagesController
{
    public function about()
    {
    }
    public function news()
    {
    }
    public function home()
    {
        require_once("./app/view/home.php");
    }
}
