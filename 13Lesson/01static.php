<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 09.06.2018
 * Time: 12:39
 */

class DbConnection{
  static protected $dbConnectionCounter = 0;

  public static function createDbConnection(){
    if(self::$dbConnectionCounter >=5) {
      return null;
    }
    self::$dbConnectionCounter++;
    return new DbConnection();
  }

  protected function __construct()
  {
  }

  public function __destruct()
  {
    self::$dbConnectionCounter--;
  }

  /*
    .....
    .....
    .....
   */
}


$a = new DbConnection();
$b = DbConnection::createDbConnection();
$b1 = $b;
$b2 = $b;

$b2 = null;
$b1 = null;
$b = null;