<?php

namespace App\Controllers;

use App\Renderer;

class PageController extends Controller
{
    public function viewHome()
    {
        
        echo Renderer::render("home.php");
        return;
    }
    public function viewLogin()
    {
       
        echo Renderer::render("login.php", ['error' => false]);
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
        
        echo Renderer::render("order.php");
        return;
    }

    public function viewResetpsswd()
    {
        echo Renderer::render("resetpsswd.php");
        return;
    }
}
