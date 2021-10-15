<?php
namespace App\Controllers;
use App\Models\User;
use App\repo\UserRepo;

class UserController extends Controller
{

    public function secQuery($sql, $req)
    {
        // To Do.. 
    }
    // Methode permettant d'initaliser les valeurs de User
    public function setUser($username, $password, $email)
    {
        $user = new User($username, $password, $email);
        return $user;
    }

    // Obtenir tous les Users
    public function getUsers()
    {
        $response =  $this->bdd->query('SELECT * FROM users');
        $data = $response->fetchAll();
        return $data;
    }

    // Obtenir un User specifique via son id
    public function getUser($id)
    {
        try {
            $response =  $this->bdd->query('SELECT * FROM users WHERE id =' . $id);
            $data = $response->fetchAll();
            return $data;
        } catch (\Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    // Enregistrer un User dans la base de donnée
    public function insertUser($user)
    {
        try {
            $sql = "INSERT INTO users ( name, username, email, birthday, country, city, zip_code, password) VALUES (?,?,?,?,?,?,?,?)";
            $req = $this->bdd->prepare($sql);
            $response = $req->execute(array($user->name, $user->username, $user->email, $user->birthday, $user->country, $user->city, $user->zip_code, $user->password));
        } catch (\Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    //Supprimer un User de la base de donnée
    public function dropUser($user)
    {
        try {
            $sql = "DELETE FROM users WHERE id=$user->id";
            $this->bdd->exec($sql);
        } catch (\Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }

    // Modifier un User dans la base de donnée
    public function update($user)
    {
        try {
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
        } catch (\Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
