<?php

namespace App\Repo;

use App\Models\Burger;

class BurgerRepo extends BaseRepo       
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setBurger($pain, $legumes, $steakveg, $saucemaison, $orderid)
    {
        $burger = new Burger($pain, $legumes, $steakveg, $saucemaison, $orderid);
        return $burger;
    }

    public function insertBurger($burger, $userid)
    {
        $order = new OrderRepo();
        $orderid = $order->getCurrOrderId($userid);
        $sql = "INSERT INTO burger (pain, legumes, steakveg, saucemaison, orderid) VALUES (?,?,?,?,?)";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array($burger->pain, $burger->legumes, $burger->steakveg, $burger->saucemaison, $orderid));
        return $response;
    }
}
