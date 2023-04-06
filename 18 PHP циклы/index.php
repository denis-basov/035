<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// echo 1 . 2;

// циклы

// while
//$i = 0;
//while($i < 10){
//	echo "<p>$i</p>";
//	$i++;
//}

// for
//for($i = 0; $i < 10; $i++){
//	echo "<p>$i</p>";
//}
/*
1 задание
выведите в документ числа от 35 до 0 с шагом 5
*/
//$i=35;
//while (!$i==0){ // пока i не равна нулю
//	echo $i . "<br>";
//	$i=$i-5;
//}

//for ($i = 35; $i >= 0; $i-=5) {
//	echo '<i>' . $i . '</i><br>';
//}

//for($j = 35; $j >= 0; $j = ($j - 5)) {
//	echo "<p>$j</p>";
//}

// получить сумму чисел от 1 до 20
//$res = 0;
//for($i = 1; $i <= 20; $i++){
//	$res += $i;
//}
//echo "<h2>Сумма чисел от 1 до 20: $res</h2>";

// foreach
$numbers = [1, 2, 3, 4, 5];

//foreach ($numbers as $number){
//	echo "<p>$number</p>";
//}

// $days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//foreach ($days as $day){
//	echo "<p >День недели: $day </p>";
//}

//foreach ($days as $day){
//	echo "<p>$day</p>";
//}

// получить сумму элементов массива $numbers = [1, 2, 3, 4, 5];
//$res = 0;
//foreach ($numbers as $number){
//	$res += $number;
//}
//echo $res;

$user = ['name' => 'Ivan', 'avto' => 'Ford', 'age' => 30];

//foreach ($user as $key => $value){
//	echo "Ключ: $key. Значение: $value.<br>";
//}
//d($user);

// 3 задание
// $days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
// выведите в документ строки по шаблону:
// "День №1 - пн"
// "День №2 - вт"
// если пятница, то дополнительно должна быть строка:
// "Ура, скоро выходные"

// 1
//$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
//foreach ($days as $key => $value){
//	echo "День №$key => $value", "<br>";
//	if($value == 'ср'){
//		echo 'Ура, скоро выходные', "<br>";
//	}
//}

// 2
//foreach ($days as $key=>$value){
//	$nun=$key+1;
//	if( $value=='пт') {
//		echo "<p >День N$nun: $value Ура, скоро выходные!</p>";
//	}else{
//		echo "<p >День N$nun: $value </p>";
//	}
//}

// 3
//foreach ($days as $key => $value) {
//	if($value === 'пт') {
//		echo "День № $key - $value. Ура, скоро выходные!<br>";
//	} else {
//		echo "День № $key - $value<br>";
//	}
//}

// 4
//foreach ($days as $key => $day) {
//	# code... {
//	echo 'День №' . $key + 1 . ' -' . $day . "<br>";
//	if ($key + 1 == 5) {
//		echo 'Скоро. Совсем скоро. готовьс, цельсь, ..' . "<br>";
//	}
//};

// 4 задание

$carsDB = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
// сформируйте разметку и выведите в документ через цикл информацию о всех авто


// флаги
$days = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$flag = false;

foreach ($days as $day){
	echo "$day <br>";
	if($day === 'пт'){
		$flag = true;
		echo 'Пятница есть' . '<br>';
		break;
	}
}

if($flag){
	echo "Элемент в массиве есть";
}else{
	echo "Элемент не найден";
}

