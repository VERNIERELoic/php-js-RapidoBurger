<?php

namespace App\Controllers;

use App\Renderer;

class PageController
{
    public function viewHome(){
        echo Renderer::render("home.php");
        return;
    }
    public function viewConnexion(){
        echo Renderer::render("connexion.php");
        return;
    }
    public function viewRegister(){
        echo Renderer::render("register.php");
        return;
    }
}



