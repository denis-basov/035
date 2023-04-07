<?php

require 'functions.php';


if('POST' === $_SERVER['REQUEST_METHOD']){ // если отправлена форма
    // обрабатываем данные
	echo 'Метод запроса: ' . $_SERVER['REQUEST_METHOD'];
	d($_POST);

	// 1. Проверяем введенные данные validate_form()
	// 2. Если все данные введены верно
		// Выводим информацию о пользователе process_form($input)
	// 3. Если какие-то поля заполнены неверно
	 // Показываем форму повторно с данными и ошибками show_form($errors, $input)


}else{ // если страница загружена впервые
    // показываем форму
	  // show_form($errors, $input)
	echo 'Метод запроса: ' . $_SERVER['REQUEST_METHOD'];
    echo <<<_HTML_
        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Регистрация</title>
        </head>
        <body>
            <h2>Регистрация</h2>
        
            <form action="" method="POST">
                <div>
                    <label>Имя</label>
                    <input type="text" name="first_name">
                </div>
                <div>
                    <label>Фамилия</label>
                    <input type="text" name="last_name">
                </div>
        
                <input type="submit" value="Отправить данные">
        
            </form>
        
        </body>
        </html>
_HTML_;

}
?>


