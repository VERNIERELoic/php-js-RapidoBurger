<?php
$host = 'localhost';
$port = "3306";
$dbname = 'rapido';
$dbuser = 'loic';
$dbpass = 'toor';

try {
  //On test la connexion à la base de donnée
  $bdd = new PDO("mysql:host=$host;dbname=$dbname", $dbuser, $dbpass);
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  reponse_json($success, $data, 'Connexion à la base de donnée reussi');
} catch (Exception $e) {
  //Si la connexion n'est pas établie, on stop le chargement de la page.
  reponse_json($success, $data, 'Echec de la connexion à la base de données');
  exit();
}
