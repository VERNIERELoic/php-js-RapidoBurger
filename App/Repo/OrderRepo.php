<?php

namespace App\Repo;

use App\Models\Order;

class OrderRepo extends BaseRepo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrder($date, $userid)
    {
        $order = new Order($date, $userid);
        return $order;
    }

    public function insertOrder($order)
    {
        var_dump($order->date, $order->userid);
        $sql = "INSERT INTO orders (userid, date) VALUES (?,?)";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array($order->date, $order->userid));
        return $response;
    }

    public function getCurrOrderId($userid)
    {
        $sql = 'SELECT orderid from orders where userid =' + $userid;
        $response = self::$bdd->query($sql);
        $data = $response->fetchAll();
        return $data;
    }
}
