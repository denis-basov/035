<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Личный кабинет пользователя <?php echo $_COOKIE['first_name'];?></title>
</head>
<body>
	<h2>Личный кабинет</h2>
	<p>Добро пожаловать в лк, <?php echo $_COOKIE['first_name'];?></p>
	<div>
        <a href="/">Главная</a>
        <a href="exit.php">Выйти</a>
	</div>
</body>
</html>
