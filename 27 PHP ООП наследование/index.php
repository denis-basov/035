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
	public $name;
	public $age;
	public $weight;
	public $color;

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

//$bobik->getSummary();
//$strelka->getSummary();
//
//$bobik->getBasicInfo();
//$strelka->getBasicInfo();


/**
 * дочерний класс гончих собак, родитель - Dog
 */
class RaceDog extends Dog{
	public $speed; // уникальное свойство дочернего класса

	public function __construct($name, $age, $weight, $color, $speed){
		parent::__construct($name, $age, $weight, $color);
		$this->speed = $speed;
	}
}

$belka = new RaceDog('Стрелка', 5, 3, 'Рыжий', 90);
$belka->getSummary();
d($belka);

















