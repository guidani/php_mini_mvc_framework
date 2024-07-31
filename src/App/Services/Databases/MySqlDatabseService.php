<?php

namespace Gdsd1\Minimvc\App\Services\Databases;

class MySqlDatabaseService
{
  public static function getConnection()
  {
    try {

      $envs = parse_ini_file(__DIR__ . "/../../../../enviroment.env", true);
      $DB_HOST = $envs['DB_HOST'];
      $DB_USER = $envs['DB_USER'];
      $DB_PASSWORD = $envs['DB_PASSWORD'];
      $PASSWORD = $envs['PASSWORD'];

      $conn = new \PDO("mysql:host=$DB_HOST;dbname=$PASSWORD;charset=utf8", $DB_USER, $DB_PASSWORD);
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      return $conn;
    } catch (\PDOException $e) {
      echo $e->getMessage();
      exit;
    }
  }
}
