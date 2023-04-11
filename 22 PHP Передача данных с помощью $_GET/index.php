<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
d($_GET);

$userName = 'Анна';
echo "Привет, $userName!";

echo "<a href='news.php?userName=$userName'>Новости</a>";

// news.php?userName=Иван
// http://localhost/news.php?userName=%D0%98%D0%B2%D0%B0%D0%BD
echo '<hr>';

$carMaker = 'Ferrari';
$carModel = 'F50';

echo "Производитель автомобиля: $carMaker";
echo "<br>";
echo "Марка модели: $carModel";
echo "<br>";

echo "<a href='catalog.php?carMaker=$carMaker&carModel=$carModel'>Производитель и марка</a>";
