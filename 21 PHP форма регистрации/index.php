<?php
// error_reporting(E_ERROR);

require 'functions.php';


if('POST' === $_SERVER['REQUEST_METHOD']){ // если отправлена форма

	// 1. Проверяем введенные данные validate_form()
	list($errors, $input) = validate_form();

	if( $errors ){// 2. Если есть ошибки при вводе
		// Показываем форму повторно с данными и ошибками
		show_form($errors, $input);
	}else{ // если ошибок нет
		// Выводим информацию о пользователе
		process_form($input);
	}

}else{ // если страница загружена впервые
    // показываем форму
	  show_form();
}



