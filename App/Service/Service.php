<?php

namespace App\Service;

use App\Connection\Databaseconnection;

abstract class Service
{

    # This class is used for share bdd access to other repo class
    protected static $bdd = NULL;

    public function __construct()
    {
        $connection = new Databaseconnection();
        self::$bdd = $connection->getConnection();
    }


}
