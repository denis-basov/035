<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

$numbers = [1, 2, 3, 4, 5];
$arr = [1, 5, true, false, null, 'hello', [4,5,6]];

//d($numbers);
//echo $arr[6];

//$days = [1 => 'пн', 2 => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс'];
$days = [1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
// let days = {1:'пн', 2:'вт', 3:'ср', 4:'чт', 5:'пт', 6:'сб', 7:'вс'};
//d($days);
//d($numbers);

$users = ['user1' => 'Ivan', 'user2' => 'Anna', 'user3' => 'Sergey'];
//d($users);

$user = ['name' => 'Ivan', 'avto' => 'Ford', 'age' => 30];
//d($user);
//echo $user['name'];
//echo $user['age'];

$hobby=['Лепка','Рисование','Танцы','Спорт','Путешествия'];
//d($hobby);

// длина массива
// echo count($arr);
// $arrLen = count($hobby);
// echo $arrLen;
// echo $hobby[$arrLen-1];

//$days[5] = 'вс';
//$days[0] = 'пн';
//$days[9] = 'ср';
//
//d($days);

//$nums = [4,7];
//$nums[] = 10;
//$nums[] = 20;
//$nums[] = 50;
//$nums['dates'] = [10,11,12];
//d($nums);

$carsDB = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];

d($carsDB);