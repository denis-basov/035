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


if( isset( $_SESSION['first_name'] )){ // если есть переменные сессии
	echo '<h2>Привет, ' . $_SESSION['first_name'] . '</h2>';
	echo "<a href='user.php'>Перейти в профиль</a>";

} else {
	if ( $_SERVER['REQUEST_METHOD'] === "POST" ){ // проверяем, отправлена ли форма

		$login = htmlspecialchars(trim($_POST['login']));
		$password = htmlspecialchars(trim($_POST['password']));

		// проверяем, верные ли данные введены


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






