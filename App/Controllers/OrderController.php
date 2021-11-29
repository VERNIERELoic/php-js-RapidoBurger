<?php

namespace App\Controllers;

use App\Service\TicketService;
use App\Renderer;



class OrderController extends Controller
{

    public function order()
    {
        $ticket = new TicketService();
        $mix = $ticket->registeBurger();
        echo Renderer::render("prepared.php", compact('mix'));
        return;
    }
}
