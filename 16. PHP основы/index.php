<?php

$age = 14; // int
$userName = 'Ivan';
$salary = 1000.4; // float
$greet = 'Hello'; // string
$greetRus = 'Привет!';
$title = 'Prog on PHP';
$head1 = 'Заголовок первого уровня';
$isAdmin = true; // bool
$res = 'hello' . ' ' . 'world';
$str = '一人七八九十入';

//echo mb_strlen($greet);
var_dump($isAdmin);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $head1; ?></h1>
    <p><?php echo "$greet, $userName. Ваш возраст: $age лет."; ?></p>
    <h2>Простая разметка HTML</h2>
    <p>Конкатенация: <?php echo $res; ?></p>
<!--    <p>Админ: --><?php //echo $isAdmin; ?><!--</p>-->

    <a href="test.php">Тест</a>
    <a href="user.php">Юзер</a>

    <script src="script.js"></script>
</body>
</html>