<?php

namespace App\Controllers;

use App\Renderer;
use App\Repo\AuthRepo;
use App\Repo\ResetRepo;
use App\Service\AuthService;

class AuthController extends Controller
{

    public function viewRegister()
    {
        echo Renderer::render("register.php");
        return;
    }
    public function register()
    {
        $authrepo = new AuthService();
        $authrepo->register();
        echo Renderer::render("home.php");
        return;
    }

    public function login()
    {
        $authrepo = new AuthService();
        $error = $authrepo->login();
        if ($error) {
            echo Renderer::render("login.php", compact('error'));
        } else {
            echo Renderer::render("home.php");
        }
        return;
    }
    public function logout()
    {
        $authrepo = new AuthService();
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
