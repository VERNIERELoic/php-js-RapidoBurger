<?php

namespace App\Repo;

use App\Connection\Databaseconnection;
use APP\Repo\UserRepo;

abstract class AuthRepo
{

    public function __construct()
    {

    }
        // Insert user in BDD
        public function register()
        {
    
            if (isset($_POST['name'])) {
                $userrepo = new UserRepo();
                $user = $userrepo->setUser(
                    $_POST['username'],
                    password_hash($_POST['password'], PASSWORD_DEFAULT),
                    $_POST['email']
                );
    
                $userrepo->insertUser($user);
            }
        }
    
        public function login($username,$password)
        {
           
        }
    
        public function logout()
        {
        }
}
