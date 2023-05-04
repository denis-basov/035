<?php
// FRONT CONTROLLER
//echo $_SERVER['REQUEST_URI'];

// 1 общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2 подключение файлов системы
define( 'ROOT', dirname(__FILE__) ) ;
require ROOT . '/components/Router.php';
require ROOT . '/components/Debug.php';

// 3 подключение к БД
require ROOT . '/components/Db.php';

// 4 вызов Router
$router = new Router();
$router->run();