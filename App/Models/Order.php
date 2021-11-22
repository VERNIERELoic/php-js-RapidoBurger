<?php

namespace App\Models;

class Order
{
    public $date;
    public $userid;
    

    public function __construct($date, $userid)
    {
        $this->date = $date;
        $this->userid = $userid;
    }
}