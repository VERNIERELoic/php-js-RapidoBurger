<?php

namespace App\Controllers;

use App\Service\TicketService;
use App\Renderer;



class OrderController extends Controller
{

    public function order()
    {
        var_dump($_POST);
        $ticket = new TicketService();
        $orderid = $ticket->registeBurger();
        echo Renderer::render("prepared.php", compact(('orderid')));
        return;
    }
}
