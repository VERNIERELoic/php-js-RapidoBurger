<?php
namespace App\Controllers;
use App\Controllers\UserController;

class AuthController extends Controller
{

    // Insert user in BDD
    public function register()
    {
        $userController = new UserController();

        if (isset($_POST['name'])) {
            $user = $userController->setUser(
                $_POST['username'],
                password_hash($_POST['password'], PASSWORD_DEFAULT),
                $_POST['email']
            );
            $userController->insertUser($user);
        }
    }

    public function login(){

    }


    public function logout(){

    }
}
