<?php
/**
 * Class NewsController
 * контроллер для обработки запросов по работе с новостями
 */

class NewsController
{

	/**
	 * метод отображения списка новостей - главной страницы работы с новостями
	 */
	public function actionIndex(){
		echo 'Список новостей';

		return true;
	}

	/**
	 * метод для отображения одной новости по id
	 */
	public function actionView($id){
		echo 'Новость по id ' . $id;

		// получение новостей из бд по указанному id
		// работа с данными в новости
		// формирование вывода новости на страницу

		return true;
	}

	/**
	 * метод для отображения списка новостей по категории
	 */
	public function actionCategory($category){
		echo 'Список новостей по категории ' . $category;

		return true;
	}

}

