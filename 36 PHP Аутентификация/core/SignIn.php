<?php
/**
 * Class SignIn
 * клас для входа
 */


class SignIn
{
	private static $pdo; // свойство для хранения объекта подключения к БД

	/**
	 * метод для получения объекта подключения к БД
	 */
	private static function getPDO(){
		self::$pdo = DBConnect::getConnection();
	}

	/**
	 * метод для проверки логина
	 */
	private static function validate_login($login){
		$reg_exp = "/^[a-z][a-z0-9]{2,}$/i";

		if(strlen($login) === 0){
			return 'Введите логин';
		}elseif (strlen($login) < 3){
			return 'Логин должен быть не короче трех символов';
		}elseif (!preg_match($reg_exp, $login)){
			return 'Логин должен содержать только латинские буквы и цифры и начинался с буквы';
		}

		// проверка логина по БД на наличие
		$query = "SELECT login 
							FROM users
							WHERE login = :login;";

		$result = self::$pdo->prepare($query);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->execute();

		$rowCount = $result->rowCount();// получаем кол-во выбранных строк

		if($rowCount === 0){ // если совпадений нет
			return 'Указанный логин не зарегистрирован';
		}
	}

	/**
	 * метод для проверки пароля
	 */
	private static function validate_password($password, $login){

		$reg_exp = "/^.{8,}$/u";

		if (strlen($password) === 0){
			return 'Введите пароль';
		}elseif (!preg_match($reg_exp, $password)){
			return 'Пароль должен состоять минимум из восьми произвольных символов';
		}

		// выборка пароля из бд по логину и проверка
		// 1. выборка
		$query = "SELECT password
							FROM users
							WHERE login = :login";
		$result = self::$pdo->prepare($query);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->execute();

		// $password - 123456789
		$pass_db = $result->fetch()['password']; // $2y$10$u4Xuh1wzKwT8bBItEYagVOkXcrvEN6oXs7jGqSf3Lqz62B2CoL8wy

		// сравниваем пароли
		if( !password_verify($password, $pass_db) ){ // если пароли Не совпадают
			return 'Пароль неверен';
		}
	}



	/**
	 * метод для проверки данных формы
	 */
	public static function validate_form(){

		$errors = [];
		$input = [];

		// экранируем введенные данные
		$input['login'] = htmlspecialchars(trim($_POST['login']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));

		self::getPDO(); // получаем объект подключения к БД и кладем с свойство $pdo

		// проверяем логин
		$validate_login_error = self::validate_login($input['login']);
		if($validate_login_error){ // если в логине ошибка
			$errors['login'] = $validate_login_error;
		} else { // если логин введен верно
			// проверяем пароль
			$validate_password_error = self::validate_password($input['password'], $input['login']);
			if($validate_password_error) {
				$errors['password'] = $validate_password_error;
			}
		}


		// возвращаем массив с ошибками и данными пользователя
		return [$errors, $input];

	}

	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function process_form($input){
		session_start();
		$_SESSION['valid_user'] = $input['login'];
		header('Location: cabinet.php');
	}

	/**
	 * метод для отображения формы входа
	 */
	public static function show_form($errors = [], $input = []){

		$fields = ['login', 'password'];

		foreach ($fields as $el){
			$input[$el] ?? $input[$el] = '';
			$errors[$el] ?? $errors[$el] = '';
		}

		echo <<<_HTML_
			<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
							content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Вход</title>
				<link rel="stylesheet" href="style/style.css">
			</head>
			<body>
				<h1>Вход</h1>
				<div class="main">
					<form action="" method="POST">
					
						<div>
							<label>Логин:</label>
							<input type="text" name="login" placeholder="Только латинские буквы и цифры" value="$input[login]" 
							size="30">
							<span>$errors[login]</span>
						</div>
						
						<div>
							<label>Пароль:</label>
							<input type="password" name="password" placeholder="Не менее восьми произвольных символов" 
							value="$input[password]" size="40">
							<span>$errors[password]</span>
						</div>
						
						<input type="submit" value="Отправить данные">
																		
					</form>
					<a href="register.php">Регистрация</a>
					<a href="reset.php">Забыли пароль?</a>
				</div>
			</body>
			</html>
_HTML_;

	}
}