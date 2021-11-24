<?php

namespace App\Repo;

use App\Models\User;

class UserRepo extends BaseRepo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setUser($username, $password, $email)
    {
        $user = new User($username, $password, $email); #User object instantiation
        return $user;
    }

    public function getUsers() # Get all user
    {

        $response =  self::$bdd->query('SELECT * FROM users');
        $data = $response->fetchAll();
        return $data;
    }

    public function getUser($id) #Get specific user from his ID
    {
        $response =  self::$bdd->query('SELECT * FROM users WHERE id = :id');
        $data = $response->fetchAll();
        return $data;
    }

    public function getUserInfo($username) #Get specific userID from username 
    {
        $sql = "SELECT id, password FROM users WHERE username = ?";
        $request = self::$bdd->prepare($sql);
        $request->execute(array($username));
        $res = $request->fetch();
        return $res;
    }

    public function insertUser($user) #Insert user in bdd
    {
        $sql = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array($user->username, $user->email, $user->password));
        return $response;
    }

    public function dropUser($user) #Delete user form bdd
    {
        $sql = "DELETE FROM users WHERE id = :$user->id";
        $req = self::$bdd->exec($sql);
    }

    public function update($user) #Change user info like password
    {
        $sql = "UPDATE users
                    SET id = $user->id,
                        username = $user->username, 
                        email = $user->email, 
                        password = $user->password,
                    WHERE id = $this->id";
        self::$bdd->exec($sql);
    }

    public function updatePassword($password, $userid)
    {
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array($password, $userid));
    }
}
