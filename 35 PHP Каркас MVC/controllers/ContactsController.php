<?php
/**
 * Class ContactsController
 * класс для работы с контактами
 */


class ContactsController
{

	/**
	 * метод отображения страницы контактов
	 */
	public function actionIndex(){
		// подключаем вид с отображением страницы с контактами
		require ROOT . '/views/contacts.php';

		return true;
	}
}
















