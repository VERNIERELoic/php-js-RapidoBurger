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

        $sql = "INSERT INTO users ( name, username, email, birthday, country, city, zip_code, password) VALUES (?,?,?,?,?,?,?,?)";
        $req = $this->bdd->prepare($sql);
        $response = $req->execute(array($user->name, $user->username, $user->email, $user->birthday, $user->country, $user->city, $user->zip_code, $user->password));
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
                        name = $user->name, 
                        username = $user->username, 
                        email = $user->email, 
                        birthday = $user->birthday, 
                        countrie = $user->country,
                        city = $user->city, 
                        zip_code = $user->zip_code,
                        password = $user->password,
                    WHERE id = $this->id";
        $this->bdd->exec($sql);
    }
}
