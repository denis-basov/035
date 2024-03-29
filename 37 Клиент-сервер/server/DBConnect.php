<?php

class DBConnect
{
	// свойства для подключения к бд
	private static $dbName = '035_mini_blog';
	private static $dbHost = 'localhost';
	private static $dbLogin = 'root';
	private static $dbPassword = '';


	// приватный метод для формирования DSN
	private static function getDSN(){
		return "mysql:host=".self::$dbHost.";dbname=".self::$dbName;
	}

	// метод для получения доступа к БД
	public static function getConnection(){
		return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword,
			[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
	}

}