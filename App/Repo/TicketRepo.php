<?php

namespace App\Repo;

use App\Repo\OrderRepo;
use App\Repo\BurgerRepo;


class TicketRepo extends BaseRepo
{

    public function __construct()
    {
        parent::__construct();
    }

    public function registeBurger()
    {
        session_start();
        $userid = $_SESSION['id'];
        $date = date("m.d.y");


        $burgerrepo = new BurgerRepo();
        $orderrepo = new OrderRepo();

        $order = $orderrepo->setOrder($date, $userid);
        $orderrepo->insertOrder($order);
        $orderid = $orderrepo->getCurrOrderId($userid);

        $burger = $burgerrepo->setBurger(
            $_POST['pain'],
            $_POST['legumes'],
            $_POST['steakveg'],
            $_POST['saucemaison'],
            $orderid
        );
        $burgerrepo->insertBurger($burger, $orderid); #make sql request to insert burger in bdd

        return $order;
    }
}
