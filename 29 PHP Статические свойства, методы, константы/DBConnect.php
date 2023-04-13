<?php

// статические свойства и методы - обращение к свойствам и методам без создания объекта класса
class DBConnect
{
	// свойства для подключения к бд
	private static $dbName = 'test';
	private static $dbHost = 'localhost';
	private static $dbLogin = 'root';
	private static $dbPassword = '';


	// приватный метод для формирования DSN
	private static function getDSN(){
		return "mysql:host=".self::$dbHost.";dbname=".self::$dbName;
	}

	// метод для получения доступа к БД
	public static function getConnection(){
		return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword);
		//return new PDO('mysql:host=localhost;dbname=test', $user, $pass);
	}

}

/*
$pdo = DBConnect::getConnection(); // вызов статического метода в контексте класса
d($pdo);
// echo DBConnect::$dbName; // обращение к статическому свойству в контексте класса

*/