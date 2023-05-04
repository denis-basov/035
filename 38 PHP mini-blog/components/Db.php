<?php


class Db
{
  // статические свойства класса
  private static $dbName = 'mini_blog';
  private static $dbHost = 'localhost';
  private static $dbLogin = 'root';
  private static $dbPassword = '';

  // защищенный статический метод для получения DSN
  private static function getDSN(){
    return "mysql:host=".self::$dbHost.";dbname=".self::$dbName;
  }

  // публичный статический метод для установки соединения с бд
  public static function getConnection(){
    return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
  }

}