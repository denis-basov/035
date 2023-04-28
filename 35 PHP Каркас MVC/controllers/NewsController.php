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

		$news_item = News::getNewsItemById($id);

		// получение новостей из бд по указанному id
		// работа с данными в новости
		// формирование вывода новости на страницу

		// подключаем вид с отображением новости детально
		require ROOT . '/views/news/news_detail.php';

		return true;
	}

	/**
	 * метод для отображения списка новостей по категории
	 */
	public function actionCategory($category){

		// подключаем вид с отображением страницы со списком новостей
		require ROOT . '/views/news/category.php';

		return true;
	}

}

