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
 * Абстрактные классы
 */
$publications = [
	['id' => 1, 'category' => 'SportNews', 'title' => 'Леклеру и Ferrari необходимо проявить характер', 'short_text' => 'Неудачи в нескольких гонках подряд сильно осложнили задачу Шарлю Леклеру и Ferrari, хотя ещё относительно недавно итальянская команда лидировала в обоих зачётах чемпионата', 'add_date' => '2022-06-16 16:36:48'],
	['id' => 2, 'category' => 'SportNews', 'title' => 'Гонка в Мельбурне останется в календаре до 2035 года', 'short_text' => 'Гран При Австралии будет по-прежнему проводиться в Мельбурне как минимум до 2035 года', 'add_date' => '2022-06-16 16:39:19'],
	['id' => 3, 'category' => 'SpaceNews', 'title' => 'Настало время искать околоземные астероиды в направлении Солнца', 'short_text' => 'Скотт Шеппард (Scott Sheppard), астроном из Института астрономии Гавайского университета опубликовал заметку в журнале Science, из которой следует, что сейчас научному сообществу самое время обратить пристальное внимание на околоземные объекты...', 'add_date' => '2022-07-23 18:31:50'],
	['id' => 4, 'category' => 'SpaceNews', 'title' => 'Обнаружено «недостающее звено» теории эволюции галактик', 'short_text' => 'Студентка бакалавриата Массачусетского университета в Амхерсте, США, внесла значительный вклад в развитие представлений о механизме роста звезд и черных дыр, установив характер связи между этими двумя процессами.', 'add_date' => '2022-07-23 18:49:23'],
	['id' => 5, 'category' => 'ScienceNews', 'title' => 'Патология «яйцо в яйце» впервые найдена у нептичьего динозавра', 'short_text' => 'Во время каждого сезона размножения гигантские длинношеие динозавры-зауроподы откладывали тысячи яиц, и часть из них наверняка была с серьезными отклонениями, препятствующими вылуплению детеныша', 'add_date' => '2022-07-24 18:01:48'],
	['id' => 6, 'category' => 'ScienceNews', 'title' => 'Экосистемы современного типа сформировались в триасовом периоде', 'short_text' => 'Пермо-триасовое вымирание было самым жестоким из постигших земную жизнь вымираний за всю ее долгую историю: по некоторым оценкам всего за несколько десятков тысяч лет вымерло 57% семейств и более 80% родов позвоночных.', 'add_date' => '2022-07-24 18:07:41'],
];

// абстрактный класс, экземпляр которого нельзя создать
abstract class Publications{

	public $id;
	public $category;
	public $title;
	public $short_text;
	public $add_date;

	public function __construct($row){
		$this->id = $row['id'];
		$this->category = $row['category'];
		$this->title = $row['title'];
		$this->short_text = $row['short_text'];
		$this->add_date = $row['add_date'];
	}

	public function printId(){
		echo "<h3>ID: $this->id</h3>";
	}

	// абстрактный метод, который должен быть реализован в подклассах
	abstract public function printItem();

}


// новости спорта
class SportNews extends Publications{

	public function printItem(){
		echo <<<_HTML_
			<div class="news sport-news">
				<h2>$this->title</h2>
				<p>Категория: $this->category</p>
			</div>
_HTML_;
	}

}
//$newsItem1 = new SportNews($publications[1]);
//$newsItem1->printItem();
//$newsItem1->printId();

// новости космоса
class SpaceNews extends Publications{

	public function printItem(){
		echo <<<_HTML_
			<div class="news space-news">
				<h2>$this->title</h2>
				<p>$this->short_text</p>
			</div>
_HTML_;
	}

}

// новости науки
class ScienceNews extends Publications{

	public function printItem(){
		echo <<<_HTML_
			<div class="news science-news">
				<h2>$this->title</h2>
				<p>Категория: $this->category</p>
				<p>$this->short_text</p>
				<p>Дата добавления: $this->add_date</p>
			</div>
_HTML_;
	}

}
?>
	<style>
		.news{
				border: 3px solid olive;
				margin: 10px;
		}
	</style>
<?php

// перебираем массив с массивами, формируем из каждого массива объект своего класса
// и вызываем метод printItem()
echo '<div class="news-list">';
	foreach ($publications as $publication){
		//d($publication);

		$pubObj = new $publication['category']($publication);
		//$pubObj = new SportNews($publications[0]);
		//$pubObj = new SportNews($publications[1]);
		//$pubObj = new SpaceNews($publications[2]);
		//$pubObj = new SpaceNews($publications[3]);

		$pubObj->printItem();
	}
echo '</div>';











