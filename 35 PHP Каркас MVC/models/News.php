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
		// возврат массива с новостью
	}

}