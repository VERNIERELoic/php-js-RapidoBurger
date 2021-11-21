<?php

namespace App\Repo;

use App\Models\Order;

class OrderRepo extends BaseRepo
{

    public function __construct()
    {

    }

    public function setOrder($userid, $date)
    {
        $order = new Order($date, $userid);
        return $order;
    }

    public function insertOrder($order)
    {
        $sql = "INSERT INTO orders (userid, date) VALUES (?,?)";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array($order->date, $order->userid));
        return $response;
    }

    public function getCurrOrderId($userid)
    {
        $sql = "SELECT orderid from orders where userid = :userid";
        $req = self::$bdd->prepare($sql);
        $response = $req->fetchAll();
        return $response;
    }
}
