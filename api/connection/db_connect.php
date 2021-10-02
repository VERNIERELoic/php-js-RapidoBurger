<?php

$dbhost = "127.0.0.1";
$dbname = "rapido";
$dbuser = "loic";
$dbpass = "toor";

try {
  // On se connecte à MySQL
  $bdd = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (Exception $e) {
  // En cas d'erreur, on affiche un message et on arrête tout
  die('Erreur : ' . $e->getMessage());
}
