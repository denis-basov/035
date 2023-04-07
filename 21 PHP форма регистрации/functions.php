<?php
//$user = ['name' => 'Ivan', 'avto' => 'Ford', 'age' => 30];
//
//echo <<<_HTML_
//	<h2>Имя: $user[name]</h2>
//	<p>Авто: $user[avto]</p>
//	<p>Возраст: $user[age]</p>
//_HTML_;

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}



/**
 * validate_form()
 * функция проверки данных
 * получает данные из массива POST
 * проверяет, возвращает верные данные пользователя
 * и сообщения об ошибках при неправильном вводе
 */
function validate_form(){

	// массивы для данных пользователя и ошибок
	$errors = []; // ошибки
	$input = []; // введенные данные пользователя

	// забираем данные пользователя и кладем в массив $input
	$input['first_name'] = trim($_POST['first_name']);
	$input['last_name'] = trim($_POST['last_name']);



	return [$errors, $input];
}






/**
 * process_form($input)
 * формирует вывод данных о пользователе
 */

/**
 * show_form($errors, $input)
 * показывает пользователю исходную форму
 * или форму после неправильного ввода
 */

