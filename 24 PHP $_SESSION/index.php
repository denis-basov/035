<?php
session_start();
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}


if( isset( $_SESSION['first_name'] )){ // если есть переменные сессии
	echo '<h2>Привет, ' . $_SESSION['first_name'] . '</h2>';
	echo "<a href='user.php'>Перейти в профиль</a>";

} else {
	if ( $_SERVER['REQUEST_METHOD'] === "POST" ){ // проверяем, отправлена ли форма
		//	echo '$_POST';
		//	d($_POST);

		// экранируем
		$_SESSION['first_name'] = htmlspecialchars(trim($_POST['first_name']));
		$_SESSION['last_name'] = htmlspecialchars(trim($_POST['last_name']));
		$_SESSION['login'] = htmlspecialchars(trim($_POST['login']));
		$_SESSION['email'] = htmlspecialchars(trim($_POST['email']));
		$_SESSION['password'] = htmlspecialchars(trim($_POST['password']));

		header('Location: /');
		exit;

		//	echo '$_SESSION';
		//	d($_SESSION);

	} else {
		// 1 шаг
		// форма
		echo <<<_HTML_
	<form method="POST">
		
		<div>
			<label>Имя:</label>
			<input type="text" name="first_name">
		</div>
		
		<div>
			<label>Фамилия:</label>
			<input type="text" name="last_name">
		</div>
		
		<div>
			<label>Логин:</label>
			<input type="text" name="login">
		</div>		

		<div>
			<label>Электронная почта:</label>
			<input type="email" name="email">
		</div>
		
		<div>
			<label>Пароль:</label>
			<input type="password" name="password">
		</div>		
		
		<input type="submit" value="Зарегистрироваться">	
	</form>
_HTML_;

	}
}






