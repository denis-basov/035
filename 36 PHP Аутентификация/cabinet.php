<?php
session_start();

require 'core/DBConnect.php';
$pdo = DBConnect::getConnection();

$login = $_SESSION['valid_user'];

// делаем запрос к бд на получение данных о пользователе
$query = "SELECT id, login, email, password
					FROM users
					WHERE login = ?;";
$result = $pdo->prepare($query);
$result->execute([$login]);

$user = $result->fetch();
// var_dump($user);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Личный кабинет</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<h1>Личный кабинет</h1>

	<h3>Добро пожаловать, <?=$user['login']?></h3>
	<div>
		<!--	логин...	-->
		<!--	емейл...	-->
		<!--	пароль...	-->

		<a href="/">Главная</a>
		<a href="exit.php">Выход</a>
	</div>
</body>
</html>

