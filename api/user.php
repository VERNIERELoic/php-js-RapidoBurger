<?php
include('template.php');




$requete = $pdo->prepare("SELECT * FROM `user`");
var_dump("EO LA".$requete->execute());

if ($requete->execute()) {
    $resultats = $requete->fetchAll();

    $success = true;
    $data['id'] = count($resultats);
    $data['nom'] = $resultats;
} else {
    $msg = "Une erreur s'est produite";
}

var_dump($resultats);
