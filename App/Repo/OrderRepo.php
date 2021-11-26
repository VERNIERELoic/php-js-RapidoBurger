<?php

namespace App\Repo;

use App\Models\Order;

class OrderRepo extends BaseRepo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function setOrder($userid, $date, $orderid = 0)
    {
        $order = new Order($date, $userid, $orderid);
        return $order;
    }

    public function getOders($status = 0)
    {
        $sql = "SELECT o.orderid, 
                    o.date 
                    u.username,
                    b.pain,
                    b.legumes,
                    b.steakveg,
                    b.saucemaison,
        from users as u
        inner join orders as s on u.id = o.userid
        inner join burger as b on o.orderid = b.orderid
        where status = ? 
        order by date(date) desc";

        $req = self::$bdd->prepare($sql);
        $req->execute(array($status));
        $response = $req->fetchAll();
        return $response;
    }

    public function insertOrder($order)
    {
        $sql = "INSERT INTO orders (userid, date) VALUES (?,?)";
        $req = self::$bdd->prepare($sql);
        $response = $req->execute(array(intval($order->userid), $order->date));
        return $response;
    }

    public function getCurrOrderId($userid)
    {
        $sql = "SELECT orderid from orders where userid = ? order by orderid desc";
        $req = self::$bdd->prepare($sql);
        $req->execute(array($userid));
        $response = $req->fetch();
        return $response['orderid'];
    }
}
