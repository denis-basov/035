<?php
// FRONT CONTROLLER
// echo $_SERVER['REQUEST_URI'];

// 1. Общие настройки
ini_set('display_errors', '1');
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', dirname(__FILE__)); // определяем константу с корнем проекта
//echo ROOT;

require ROOT . '/components/Debug.php';
require ROOT . '/components/Router.php';

// Вызываем методы класса Router
$newRout = new Router();
//Debug::d($newRout);
$newRout->run();

