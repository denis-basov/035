<?php


class Router
{
  private $routes;// свойство для хранения маршрутов

  /**
   * Получаем массив с маршрутами
   */
  public function __construct(){
    $routesPath = ROOT . '/config/routes.php';
    $this->routes = require $routesPath;
  }

  /**
   * получаем URI
   */
  private function getUri(){
    if(!empty($_SERVER['REQUEST_URI'])){
      return trim($_SERVER['REQUEST_URI'], '/');
    }
  }


  public function run(){

    // получаем строку запроса
    $uri = $this->getUri();

    // перебираем массив с маршрутами
    foreach ($this->routes as $uriPattern => $path) {

      // если есть совпадение ключа в массиве и строки запроса
      if(preg_match("#$uriPattern#", $uri)){

//				Debug::d("#$uriPattern#");
//				Debug::d($uri);
//				Debug::d($path);

        // получаем внутренний маршрут подставляя из строки запроса данные в значение текущего маршрута
        // ищем подстроки по шаблону "#$uriPattern#" в строке $uri и подставляем в $path
        // "#$uriPattern#" - #news/([0-9]+)#, $uri - news/12, $path - news/view/$1, результат - news/view/12
        $internalRoute = preg_replace("#$uriPattern#", $path, $uri);

//				Debug::d($internalRoute);
        // разделяем строку на массив по "/"
        $segments = explode('/', $internalRoute);

        // определяем название контроллера, который нужно подключить
        $controllerName = ucfirst( array_shift($segments) ) . 'Controller';
        // определяем какой метод будет обрабатывать запрос
        $actionName = 'action' . ucfirst( array_shift($segments) );
        // если остались другие данные в строке запроса, кладем в массив с параметрами
        $parameters = &$segments;

//        Debug::d($controllerName);
//				Debug::d($actionName);
//				Debug::d($parameters);
//        die();

        // подключаем контроллер
        $controllerFile = ROOT . "/controllers/$controllerName.php";
        if(file_exists($controllerFile)){
          require $controllerFile;
        }

        // создаем объект нужного контроллера, вызываем метод
        $controllerObject = new $controllerName();
        $result = $controllerObject->$actionName(...$parameters);

        if($result){ // если метод сработал
          break;// прерываем цикл перебора маршрутов
        }

      }// if
    }// foreach
  }// run()

}