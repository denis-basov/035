<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

if ( isset($_COOKIE['first_name']) ){ // если куки установлены
	// 3 шаг
	// выводим приветствие
	echo '<h2>Привет, ' . $_COOKIE['first_name'] . '</h2>';
	echo '<a href="user.php">Перейти в профиль</a>';

} else { // если куки не установлены

	if ( $_SERVER['REQUEST_METHOD'] === "POST" ){ // проверяем, отправлена ли форма
		// 2 шаг
		// обработка формы
		//d($_POST);

		// экранируем данные пользователя
		$first_name = htmlspecialchars(trim($_POST['first_name']));

		// устанавливаем куки
		// echo time(); // time() + (60 * 60 * 24 * 30 * 12)
		setcookie('first_name', $first_name, time() + 60); // устанавливаем куки на 60 сек

		// перезагружаем страницу чтобы получить данные из массива $_COOKIE
		header('Location: index.php');
		exit;

	} else {
		// 1 шаг
		// форма
		echo <<<_HTML_
		<form method="POST">
			
			<label>Имя:</label>
			<input type="text" name="first_name" placeholder="Введите имя"><br>
			
			<input type="submit" value="Войти">	
		</form>
_HTML_;

	}

}

