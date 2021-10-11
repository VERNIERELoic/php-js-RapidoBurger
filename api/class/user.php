<?php

include("../connection/db_connect.php");

class User
{
    private $id;
    private $full_name;
    private $username;
    private $birthday;
    private $password;
    private $city;
    private $country;
    private $zip_code;
    private $email;
    private $bdd;

    public function setUser($full_name,$username, $birthday, $password, $city, $country, $zip_code, $email)
    {
        $this->full_name = $full_name;
        $this->username = $username;
        $this->birthday = $birthday;
        $this->password = $password;
        $this->city = $city;
        $this->country = $country;
        $this->zip_code = $zip_code;
        $this->email = $email;
    }

    public function getUsers()
    {
        $response =  $this->bdd->query('SELECT * FROM users');
        $data = $response->fetchAll();
        return $data;
    }

    public function getUser($id)
    {
        try {
            $response =  $this->bdd->query('SELECT * FROM users WHERE id = ' + $id);
            $data = $response->fetchAll();
            return $data;
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function insertUser($user)
    {
        $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
        try {
            $sql = "INSERT INTO users (id, name, username, email, birthday, country, city, zip_code)
                VALUES ($user->id, $user->full_name, $user->username, $user->birthday, $user->password, $user->city, 
                $user->country, $user->zip_code, $user->email, $user->$pass_hache)";
            $this->bdd->exec($sql);
            var_dump("ok");
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function dropUser($user)
    {
        try {
            $sql = "DELETE FROM users WHERE id=$this.id";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    public function update($user)
    {
        try {
            $sql = "UPDATE users
                    SET id = $user->id, 
                        name = $user->full_name, 
                        username = $user->username, 
                        email = $user->email, 
                        birthday = $user->birthday, 
                        countrie = $user->country,
                        city = $user->city, 
                        zip_code = $user->zip_code,
                        password = $user->password,
                    WHERE id = $this->id";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
