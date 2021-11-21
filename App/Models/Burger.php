<?php

namespace App\Models;

class Burger
{
    private $pain;
    private $legumes;
    private $steakveg;
    private $saucemaison;
    private $orderid;
    

    public function __construct($pain, $legumes, $steakveg, $saucemaison, $orderid)
    {
        $this->pain = $pain;
        $this->legumes = $legumes;
        $this->steakveg = $steakveg;
        $this->saucemaison = $saucemaison;
        $this->orderid = $orderid;
    }
}