<?php

namespace App\Controllers;

use App\Renderer;

class PageController extends Controller
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
        echo Renderer::render("register.php");
        return;
    }
    public function viewForgot()
    {
        echo Renderer::render("forgot.php");
        return;
    }

    public function viewOrder()
    {
        session_start();
        echo Renderer::render("order.php");
        return;
    }
}
