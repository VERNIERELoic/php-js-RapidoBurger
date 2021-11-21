<?php

namespace App\Controllers;

use App\Renderer;
use App\Repo\AuthRepo;
use App\Repo\TicketRepo;
use APP\Controllers\PageController;


class OrderController extends Controller
{

    public function order()
    {
        $ticket = new TicketRepo();
        $ticket->registeBurger();
        echo Renderer::render("prepared.php");
        sleep(5);
        echo Renderer::render("home.php");
        return;
    }
}
