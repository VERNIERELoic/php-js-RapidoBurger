<?php

namespace App\Repo;

use Connection\Databaseconnection;

class UserRepo
{

    protected $bdd;

    public function __construct()
    {
    }

    public function initConnection()
    {
        $connection = new ConnectionDatabaseconnection();
        $bdd = $connection->getConnection();
        return $bdd;
    }
}
