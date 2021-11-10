<?php

namespace App\Controllers;

use App\Renderer;

class HomeController
{
    public function viewHome(){
        echo Renderer::render("home.php");
        return;
    }
}



