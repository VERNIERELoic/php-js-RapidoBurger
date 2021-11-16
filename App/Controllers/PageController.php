<?php

namespace App\Controllers;

use App\Renderer;

class PageController
{
    public function viewHome(){
        echo Renderer::render("home.php");
        return;
    }
    public function viewLogin(){
        echo Renderer::render("login.php");
        return;
    }
    public function viewRegister(){
        echo Renderer::render("register.php");
        return;
    }

    public function viewOrder(){
        echo Renderer::render("order.php");
        return;
    }
}



