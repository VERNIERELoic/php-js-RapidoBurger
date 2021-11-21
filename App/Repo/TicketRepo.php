<?php

namespace App\Repo;


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

        $burger = $burgerrepo->setBurger(
            $_POST['pain'],
            $_POST['legumes'],
            $_POST['steakveg'],
            $_POST['saucemaison'],
            $userid
        );

        $burgerrepo->insertBurger($burger, $userid); #make sql request to insert burger in bdd

        return $order;
    }
}
