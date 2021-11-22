<?php

namespace App\Controllers;

use App\Controllers\UserController;
use App\Models\User;
use App\Repo\UserRepo;
use App\Renderer;
use App\Repo\AuthRepo;
use App\Controllers;
use App\Repo\ResetRepo;

class AuthController extends Controller
{

    public function viewRegister()
    {
        echo Renderer::render("register.php");
        return;
    }
    public function register()
    {
        $authrepo = new AuthRepo();
        $authrepo->register();
        echo Renderer::render("home.php");
        return;
    }

    public function login()
    {
        $authrepo = new AuthRepo();
        $error = $authrepo->login();
        if ($error) {
            echo Renderer::render("home.php");
        } else {
            echo Renderer::render("login.php", compact('error'));
        }
        return;
    }
    public function logout()
    {
        $authrepo = new AuthRepo();
        $authrepo->logout();
        echo Renderer::render("home.php");
        return;
    }

    public function resetpsswd()
    {
        $resetrepo = new ResetRepo();
        $resetrepo->sendMail();
        return;
    }
}
