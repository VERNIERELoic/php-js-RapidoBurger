<?php

namespace App\Models;

class Order
{
    public $date;
    public $userid;
    public $orderid;
    

    public function __construct($date, $userid, $orderid)
    {
        $this->date = $date;
        $this->userid = $userid;
        $this->orderid = $orderid;
    }
}