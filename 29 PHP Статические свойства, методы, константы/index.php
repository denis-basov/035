<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
// классы - шаблон
// объекты, экземпляры класса
// основные принципы ООП - Наследование, Инкапсуляция, Полиморфизм
// модификаторы доступа - private, protected, public

require 'DBConnect.php';
require 'DBConnectConst.php';

$pdo1 = DBConnect::getConnection();
d($pdo1);

$pdo2 = DBConnectConst::getConnection();
d($pdo2);










