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
 * родительский класс Dog
 */
class Dog{
	// свойства
	protected $name;
	protected $age;
	protected $weight;
	protected $color;

	// методы
	public function __construct($name, $age, $weight, $color){
		$this->name = $name;
		$this->age = $age;
		$this->weight = $weight;
		$this->color = $color;
	}

	public function getSummary(){ // метод для отображения свойств текущего объекта
		echo <<<_HTML
			<div class="dog">
				<h3>Кличка собаки: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
			</div>
_HTML;
	}

	public function getBasicInfo(){
		echo <<<_HTML
			<div class="basic-dog">
				<h3>Кличка собаки: $this->name</h3>
				<p>Возраст: $this->age</p>
			</div>
_HTML;
	}

}// class Dog

// объекты класса Dog
$bobik = new Dog('Бобик', 4, 12, 'Белый');
$strelka = new Dog('Стрелка', 2, 6, 'Серый');

//echo $bobik->color = "red";
$bobik->getSummary();

//$strelka->getSummary();
//
//$bobik->getBasicInfo();
//$strelka->getBasicInfo();


/**
 * дочерний класс гончих собак, родитель - Dog
 */
class RaceDog extends Dog{
	private $speed; // уникальное свойство дочернего класса

	public function __construct($name, $age, $weight, $color, $speed){
		parent::__construct($name, $age, $weight, $color);
		$this->speed = $speed;
	}

	public function getSummary(){ // метод для отображения свойств текущего объекта
		echo <<<_HTML
			<div class="dog">
				<h3>Кличка собаки: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
				<p>Скорость: $this->speed</p>
			</div>
_HTML;
	}

	public function getColor(){
		echo "Цвет: $this->color";
	}
}

$belka = new RaceDog('Белка', 5, 3, 'Рыжий', 90);
$belka->getSummary();
//$belka->getColor();
//$belka->color;

/**
 * дочерний класс выставочных собак - родитель Dog
 */
class ExDod extends Dog{
	private $breed; // порода - уникальное свойство выставочных собак

	public function __construct($name, $age, $weight, $color, $breed)
	{
		parent::__construct($name, $age, $weight, $color);
		$this->breed = $breed;
	}

	public function getSummary(){ // метод для отображения свойств текущего объекта
		echo <<<_HTML
			<div class="dog">
				<h3>Кличка собаки: $this->name</h3>
				<p>Возраст: $this->age лет</p>
				<p>Вес: $this->weight кг</p>
				<p>Цвет шерсти: $this->color</p>
				<p>Порода: $this->breed</p>
			</div>
_HTML;
	}

}

$vasilek = new ExDod('Василёк', 4, 6, 'Чёрный', 'Пудель');
$vasilek->getSummary();

















