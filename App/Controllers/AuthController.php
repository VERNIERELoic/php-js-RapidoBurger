<?php

namespace App\Controllers;

use App\Controllers\UserController;
use App\Models\User;
use App\Repo\UserRepo;
use App\Renderer;
use App\Repo\AuthRepo;

class AuthController extends Controller
{

    public function viewRegister(){
        echo Renderer::render("register.php");
        return;
    }
    public function register(){
        $authrepo = new AuthRepo();
        $authrepo->register();

        return;
    }


}
