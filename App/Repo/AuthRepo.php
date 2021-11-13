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
            var_dump("before isset");
            if (isset($_POST['username'])) {
                var_dump("isset true");
                $userrepo = new UserRepo();
                $user = $userrepo->setUser(
                    $_POST['username'],
                    $_POST['email'],
                    password_hash($_POST['password'], PASSWORD_DEFAULT)
                );

                $userrepo->insertUser($user);
            }
            return $user;
        }
    
        public function login($username,$password)
        {
           
        }
    
        public function logout()
        {
        }
}
