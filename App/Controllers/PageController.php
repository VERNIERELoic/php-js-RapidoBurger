<?php

namespace App\Controllers;

use App\Models\Order;
use App\Renderer;
use App\Repo\OrderRepo;

class PageController extends Controller
{
    public function viewHome()
    {

        echo Renderer::render("home.php");
        return;
    }
    public function viewLogin()
    {

        echo Renderer::render("login.php", ['error' => false]);
        return;
    }
    public function viewRegister()
    {
        echo Renderer::render("register.php");
        return;
    }
    public function viewForgot()
    {
        echo Renderer::render("forgot.php");
        return;
    }

    public function viewOrder()
    {
        if ($_SESSION['username']) {
            echo Renderer::render("order.php");
        }
        return;
    }

    public function viewResetpsswd()
    {
        echo Renderer::render("resetpsswd.php");
        return;
    }

    public function viewModify()
    {
        echo Renderer::render("modify.php");
        return;
    }

    public function viewOrderlist()
    {
        $orderrepo = new OrderRepo();
        $orderinfo = $orderrepo->getOders();
        echo Renderer::render("orderlist.php", compact('orderinfo'));
        return;
    }
}
