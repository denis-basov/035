<?php
/**
 * Class NewsController
 * контроллер для обработки запросов по работе с новостями
 */
require ROOT . '/models/News.php';

class NewsController
{

	/**
	 * метод отображения списка новостей - главной страницы работы с новостями
	 */
	public function actionIndex(){

		// получаем данные из БД
		$newsList = News::getNewsList();
		//Debug::d($newsList);

		// подключаем вид с отображением страницы со списком новостей
		require ROOT . '/views/news/index.php';

		return true;
	}

	/**
	 * метод для отображения одной новости по id
	 */
	public function actionView($id){
		//echo '<h1>' . Debug::d($id) . '</h1>';
		$id = (int)$id;

		// получение новостей из бд по указанному id
		$news_item = News::getNewsItemById($id);
		// Debug::d($news_item);

		// echo $news_item['category_id']; // идентификатор категории
		// получаем несколько последних новостей по идентификатору категории
		$news_items_by_category = News::getNewsItemsByCategory($news_item['category_id']);
		//Debug::d($news_items_by_category);

		// работа с данными в новости
		$news_item['text'] = str_replace("\r\n\r\n", "</p><p>", $news_item['text']);

		// подключаем вид с отображением новости детально
		require ROOT . '/views/news/news_detail.php';

		return true;
	}

	/**
	 * метод для отображения списка новостей по категории
	 */
	public function actionCategory($category){

		// получаем идентификатор категории
		$category_id = News::getCategoryIdByTitle($category);
		//var_dump($category_id);

		// получаем список новостей по указанному идентификатору категории
		$newsList = News::getNewsListByCategoryId($category_id);
		//Debug::d($newsList);

		// подключаем вид с отображением страницы со списком новостей
		require ROOT . '/views/news/index.php';

		return true;
	}

}

