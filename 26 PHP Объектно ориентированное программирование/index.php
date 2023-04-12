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

/**
 * класс Cars
 */
class Cars{ // шаблон
	// свойства класса (переменные)
	public $color;
	public $model;
	public $weight;

	// методы класса (функции)
	public function getInfo(){
		echo "<h3>Авто, модель: $this->model, цвет: $this->color, вес: $this->weight кг.</h3>";
	}

	// метод конструктор - вызывается автоматически при создании объекта
	public function __construct($par_color, $par_model, $par_weight){
		// записать значения, переданные конструктору в свойства текущего объекта
		$this->color = $par_color;
		$this->model = $par_model;
		$this->weight = $par_weight;
	}
}

// создаем объекты
$volvo = new Cars('Серебристый', 'S90', 1270);
/*
// записываем значения в свойства объекта
$volvo->color = 'Серебристый';
$volvo->model = 'S90';
$volvo->weight = 1270;
*/
// вызываем метод объекта вольво
$volvo->getInfo();

// второй объект класса Cars
$lada = new Cars('Зеленый', '2101', 950);
/*
$lada->color = 'Зеленый';
$lada->model = '2101';
$lada->weight = 950;
*/
$lada->getInfo();

$vaz = new Cars('Синий', '2105', 1100);
$vaz->getInfo();




