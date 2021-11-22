<?php

namespace App\Models;

class Burger
{
    public $pain;
    public $legumes;
    public $steakveg;
    public $saucemaison;
    public $orderid;
    

    public function __construct($pain, $legumes, $steakveg, $saucemaison, $orderid)
    {
        $this->pain = $pain;
        $this->legumes = $legumes;
        $this->steakveg = $steakveg;
        $this->saucemaison = $saucemaison;
        $this->orderid = $orderid;
    }
}