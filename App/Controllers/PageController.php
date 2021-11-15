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
        $error = true;
        echo Renderer::render("login.php", compact('error'));
        return;
    }
    public function viewRegister(){
        echo Renderer::render("register.php");
        return;
    }
}



