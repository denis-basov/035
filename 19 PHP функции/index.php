<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// пользовательские функции
//function greet(){
//	echo 'Hello, summer';
//}
//greet();

//function greetUser($userName, $age){
//	echo "<h3>Привет, $userName. Ваш возраст: $age лет.</h3>";
//}
//
//greetUser('Иван', 11);

//function sum($num1, $num2) {
//	$res = $num1 + $num2;
//	echo "<p>Сумма числе равна $res.</p>";
//}
//sum(5, 11);
//sum(43, 66);

//function testSum($num1, $num2) {
//	$result = $num1 * $num2;
//	echo "<h2>Сумма числе равна $result.</h2>";
//}
//testSum(10, 22);


//function greetUser($userName, $phone = '123456789'){
//	echo "<h3>Привет, $userName. Ваш телефон: $phone</h3>";
//}
//
//greetUser('Иван', '157894578');

//function clientInfo($nameClient, $index) {
////	$index = (string)$index;
//	$length = strlen((string)$index);
//
//	if ($length !== 6 ) {
//		echo "<p>Указан некорректный индекс</p>";
//	} else {
//		echo "<p>Имя клиента: $nameClient. Почтовый индекс: $index.</p>";
//	}
//}
//clientInfo('Иван', 123456);

//function indexUser ($userName, $index){
//	if (strlen((string)$index)==6){
//		echo "<h3>$userName, Ваш индекс: $index</h3>";
//	}
//	else{
//		echo "<h3> $userName, $index указан некорректно";
//	}
//}
//
//indexUser('Марина', 123456);

// array_filter
//$numbers = [1,2,3,4,5,6,7,8,9];
//
//function userCallBack($num){
//	if($num % 2 === 1){
//		return true;
//	}else{
//		return false;
//	}
//}
//
//$res = array_filter($numbers, 'userCallBack');
//d($res);
//
//
//for($i = 0; $i < count($numbers); $i += 2){
//	echo "<p>Число: $res[$i]</p>";
//}

// return
//function indexUser ($userName, $index){
//	$result = '';
//	if (strlen((string)$index)==6){
//		$result = "<h3>$userName, Ваш индекс: $index</h3>";
//	}else{
//		$result = "<h3 class='error'> $userName, $index указан некорректно</h3>";
//	}
//	return $result;
//}
//
//$res = indexUser('Марина', 123456);
//
//echo $res;


// область видимости

// глобальные переменные в функции недоступны
//$num1 = 4;
//$num2 = 8;
//
//function sum(){
//	echo "Сумма: ".$num1 + $num2;
//}
//
//sum();

// 1
//function sum($num1, $num2){
//	echo "Сумма: ".$num1 + $num2;
//}
//sum(4, 8);

// 2
//$userName = 'Ivan';
//$numbers = [1,2,3,4,5,6,7,8,9];
//
//
//function sayHello(){
//	echo 'Hello, ' . $GLOBALS['userName'];
//  echo "<br>Первый элемент массива: " . $GLOBALS['numbers'][0];
//}
//
//sayHello();
////d($GLOBALS);
