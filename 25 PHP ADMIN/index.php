<?php
session_start();
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

// тестовые данные для входа
$admin_login = 'admin';
$admin_password = '123456';


if( isset( $_SESSION['admin_login'] )){ // если есть переменные сессии
	echo '<h2>Привет, ' . $_SESSION['admin_login'] . '</h2>';
	echo "<a href='user.php'>Перейти в профиль</a><br>";
	echo "<a href='exit.php'>Выйти</a>";

} else {
	if ( $_SERVER['REQUEST_METHOD'] === "POST" ){ // проверяем, отправлена ли форма

		$login = htmlspecialchars(trim($_POST['login']));
		$password = htmlspecialchars(trim($_POST['password']));

		// проверяем, верные ли данные введены
		if($login === $admin_login){ // если логин введен верно
			if($password === $admin_password){ // если пароль введен верно
				// установить данные сессии
				$_SESSION['admin_login'] = $login;
				// перенаправить пользователя
				header('Location: /');
			}else{ // если пароль введен не верно
				echo 'Неверный пароль';
			}
		}else{ // если логин введен НЕ верно
			echo 'Неверный логин';
		}
	} else {

		echo <<<_HTML_
	<form method="POST">
		<div>
			<label>Логин:</label>
			<input type="text" name="login">
		</div>		
		<div>
			<label>Пароль:</label>
			<input type="password" name="password">
		</div>		
		<input type="submit" value="Войти">	
	</form>
_HTML_;

	}
}






