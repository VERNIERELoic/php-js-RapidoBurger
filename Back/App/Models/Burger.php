<?php
namespace App\Models;
require_once("../connection/db_connect.php");

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
