<?php

namespace App\Connection;

class Databaseconnection
{
  private static $dbhost = "127.0.0.1";
  private static $dbname = "rapido";
  private static $dbuser = "loic";
  private static $dbpass = "toor";

  private static $bdd;

  public static function getConnection()
  {
    if (is_null(self::$bdd)) {
      try {
        self::$bdd = new \PDO("mysql:host=" . self::$dbhost . ";dbname=" . self::$dbname, self::$dbuser, self::$dbpass, array(
          \PDO::ATTR_PERSISTENT => true
        ));
        return self::$bdd;
      } catch (\Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
    }
  }
}
