<?php

namespace App\Repo;

use App\Connection\Databaseconnection;
use APP\Models\User;

class UserRepo extends BaseRepo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setUser($username, $password, $email)
    {
        $user = new User($username, $password, $email);
        return $user;
    }

    public function getUsers()
    {

        $response =  $this->bdd->query('SELECT * FROM users');
        $data = $response->fetchAll();
        return $data;
    }

    public function getUser($id)
    {
        $response =  $this->bdd->query('SELECT * FROM users WHERE id =' . $id);
        $data = $response->fetchAll();
        return $data;
    }

    public function insertUser($user)
    {
        $sql = "INSERT INTO users (id, username, email, password) VALUES (?,?,?,?)";
        $req = $this->bdd->prepare($sql);
        $response = $req->execute(array($user->username, $user->email, $user->password));
    }

    public function dropUser($user)
    {
        $sql = "DELETE FROM users WHERE id=$user->id";
        $this->bdd->exec($sql);
    }

    public function update($user)
    {
        $sql = "UPDATE users
                    SET id = $user->id,
                        username = $user->username, 
                        email = $user->email, 
                        password = $user->password,
                    WHERE id = $this->id";
        $this->bdd->exec($sql);
    }
}
