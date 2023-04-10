<?php

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
	/*
		[first_name] => иван
		[last_name] => иванов
		[login] => ivan222
		[email] => ivanov@test.eu
		[password] => 46546984662138543
	*/

	// массивы для данных пользователя и ошибок
	$errors = []; // ошибки
	$input = []; // введенные данные пользователя

	// забираем данные пользователя, удаляем пробелы с краев, экранируем и кладем в массив $input
	$input['first_name'] = htmlspecialchars( trim($_POST['first_name']) );
	$input['last_name'] = htmlspecialchars( trim($_POST['last_name']) );
	$input['login'] = htmlspecialchars( trim($_POST['login']) );
	$input['email'] = htmlspecialchars( trim($_POST['email']) );
	$input['password'] = htmlspecialchars( trim($_POST['password']) );
	//d($input);


	/**
	 * функция для проверки имени
	 */
	function validate_first_name( $first_name ){
		$reg_exp = "/^[а-яё]+$/ui";

		if ( empty($first_name) ){ // если пусто
			return 'Введите имя';
		} elseif ( mb_strlen($first_name) < 2 ){ // менее 2 символов
			return 'Имя должно состоять не менее чем из двух букв';
		} elseif ( !preg_match($reg_exp, $first_name) ) { // если строка НЕ соответствует рег. выр.
			return 'Имя должно состоять только из русских букв';
		} else {
			return false;
		}

	}
	// вызываем функцию и получаем результат ее работы
	$first_name_error = validate_first_name($input['first_name']);
	if( $first_name_error ){ // если есть строка с ошибкой
		// записываем строку с ошибкой в массив с ошибками
		$errors['first_name'] = $first_name_error;
	} // если if не сработал, то ошибки в имени нет


	/**
	 * функция для проверки фамилии
	 */
	function validate_last_name($last_name){
		$reg_exp = "/^[а-яё]+$/ui";

		if ( empty($last_name) ){ // если пусто
			return 'Введите фамилию';
		} elseif ( mb_strlen($last_name) < 2 ){ // менее 2 символов
			return 'Фамилия должна состоять не менее чем из двух букв';
		} elseif ( !preg_match($reg_exp, $last_name) ) { // если строка НЕ соответствует рег. выр.
			return 'Фамилия должна состоять только из русских букв';
		} else {
			return false;
		}

	}
	$last_name_error = validate_last_name($input['last_name']);
	if($last_name_error){
		$errors['last_name'] = $last_name_error;
	}


	/**
	 * функция для проверки логина
	 */
	function validate_login($login){
		$reg_exp = "/^[a-z][a-z0-9]+$/i";

		if( strlen($login) === 0){
			return 'Введите логин';
		}elseif( !preg_match($reg_exp, $login) ){
			return 'Логин должен начинаться с латинской буквы и иметь длину не менее двух символов';
		} else {
			return false;
		}
	}
	$login_error = validate_login($input['login']);
	if($login_error){
		$errors['login'] = $login_error;
	}


	/**
	 * функция для проверки электронной почты
	 */
	function validate_email($email){
		$reg_exp = "/@/";

		if( strlen($email) === 0){
			return 'Введите адрес электронной почты';
		}elseif( !preg_match($reg_exp, $email) ){
			return 'Адрес электронной почты должен содержать символ @';
		} else {
			return false;
		}
	}
	$email_error = validate_email($input['email']);
	if($email_error){
		$errors['email'] = $email_error;
	}


	/**
	 * функция для проверки пароля
	 */
	function validate_password($password){
		if( empty($password) ){
			return 'Введите пароль';
		}elseif( mb_strlen($password) < 8){
			return 'Пароль должен состоять минимум из восьми символов';
		} else{
			return false;
		}
	}
	$password_error = validate_password($input['password']);
	if($password_error){
		$errors['password'] = $password_error;
	}


  // возвращаем массивы с ошибками и данными пользователя
	return [$errors, $input];
} // validate_form()






/**
 * process_form($input)
 * формирует вывод данных о пользователе
 */
function process_form($input){
	echo <<<_HTML_
		<h2>Вы успешно зарегистрированы, $input[first_name] </h2>

		<p>Ваше имя: $input[first_name]</p>
		<p>Ваша фамилия: $input[last_name]</p>
		<p>Ваш логин: $input[login]</p>
		<p>Ваш адрес электронной почты: $input[email]</p>
		<p>Ваш пароль: $input[password]</p>
_HTML_;

}


/**
 * show_form($errors, $input)
 * показывает пользователю исходную форму
 * или форму после неправильного ввода
 */
function show_form($errors = [], $input = []){

	// $input['first_name'];
	// если элемент 'first_name' в массиве есть, использовать его
	// если элемента 'first_name' в массиве нет, задать 'first_name' = ''
	if (!isset($input['first_name'])) $input['first_name'] = '';
	if (!isset($errors['first_name'])) $errors['first_name'] = '';

	$input['last_name'] ?? $input['last_name'] = '';
	$errors['last_name'] ?? $errors['last_name'] = '';

	$input['login'] ?? $input['login'] = '';
	$errors['login'] ?? $errors['login'] = '';

	$input['email'] ?? $input['email'] = '';
	$errors['email'] ?? $errors['email'] = '';

	$input['password'] ?? $input['password'] = '';
	$errors['password'] ?? $errors['password'] = '';


	d($errors);
	d($input);
	echo <<<_HTML_
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Регистрация</title>
            <style>
            	div{
            		margin: 5px;
            	}
            	span{
            		color: red;
            	}
						</style>
        </head>
        <body>
            <h2>Регистрация</h2>
        
            <form action="" method="POST">
                <div>
                    <label>Имя:</label>
                    <input type="text" name="first_name" placeholder="Только русские буквы" value="$input[first_name]" >
                    <span>$errors[first_name]</span>
                </div>
                
                <div>
                    <label>Фамилия:</label>
                    <input type="text" name="last_name" placeholder="Только русские буквы" value="$input[last_name]">
                    <span>$errors[last_name]</span>
                </div>
                
                <div>
                    <label>Логин:</label>
                    <input type="text" name="login" placeholder="Только латинские буквы и цифры" 
                    value="$input[login]" size="40">
                    <span>$errors[login]</span>
                </div>
                
                <div>
                    <label>Электронная почта:</label>
                    <input type="email" name="email" placeholder="test@test.ru" 
                    value="$input[email]">
                    <span>$errors[email]</span>
                </div>     
                
                <div>
                    <label>Пароль:</label>
                    <input type="password" name="password" placeholder="Не менее восьми произвольных символов" 
                    value="$input[password]" size="40">
                    <span>$errors[password]</span>
                </div>                             
        
                <input type="submit" value="Отправить данные">
        
            </form>
        
        </body>
        </html>
_HTML_;
}
