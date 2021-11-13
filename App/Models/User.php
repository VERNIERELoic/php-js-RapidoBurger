<?php

namespace App\Models;

class User
{
    // Attributs de la class User
    public $id;
    public $username;
    public $password;
    public $email;

    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}
