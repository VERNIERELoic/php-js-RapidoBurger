<?php

include("../connection/db_connect.php");

class burger
{
    private $bred;
    private $veg;
    private $sauce;
    private $meet;

    public function insertIngredients($burger)
    {
        try {
            $sql = "INSERT INTO burger (id, bred, veg, sauce, meet)
                    VALUES ($burger->id, $burger->bred, $burger->veg, $burger->sauce, $burger->meet)";
            $this->bdd->exec($sql);
        } catch (Exception $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
