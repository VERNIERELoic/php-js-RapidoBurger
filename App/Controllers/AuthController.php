<?php

namespace App\Controllers;

use App\Controllers\UserController;
use App\Models\User;
use App\Repo\UserRepo;
use App\Renderer;

class AuthController extends Controller
{

    public function viewRegister(){
        echo Renderer::render("register.php");
        return;
    }

}
