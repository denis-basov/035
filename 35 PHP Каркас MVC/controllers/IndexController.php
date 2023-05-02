<?php
/**
 * Class IndexController
 * контроллер для работы с главной страницей
 */


class IndexController
{

	public function actionIndex(){

		// запрос к бд на получение последних новостей

		// подключаем вид с отображением главной страницы
		require ROOT . '/views/index.php';

		return true;
	}

}