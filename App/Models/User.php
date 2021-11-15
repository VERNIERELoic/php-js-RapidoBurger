<?php

namespace App\Models;

class User
{
    // User class attributes 
    public $id;
    public $username;
    public $password;
    public $email;

    #Constructore of user class
    public function __construct($username, $email, $password)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }
}
