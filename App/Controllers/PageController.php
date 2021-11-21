<?php

namespace App\Controllers;

use App\Renderer;

class PageController
{
    public function viewHome()
    {
        session_start();
        echo Renderer::render("home.php");
        return;
    }
    public function viewLogin()
    {
        session_start();
        echo Renderer::render("login.php");
        return;
    }
    public function viewRegister()
    {
        session_start();
        echo Renderer::render("register.php");
        return;
    }

    public function viewOrder()
    {
        session_start();
        echo Renderer::render("order.php");
        return;
    }
}
