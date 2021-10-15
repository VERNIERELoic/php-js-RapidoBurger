<?php
namespace App\Models;
include("../connection/db_connect.php");

class Burger
{
    private $bred;
    private $veg;
    private $sauce;
    private $meet;

    public function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

}
