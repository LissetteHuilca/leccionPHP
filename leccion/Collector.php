<?php
include_once('baseDatos.php');

// Define configuration
define("DB_HOST", "localhost");
define("DB_USER", "postgres");
define("DB_PASS", "postgres");
define("DB_NAME", "usuario");


class Collector extends baseDatos
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new baseDatos($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
