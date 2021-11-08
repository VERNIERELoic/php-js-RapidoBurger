<?php

namespace App\Repo;

use App\Connection\Databaseconnection;

abstract class BaseRepo
{

    protected $bdd;

    public function __construct()
    {
        $connection = new Databaseconnection();
        $bdd = $connection->getConnection();
        return $bdd;
    }
}
