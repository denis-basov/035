<?php


class Debug
{
	public static function d($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
	}

	public static function dd($arr){
		echo '<pre>';
		print_r($arr);
		echo '</pre>';
		die('Дальнейший вывод заблокирован!');
	}
}