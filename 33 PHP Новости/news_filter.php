<?php
// news.php - страница просмотра списка новостей
require 'DBConnect.php';
$pdo = DBConnect::getConnection();


/**
 * запрос на выборку всех категорий новостей
 */
$query = "SELECT DISTINCT `category` 
					FROM `news`;";
$result = $pdo->query($query);
$categories = $result->fetchAll();


/**
 * запрос на выборку всех новостей и авторов этих новостей
 */
// если выбрана категория, показываем новости по ней
if( isset($_POST['filter']) && $_POST['filter'] === 'category' ){
	//DBConnect::d($_POST);
	$category = htmlspecialchars(trim($_POST['category']));

	$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date, 
					authors.id AS author_id, last_name
					FROM news, authors
					WHERE news.author_id = authors.id
						AND category = ?
					ORDER BY add_date DESC;";
	$result = $pdo->prepare($query);
	$result->execute([$category]);

} else { // если категория не выбрана отображаем все новости
	$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date, 
					authors.id AS author_id, last_name
					FROM news, authors
					WHERE news.author_id = authors.id
					ORDER BY add_date DESC;";
	$result = $pdo->query($query);
}






?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Новости</title>
	<style>
      .news{
          max-width: 1200px;
          background: aliceblue;
          margin: auto;
          padding: 30px;
      }
      .news_item{
          margin: 100px 0;
          background: #ddf1ff;
          padding: 30px;
          border-radius: 10px;
      }
      .news_item .news_images{
          width: 300px;
          border-radius: 7px;
      }
      .news_item span{
          margin-right: 30px;
      }
      .news_preview{
          display: flex;
          padding: 20px 0;
          justify-content: space-around;
          gap: 20px;
      }
      .news_preview p{
          font-size: 20px;
      }
	</style>
</head>
<body>
<div class="news">
	<h1>Новости</h1>

	<!--	фильтр по категориям новостей -->
	<form action="" method="POST" class="category_select">

		<label for="category-select">Выберите категорию:</label><br>
		<select name="category" id="category-select">
			<option value="">--Все категории--</option>
			<?php foreach ($categories as $category):?>
				<option value="<?= $category['category'] ?>"><?= $category['category'] ?></option>
			<?php endforeach;?>
		</select><br>
		<input type="hidden" name="filter" value="category">

		<input type="submit" value="Выбрать">
	</form>

	<!--	фильтр по авторам новостей -->
	<form action="" method="POST" class="category_select">

		<label for="category-select">Выберите автора:</label><br>
		<select name="author_id" id="category-select">
			<option value="">--Все авторы--</option>
				<option value="1">Иванов</option>
				<option value="2">Петров</option>
		</select><br>
		<input type="hidden" name="filter" value="author">

		<input type="submit" value="Выбрать">
	</form>


	<?php while( $news_item = $result->fetch() ):?>
		<div class="news_item">
			<a href="news/news_detail.php?id=<?=$news_item['news_id']?>"><h2><?= "$news_item[title]. Идентификатор $news_item[news_id]"?></h2></a>

			<div class="news_preview">
				<img class="news_images" src="<?= $news_item['news_image']?>" alt="<?= $news_item['title']?>">
				<p><?= $news_item['short_text']?></p>
			</div>

			<span>Дата: <?= $news_item['add_date']?></span>
			<!-- создайте страницу с автором и ниже сделайте ссылку на нее-->
			<span><a href="news/author_detail.php?id=<?= $news_item['author_id']?>">Автор: <?= $news_item['last_name']?></a></span>
			<span>Категория: <?= $news_item['category']?></span>

			<a href="news/news_detail.php?id=<?=$news_item['news_id']?>">Подробнее...</a>
		</div>
	<?php endwhile;?>
	<a href="/">Главная страница</a>
</div>

</body>
</html>
