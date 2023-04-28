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

//			echo '<p>$uriPattern: ' . $uriPattern . '</p>';
//			echo '<p>$path: ' . $path . '</p>';
//			echo '<p>$uri: ' . $uri . '</p>';
//			echo '<hr>';

			// проверяем совпадения ключа в массиве ($uriPattern) и строки запроса ($uri)
			if( preg_match("#$uriPattern#", $uri) ){// если есть совпадение
//				echo '<p>$uriPattern: ' . $uriPattern . '</p>';
//				echo '<p>$path: ' . $path . '</p>';
//				echo '<p>$uri: ' . $uri . '</p>';

				// получаем внутренний маршрут из строки запроса и значения элемента в массиве
				// ищем подстроки по шаблону "#$uriPattern#" в строке $uri и подставляем в $path
				// "#$uriPattern#" - "#news/([0-9]+)#", $uri - news/4, $path - news/view/$1
				// результат - news/view/4
				$internalRoute = preg_replace("#$uriPattern#", $path, $uri);
//				echo $internalRoute;
//				echo '<hr>';

				// разделяем маршрут на массив по "/"
				$segments = explode('/', $internalRoute);

				// формируем название контроллера, который нужно подключить
				$controllerName = ucfirst(array_shift($segments)) . 'Controller'; // NewsController

				// формируем название метода в контроллере, который будет обрабатывать запрос
				$actionName = 'action' . ucfirst(array_shift($segments)); // index -> actionIndex
				//Debug::dd($actionName);

				// если остались данные в массиве, кладем в массив с параметрами
				$parameters = &$segments;

				// подключаем нужный контроллер
				$controllerFile = ROOT . "/controllers/$controllerName.php";
				if(file_exists($controllerFile)){ // если файл есть, подключаем
					require $controllerFile;
				}

//				Debug::d($controllerName);
//				Debug::d($actionName);
//				Debug::d($parameters);

				// создаем объект нужного контроллера и вызываем нужный метод
				$controllerObject = new $controllerName(); //  new NewsController(), new ContactsController
				$result = $controllerObject->$actionName(...$parameters); // actionView(12)
				// $controllerName::$actionName(...$parameters); // если методы статические

				// если метод сработал, прерываем цикл
				if($result){
					break;
				}


			} // if
		} // foreach
	} // run()

}