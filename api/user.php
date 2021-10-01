<?php

include("db_connect.php");

class User
{
    private $id;
    private $name;
    private $username;
    private $birthday;
    private $password;
    private $city;
    private $country;
    private $zip_code;
    private $email;
    private $bdd;


    public function getUsers()
    {
        $response =  $this->bdd->query('SELECT * FROM user');
        $data = $response->fetchAll();
        return $data;
    }

    public function getUser($id)
    {
        try {
            $response =  $this->bdd->query('SELECT * FROM user WHERE id = ' + $id);
            $data = $response->fetchAll();
            return $data;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function insertUser($user)
    {
        try {
            $sql = "INSERT INTO user (id, name, username, email, birthday, country, city, zip_code)
                VALUES ($user->id, $user->name, $user->username, $user->birthday, $user->password, $user->city, 
                $user->country, $user->zip_code, $user->email)";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function dropUser($user)
    {
        try {
            $sql = "DELETE FROM user WHERE id=$this.id";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function update($user)
    {
        try {
            $sql = "UPDATE user
                    SET id = $user->id, 
                        name = $user->name, 
                        username = $user->username, 
                        email = $user->email, 
                        birthday = $user->birthday, 
                        countrie = $user->country,
                        city = $user->city, 
                        zip_code = $user->zip_code
                    WHERE id = $this->id";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
