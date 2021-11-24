<?php

namespace App\Service;

use App\Repo\UserRepo;

class AuthService extends Service
{

    public function __construct()
    {
        parent::__construct();
    }
    // Insert user in BDD
    public function register()
    {

        if (isset($_POST['username'])) { #test if username field enmpty
            $userrepo = new UserRepo();
            $user = $userrepo->setUser(  # Set attributes of user classs
                $_POST['username'],
                $_POST['email'],
                password_hash($_POST['password'], PASSWORD_DEFAULT)
            );

            $userrepo->insertUser($user); #make sql request to insert user in bdd
        }
        return $user;
    }

    public function login()
    {
        $userrepo = new UserRepo(); 
        $username = $_POST['username'];
        $res = $userrepo->getUserInfo($username);
        $isPasswordCorrect = password_verify($_POST['password'], $res['password']);

        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['id'] = $res['id'];
            $_SESSION['username'] = $username;
            return false;
        } else {
            return true;
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
    }
}