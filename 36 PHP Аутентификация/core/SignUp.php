<?php
/**
 * Class SignUp
 * класс для регистрации
 */

class SignUp
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
		$reg_exp = "/^[a-z][a-z0-9]{2,}$/i"; // первый символ - буква, второй буква или цифра от 2 шт

		if(strlen($login) === 0){
			return 'Введите логин';
		}elseif (strlen($login) < 3){
			return 'Логин должен быть не короче трех символов';
		}elseif (!preg_match($reg_exp, $login)){
			return 'Логин должен содержать только латинские буквы и цифры и начинался с буквы';
		}

		// проверка логина по БД на уникальность
		$query = "SELECT login 
							FROM users
							WHERE login = :login;";

		$result = self::$pdo->prepare($query);
		$result->bindParam(':login', $login, PDO::PARAM_STR);
		$result->execute();

		$rowCount = $result->rowCount();// получаем кол-во выбранных строк

		if($rowCount > 0){
			return 'Такой логин уже занят';
		}

	}

	/**
	 * метод для проверки емейла
	 */
	private static function validate_email($email){
		$reg_exp = "/^.+@.+$/u";

		if(strlen($email) === 0){
			return 'Введите адрес электронной почты';
		}elseif(!preg_match($reg_exp, $email)){
			return 'Адрес электронной почты введен в неверном формате';
		}

		// проверка по БД
		$query = "SELECT email
							FROM users
							WHERE email = :email";

		$result = self::$pdo->prepare($query);
		$result->bindParam(':email', $email, PDO::PARAM_STR);
		$result->execute();

		$rowCount = $result->rowCount();// получаем кол-во выбранных строк

		if($rowCount > 0){
			return 'Такой адрес электронной почты уже зарегистрирован';
		}

	}

	/**
	 * метод для проверки пароля
	 */
	private static function validate_password($password){

		$reg_exp = "/^.{8,}$/u";

		if (strlen($password) === 0){
			return 'Введите пароль';
		}elseif (!preg_match($reg_exp, $password)){
			return 'Пароль должен состоять минимум из восьми произвольных символов';
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
		$input['email'] = htmlspecialchars(trim($_POST['email']));
		$input['password'] = htmlspecialchars(trim($_POST['password']));

		/**
		 * проверка данных
		 *
		 *
		 */
		self::getPDO(); // получаем объект подключения к БД и кладем с свойство $pdo

		// проверка логина
		$validate_login_error = self::validate_login($input['login']);
		if($validate_login_error){
			$errors['login'] = $validate_login_error;
		}

		// проверка емейла
		$validate_email_error = self::validate_email($input['email']);
		if($validate_email_error){
			$errors['email'] = $validate_email_error;
		}

		// проверка пароля
		$validate_password_error = self::validate_password($input['password']);
		if($validate_password_error) {
			$errors['password'] = $validate_password_error;
		}


		// возвращаем массив с ошибками и данными пользователя
		return [$errors, $input];
	}


	/**
	 * метод для обработки данных при успешной проверке
	 */
	public static function process_form($input){

		// шифрование пароля
		$input['password'] = password_hash($input['password'], PASSWORD_DEFAULT );

		// добавление данных в БД
		self::getPDO();
		$query = "INSERT INTO users (login, email, password)
								VALUES(?, ?, ?);";
		$result = self::$pdo->prepare($query);
		$result->execute([$input['login'], $input['email'], $input['password']]);

		// запись данных в сессию
		session_start();
		$_SESSION['valid_user'] = $input['login'];
		// перезагрузка
		header('Location: /');
	}



	/**
	 * метод для отображения формы регистрации
	 */
	public static function show_form($errors = [], $input = []){

		$fields = ['login', 'email', 'password'];

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
				<title>Регистрация</title>
				<link rel="stylesheet" href="style/style.css">
			</head>
			<body>
				<h1>Регистрация</h1>
				<div class="main">
					<form action="" method="POST">
					
						<div>
							<label>Логин:</label>
							<input type="text" name="login" placeholder="Только латинские буквы и цифры" value="$input[login]" 
							size="30">
							<span>$errors[login]</span>
						</div>
						
						<div>
							<label>Электронная почта:</label>
							<input type="email" name="email" value="$input[email]" >
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
					<a href="enter.php">Войти на сайт</a>
				</div>
			</body>
			</html>
_HTML_;

	}
}