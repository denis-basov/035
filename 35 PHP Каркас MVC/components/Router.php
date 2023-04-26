<?php
/**
 * Class Router
 * класс для получения данных из строки запроса
 * и подключения нужного контроллера
 */

class Router
{
	private $routes; // свойство для хранения массива с маршрутами

	/**
	 * Получаем массив с маршрутами
	 */
	public function __construct(){
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = require $routesPath;
	}

	/**
	 * Получаем данные из строки запроса (URI)
	 */
	private function getUri(){
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI'], '/');// удаляем символы "/" с краев строки
		}
	}

	/**
	 * сравнение данных из строки запроса и массива с маршрутами
	 * при нахождении совпадения из значения конкретного элемента массива
	 * сформировать название контролера и метода в этом контролере
	 * подключить нужный контролер и вызвать нужный метод
	 */
	public function run(){
		// получаем строку запроса
		$uri = $this->getUri(); // news, shop, news/sport, shop/electronics

		// перебираем массив с маршрутами с целью найти совпадения в $uri и ключах массива
		// $uriPattern - ключи элементов массива, $path - значения
		foreach($this->routes as $uriPattern => $path){

			// проверяем совпадения ключа в массиве ($uriPattern) и строки запроса ($uri)
			if( preg_match("#$uriPattern#", $uri) ){// если есть совпадение
						echo 'Есть совпадение';
						break;

			} // if
		} // foreach
	} // run()

}