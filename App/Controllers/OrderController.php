<?php

namespace App\Controllers;

use App\Renderer;
use App\Repo\TicketRepo;
use APP\Controllers\PageController;


class OrderController extends Controller
{

    public function order()
    {
        var_dump($_POST);
        $ticket = new TicketRepo();
        $ticket->registeBurger();
        //echo Renderer::render("prepared.php");
        return;
    }
}
