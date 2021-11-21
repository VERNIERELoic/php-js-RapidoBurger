<?php

namespace App\Repo;

use App\Repo\UserRepo;

class AuthRepo extends BaseRepo
{

    public function __construct()
    {
    }
    // Insert user in BDD
    public function register()
    {

        if (isset($_POST['username'])) { #test if username field enmpty
            var_dump("isset true");
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
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
    }
}