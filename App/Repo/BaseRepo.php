<?php

namespace App\Repo;

use App\Connection\Databaseconnection;

abstract class BaseRepo
{

    protected static $bdd;

    public function __construct()
    {
        $connection = new Databaseconnection();
        self::$bdd = $connection->getConnection();
        return self::$bdd;
    }
}
