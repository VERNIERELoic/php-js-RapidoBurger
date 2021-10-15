<?php
namespace App\Models;
use App\Controller\UserController;

require_once("../connection/db_connect.php");

class User
{
    // Attributs de la class User
    private $id;
    private $username;
    private $password;
    private $email;

    public function __construct($username, $password, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

}
