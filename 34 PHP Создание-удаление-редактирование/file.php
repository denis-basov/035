<?php
    require 'DBConnect.php';

    DBConnect::d($_POST);


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <style>
        p,
        label {
            font: 1rem 'Fira Sans', sans-serif;
        }

        input {
            margin: 0.4rem;
        }

    </style>
</head>
<body>
<fieldset>
    <form method="POST">

        <div>
            <input type="radio" name="gender" value="man">
            <label>Мужчина</label>
        </div>

        <div>
            <input type="radio" name="gender" value="woman" checked>
            <label>Женщина</label>
        </div>

        <input type="submit" value="Отправить">

	</form>
</body>
</html>
