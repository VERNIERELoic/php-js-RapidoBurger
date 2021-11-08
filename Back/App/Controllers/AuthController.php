<?php

namespace App\Controllers;

use App\Controllers\UserController;
use App\Models\User;
use App\Repo\UserRepo;

class AuthController extends Controller
{

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
        if (password_verify($data->password, $user->password)) {

            $token = array(
                "iat" => $issued_at,
                "exp" => $expiration_time,
                "iss" => $issuer,
                "data" => array(
                    "id" => $user->id,
                    "firstname" => $user->firstname,
                    "lastname" => $user->lastname,
                    "email" => $user->email
                )
            );

            // set response code
            http_response_code(200);

            // generate jwt
            $jwt = JWT::encode($token, $key);
            echo json_encode(
                array(
                    "message" => "Successful login.",
                    "jwt" => $jwt
                )
            );
        }
    }


    public function logout()
    {
    }
}
