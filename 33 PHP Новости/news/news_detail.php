<?php
// news_detail.php - страница просмотра одной новости детально
require '../DBConnect.php';
$pdo = DBConnect::getConnection();

//DBConnect::d($_GET);
$id = (int)$_GET['id']; // забираем ID из массива $_GET

// запрос на выборку полных данных о новости и авторе
$query = "SELECT news.id AS news_id, category, title, full_text, news_image, add_date,
					authors.id AS author_id, first_name, last_name, age, country, avatar
					FROM news, authors
					WHERE news.author_id = authors.id
					AND news.id = ?;";

// 1. Подготовка запроса
$result = $pdo->prepare($query);
// 2. Выполнение запроса
$result->execute([$id]);

//DBConnect::d($result->fetch());
$news_data = $result->fetch();

// заменяем переносы строк на параграфы
// <p>Тото Вольфф говорил о задачах на этап…</p><p>Тото Вольфф: «Уик-энд в Баку был сложным.</p>
// \r\n\r\n </p><p>
$news_data['full_text'] = str_replace("\r\n\r\n", '</p><p>', $news_data['full_text']);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$news_data['title']?></title>
	<style>
		.news_block{
				max-width: 1200px;
				background: aliceblue;
				margin: auto;
				padding: 20px 40px;
				display: flex;
				gap: 20px;
		}
	</style>
</head>
<body>
	<div class="news_block">
		<div class="news">
			<h1><?=$news_data['title']?></h1>
			<img src="../<?=$news_data['news_image']?>" alt="<?=$news_data['title']?>">
			<p>Категория: <span><?=$news_data['category']?></span></p>
			<div class="full_text">
				<p><?=$news_data['full_text']?></p>
			</div>
			<p>Дата публикации: <span><?=$news_data['add_date']?></span></p>
		</div>
		<div class="author">
			<img src="../<?=$news_data['avatar']?>" alt="<?=$news_data['last_name']?>">
			<p><?=$news_data['first_name']?> <?=$news_data['last_name']?></p>
			<p>Возраст: <span><?=$news_data['age']?></span></p>
			<p>Страна проживания: <span><?=$news_data['country']?></span></p>
		</div>
	</div>
</body>
</html>




