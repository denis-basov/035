<?php
// страница просмотра одного автора

require '../DBConnect.php';
$pdo = DBConnect::getConnection();

//DBConnect::d($_GET);
$id = (int)$_GET['id']; // забираем ID из массива $_GET

// 1. Запрос к БД на получение одного автора по ID
// 2. Подготовка запроса
// 3. Выполнение подготовленного запроса
// 4. Извлечение данных из объекта в переменную
$query= "SELECT first_name,last_name,age,country,avatar
					FROM authors
					WHERE id = ?;";

$result = $pdo->prepare($query);
$result->execute([$id]);
$author_detail = $result->fetch();
//DBConnect::d($author_detail);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$author_detail['first_name']?> <?=$author_detail['last_name']?></title>
	<style>
		.author_detail{
				width: 800px;
				margin: auto;
				padding: 50px;
				background: #eaeaea;
				display: flex;
				flex-direction: column;
				align-items: center;
		}
    .author_detail img{
				width: 50%;
		}
	</style>
</head>
<body>

	<div class="author_detail">
		<h1>Имя: <?=$author_detail['first_name']?></h1>
		<h2>Фамилия: <?=$author_detail['last_name']?></h2>
		<img src="../<?=$author_detail['avatar']?>" alt="<?=$author_detail['first_name']?>
		<?=$author_detail['last_name']?>">
		<p>Возраст: <?=$author_detail['age']?></p>
		<p>Страна проживания: <?=$author_detail['country']?></p>
		<a href="../index.php">Главная страница</a>
		<a href="news.php">К списку новостей</a>
	</div>

</body>
</html>

