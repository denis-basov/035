<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

class Animals {
	public $name;
	public $type;
	public $weight;

	public function getInfo() {
		echo "<p>Животное: $this->type, зовут $this->name, весит $this->weight.</p>";
	}

	public function __construct($par_name, $par_type, $par_weight) {
		$this->name = $par_name;
		$this->type = $par_type;
		$this->weight = $par_weight;
	}
}

$cat = new Animals('Буся', 'Кот', 6);
$dog = new Animals('Шарик', 'Собака', 12);

$cat->getInfo();
$dog->getInfo();


class Animal{
	public $name;
	public $habitat;
	public $vid;

	public function getInfo(){
		echo '<h3>Животное :' . $this->name . '. Обитает в ' . $this->habitat . ' . Относиться к классу : ' . $this->vid . '</h3>';
	}
	public function __construct($nameP, $habitatP, $vidP){
		$this->name= $nameP;
		$this->habitat= $habitatP;
		$this->vid= $vidP;
	}
}
$piton=new Animal("Питон"," Джунгли ","Змеи");
$piton->getInfo();


/*
class Turtle
{
	public $height;
	public $weight;
	public $skincolor;
	public $GPSlocation;
	private $fictional = 'true';
	function getInfo()
	{
		$addedName = null;
		echo "<style>
.square {
height: 20px;
width: 20px;
background-color: $this->skincolor;
}</style>";
		if ($this->fictional) {
			$addedName = "Ненастоящая";
		} else {
			$addedName = "Существующая";
		};
		echo "$addedName букашка ростом $this->height, весом $this->weight,
цветом <div class='square'></div>. Местонахождение $this->GPSlocation.";
		echo '<hr>';
	}
}
$NinjaTurtle = new Turtle();
$NinjaTurtle->height = 1.8;
$NinjaTurtle->weight = 180;
$NinjaTurtle->skincolor = "green";
$NinjaTurtle->GPSlocation = "35,6895 северной широты и 139,692 восточной долготы";
$NinjaTurtle->getInfo();
*/
class Turtle {
	public $height;
	public $weight;
	public $skincolor;
	public $GPSlocation;
	private $fictional;

	public function __construct($height, $weight, $skincolor, $GPSlocation){
		$this->height = $height;
		$this->weight = $weight;
		$this->skincolor = $skincolor;
		$this->GPSlocation = $GPSlocation;
		$this->fictional = 1;
	}
	public function getInfo(){
		d($this);
	}
}
$test = new Turtle (10,20,'green',526);
$test->getInfo();



Class Frogs {
	public $name;
	public $color;
	public $region;
	public $size;

	public function getInfo(){
		echo "<h3>Название: $this->name, цвет: $this->color, Регион обитания: $this->region, Размер: $this->size</h3>";
	}
	public function __construct($par_name, $par_color, $par_region, $par_size){
		$this->name = $par_name;
		$this->color = $par_color;
		$this->region = $par_region;
		$this->size = $par_size;
	}

}
$Aga = new Frogs('Ага', 'Серый', 'Южная Америка', 'Большой');
$Aga->getInfo();
$toad = new Frogs('Жаба', 'Зеленый', 'Везде', 'Средний');
$toad->getInfo();

/*
class Animal{
	public $name;
	public $type;
	public $weight;
	public $skincolor;
	public $whatHeEats;

	public function infoAnimal(){
		echo "<h2>Имя животного: $this->name, Тип: $this->type, Вес: $this->weight, Цвет: $this->skincolor, Что ест: $this->whatHeEats </h2>";
	}
	public function __construct($ani_name, $ani_type, $ani_weight, $ani_skincolor, $ani_whatHeEats){
		$this->name = $ani_name;
		$this->type = $ani_type;
		$this->weight = $ani_weight;
		$this->skincolor = $ani_skincolor;
		$this->whatHeEats = $ani_whatHeEats;
	}
}

$tiger = new Animal('Reks','Млекопитающие', 220, 'orange', 'Дичь');
$tiger->infoAnimal();

$snake = new Animal('Снупи', 'Рептилия', 5, 'черный', 'Тигра');
$snake->infoAnimal();
*/

class hoursSpend
{
	public $ReadingHomeAlone;
	public $Working;
	public $OnChildren;
	public $GoodDeedsTime;
	public $EvilDeedsTime;
	public $TalkWithLovedOnes;
	public $LearningSmthExtrmlyValuebale;
	public $DoingNothing;

	function getInfo()
	{
		$addedName = null;
		echo "
			<p><strong>Time spend:</strong></p>
			<ul style='list-style-type:circle'>
			<li>Чтение всякой ерунды: $this->ReadingHomeAlone h</li>
			<li>Работа на хлеб: $this->Working h</li>
			<li>Воспитание: $this->OnChildren h</li>
			<li>Полезные дела: $this->GoodDeedsTime h</li>
			<li>Бесполезные дела: $this->EvilDeedsTime h</li>
			<li>Разговоры с любимыми: $this->TalkWithLovedOnes h</li>
			<li>Учеба хорошему: $this->LearningSmthExtrmlyValuebale h</li>
			<li>Учеба плохому: $this->DoingNothing h</li>
			</ul>
			<hr>";
	}
	public function __construct($arr)
	{
		$this->ReadingHomeAlone = $arr[0] ;
		$this->Working = $arr[1] ;
		$this->OnChildren = $arr[2] ;
		$this->GoodDeedsTime = $arr[3] ;
		$this->EvilDeedsTime = $arr[4] ;
		$this->TalkWithLovedOnes = $arr[5] ;
		$this->LearningSmthExtrmlyValuebale = $arr[6] ;
		$this->DoingNothing = $arr[7] ;
	}
}

$MyTableWeek = new hoursSpend([12,4,2,6,23,34,26,37]);
$MyTableWeek->getInfo();