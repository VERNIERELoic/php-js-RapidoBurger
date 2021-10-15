<?php

namespace App\Connection;

class Databaseconnection
{
  private $dbhost = "127.0.0.1";
  private $dbname = "rapido";
  private $dbuser = "loic";
  private $dbpass = "toor";

  public function getConnection()
  {
    try {
      $bdd = new \PDO("mysql:host=$this->dbhost;dbname=$this->dbname", $this->dbuser, $this->dbpass, array(
        \PDO::ATTR_PERSISTENT => true
      ));
      return $bdd;
    } catch (\Exception $e) {
      die('Erreur : ' . $e->getMessage());
    }
  }
}
