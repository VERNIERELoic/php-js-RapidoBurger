<?php

namespace App\Service;

use App\Repo\OrderRepo;
use App\Repo\BurgerRepo;


class TicketService extends Service
{

    public function __construct()
    {
        parent::__construct();
    }

    public function registeBurger()
    {
        $userid = $_SESSION['id'];
        $date = date("Y-m-d");


        $burgerrepo = new BurgerRepo();
        $orderrepo = new OrderRepo();

        
        $order = $orderrepo->setOrder($userid, $date);
        $orderrepo->insertOrder($order);
        $orderid = $orderrepo->getCurrOrderId($userid);
        $order->orderid = $orderid;
        $burger = $burgerrepo->setBurger(
            intval($_POST['pain'] ?? 0),
            intval($_POST['legumes'] ?? 0),
            intval($_POST['steakveg'] ?? 0),
            intval($_POST['saucemaison'] ?? 0),
            $orderid
        );
        $burgerrepo->insertBurger($burger, $orderid); #make sql request to insert burger in bdd
        $mix = [$order, $burger];
        return $mix;
    }
}
