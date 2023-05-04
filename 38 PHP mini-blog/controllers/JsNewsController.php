<?php
require ROOT . '/models/News.php';

class JsNewsController
{
	/**
	 * метод отображения списка новостей
	 */
	public function actionIndex($limit, $page)
	{
		Debug::d($limit);
		Debug::d($page);
		$newsList = News::getFirstNews($limit);

		echo json_encode($newsList);

		require ROOT . '/views/news/js-news.php';



		return true;
	}

}