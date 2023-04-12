<?php
	session_start();
	function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

	//d($_SESSION)
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
</head>
<body>
	<h2>Личный кабинет</h2>
	<h3>Логин: <?php echo $_SESSION['admin_login']; ?></h3>
	<div>
		<a href="/">Главная</a>
		<a href="exit.php">Выйти</a>
	</div>
</body>
</html>