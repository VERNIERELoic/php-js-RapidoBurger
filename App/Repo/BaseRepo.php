<?php

namespace App\Repo;

use App\Connection\Databaseconnection;

abstract class BaseRepo
{

    # This class is used for share bdd access to other repo class
    protected static $bdd = NULL;

    public function __construct()
    {
        $connection = new Databaseconnection();
        self::$bdd = $connection->getConnection();
    }


}
