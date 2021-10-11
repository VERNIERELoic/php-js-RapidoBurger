<?php

include("../connection/db_connect.php");

$req = $bdd->prepare('SELECT id, password FROM users WHERE username = :username');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['password'], $statement['password']);

if (!$statement) {
     echo 'Mauvais identifiant ou mot de passe !';
} else {
     if ($isPasswordCorrect) {
          session_start();
          $_SESSION['id'] = $statement['id'];
          $_SESSION['username'] = $username;
          echo 'Vous êtes connecté !';
     } else {
          echo 'Mauvais identifiant ou mot de passe !';
     }
}