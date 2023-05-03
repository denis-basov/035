<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Главная страница</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<h1>Главная страница</h1>
	<div class="main">
        <?php if( isset($_SESSION['valid_user']) ):?>
            <h3>Добро пожаловать, <?=$_SESSION['valid_user']?></h3>
            <a href="cabinet.php">Личный кабинет</a>
            <a href="exit.php">Выход</a>
        <?php else:?>
            <a href="enter.php">Вход</a>
            <a href="register.php">Регистрация</a>
        <?php endif;?>
	</div>
</body>
</html>
