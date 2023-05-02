<?php

/**
 * Class News
 * модель для работы с новостями
 */


class News
{
	/**
	 * Получение списка новостей
	 */
	public static function getNewsList(){

		$pdo = DBconnect::getConnection();

		// news.id, title, text, add_date, image, authors.id, first_name, last_name
		// translation, class_name
		$query = "SELECT news.id AS news_id, news.title, text, add_date, image, 
							authors.id AS author_id, first_name, last_name, avatar,
							translation, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
							AND category_id = category.id
							ORDER BY add_date DESC;";

		return $pdo->query($query)->fetchAll();

	}

	/**
	 * Получение одной новости по id
	 */
	public static function getNewsItemById($id){
		// запрос к бд
		$pdo = DBconnect::getConnection();

		$query = "SELECT news.id AS news_id, news.title AS news_title, text, add_date, image, 
							authors.id AS author_id, first_name, last_name, short_info, avatar,
							category.id AS category_id, category.title AS category_title, translation, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
							AND category_id = category.id
							AND news.id = ?;";
		$result = $pdo->prepare($query);
		$result->execute([$id]);

		// возврат массива с новостью
		return $result->fetch();
	}


	/**
	 * Получение нескольких новостей по указанной категории
	 */
	public static function getNewsItemsByCategory($category_id){
		$pdo = DBconnect::getConnection();

		// id, title, add_date, image
		$query = "SELECT id, title, add_date, image
							FROM news
							WHERE category_id = $category_id
							ORDER BY add_date DESC
							LIMIT 3;";

		return $pdo->query($query)->fetchAll();
	}

	/**
	 * Получение идентификатора категории по ее title
	 */
	public static function getCategoryIdByTitle($category){
		// запрос к бд по категории, получение id возврат
		$pdo = DBconnect::getConnection();

		$query = "SELECT id
							FROM category
							WHERE title = '$category';";

		return $pdo->query($query)->fetch()['id']; // 4
	}

	/**
	 * Получение списка новостей по указанному id категории
	 */
	public static function getNewsListByCategoryId($category_id){
		$pdo = DBconnect::getConnection();

		// news.id, title, text, add_date, image, authors.id, first_name, last_name
		// translation, class_name
		$query = "SELECT news.id AS news_id, news.title, text, add_date, image, 
							authors.id AS author_id, first_name, last_name, avatar,
							translation, description, class_name
							FROM news, authors, category
							WHERE author_id = authors.id
							AND category_id = category.id
							AND category_id = $category_id
							ORDER BY add_date DESC;";

		return $pdo->query($query)->fetchAll();

	}
}