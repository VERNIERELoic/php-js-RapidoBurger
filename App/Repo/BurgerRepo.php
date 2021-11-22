<?php

namespace App\Repo;

use App\Models\Burger;

class BurgerRepo extends BaseRepo
{

    public function __construct()
    {
    }

    public function setBurger($pain, $legumes, $steakveg, $saucemaison, $orderid)
    {
        $burger = new Burger($pain, $legumes, $steakveg, $saucemaison, $orderid);
        return $burger;
    }

    public function insertBurger($burger, $orderid)
    {
        $sql = "INSERT INTO burger (pain, legumes, steakveg, saucemaison, orderid) VALUES (?,?,?,?,?)";
        $req = self::$bdd->prepare($sql);
        $req->execute(array($burger->pain, $burger->legumes, $burger->steakveg, $burger->saucemaison, intval($orderid)));
        var_dump($sql,array($burger->pain, $burger->legumes, $burger->steakveg, $burger->saucemaison, intval($orderid)) );
        return $orderid;
    }
}
