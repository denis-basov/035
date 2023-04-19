<?php
/**
 * Class DBConnectConst
 * производит подключение к базе данных
 */

class DBConnectConst
{
	// константы класса
	const DB_NAME = 'test';
	const DB_HOST = 'localhost';
	const DB_LOGIN = 'root';
	const DB_PASSWORD = '';

	// приватный метод для формирования DSN
	private static function getDSN(){
		return "mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME;
	}

	// метод для получения доступа к БД
	public static function getConnection(){
		return new PDO(self::getDSN(), self::DB_LOGIN, self::DB_PASSWORD );
	}
}


//
//define(DB_NAME, 'test');
//const DB_NAME = 'test';
// echo DBConnectConst::DB_PASSWORD;