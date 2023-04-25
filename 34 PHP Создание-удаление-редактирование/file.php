<?php
	require 'DBConnect.php';

	DBConnect::d($_POST);
	DBConnect::d($_FILES);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h2>Работа с файлами</h2>
	<form action="" method="POST" enctype="multipart/form-data">

		<label for="">Имя:</label>
		<input type="text" name="name"><br>

		<label for="">Картинка 1:</label>
		<input type="file" name="image-1"><br>

		<label for="">Картинка 2:</label>
		<input type="file" name="image-2"><br>

		<input type="submit" value="Загрузить" >
	</form>
</body>
</html>
