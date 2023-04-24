<?php
/**
 * 1. CREATE - создание БД, табл
 * 2. READ - выборка данных из бд
 * 3. UPDATE - обновление данных в бд
 * 4. DELETE - удаление данных из бд
 * CRUD
 */

require 'DBConnect.php';
$pdo = DBConnect::getConnection();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с пользователями</title>
    <style>
        .container{
            margin: 20px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        .box{
            border: 3px solid skyblue;
            border-radius: 5px;
            padding: 10px;
            width: 200px;
        }
        .box span{
            color: brown;
        }
        input{
            margin-bottom: 7px;
        }
    </style>
</head>
<body>
    <h1>Работа с пользователями</h1>

    <?php
		/**
		 * создаем таблицу для хранения данных
         * id, first_name, last_name, login, email, password
		 */
		$query = "
		    CREATE TABLE IF NOT EXISTS users(
		        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		        first_name VARCHAR(255) NOT NULL,
		        last_name VARCHAR(255) NOT NULL,
		        login VARCHAR(255) NOT NULL,
		        email VARCHAR(255) NOT NULL,
		        password VARCHAR(255) NOT NULL
		    );
		";
		$pdo->exec($query); // выполняем запрос на создание таблицы


		/**
         * 2. Если нажата ссылка на добавление нового пользователя
         * показываем форму для заполнения
		 */
		if( isset($_GET['add']) ){
		    echo <<<_HTML_
                <h2>Добавить нового пользователя</h2>
                <form action="" method="POST">
                    
                    <label>Имя:</label>
                    <input type="text" name="first_name"><br>
                    
                    <label>Фамилия:</label>
                    <input type="text" name="last_name"><br>
                    
                    <label>Имя пользователя:</label>
                    <input type="text" name="login"><br>
                    
                    <label>Адрес электронной почты:</label>
                    <input type="email" name="email"><br>
                    
                    <label>Пароль:</label>
                    <input type="password" name="password"><br>                                                            
                    
                    <input type="submit" name="action" value="Создать">
                </form>
_HTML_;
        }

		/**
		 * 3. Если нажата кнопка name="action" value="Создать"
         * обрабатываем введенные данные
		 */
		if( isset($_POST['action']) && $_POST['action'] === 'Создать' ){
		    // проверка на пустые поля
		    if( !empty($_POST['first_name']) &&
                !empty($_POST['last_name']) &&
                !empty($_POST['login']) &&
                !empty($_POST['email']) &&
                !empty($_POST['password']) )
		    { // если поля не пустые, работаем с данными

		        // 1. Экранируем данные
                $first_name = htmlspecialchars( trim($_POST['first_name']) );
                $last_name = htmlspecialchars( trim($_POST['last_name']) );
                $login = htmlspecialchars( trim($_POST['login']) );
                $email = htmlspecialchars( trim($_POST['email']) );
                $password = htmlspecialchars( trim($_POST['password']) );

                // 2. Записываем в БД
                $query = "INSERT INTO users VALUES(?, ?, ?, ?, ?, ?)";
                $result = $pdo->prepare($query);
                $result->execute([null, $first_name, $last_name, $login, $email, $password]);
                header('Location: /');

            }else{ // если не все поля заполнены, выводим ошибку
		        echo "<h3>Вы не заполнили все поля</h3>";
            }
        }


		/**
		 * если нажата кнопка name="action" value="Удалить"
		 */
		if( isset($_POST['action']) && $_POST['action'] === 'Удалить' ){
		    // забираем id и приводим к числу
		    $id = (int)$_POST['id'];

		    // удаляем пользователя с указанным id
            $query = "DELETE FROM users WHERE id = ?";
            $result = $pdo->prepare($query);
            $result->execute([$id]);
            header('Location: /');
        }


		/**
		 * выводим список пользователей в документ
		 */
		$query = "SELECT id, first_name, last_name, login, email, password
		            FROM users
		            ORDER BY first_name";
		$result = $pdo->query($query); // выбираем данные из бд

		echo "<h2>Список всех пользователей</h2>";

		// 1. Нажатие ссылки для добавления
		echo "<a href='?add'>Добавить нового пользователя</a>";


		// вывод всех пользователей в документ
		echo "<div class='container'>";
		while( $user = $result->fetch() ){
		    echo <<<_HTML_
                <div class="box">
                    <p>ID: <span>$user[id]</span></p>
                    <p>Имя: <span>$user[first_name]</span></p>
                    <p>Фамилия: <span>$user[last_name]</span></p>
                    <p>Логин: <span>$user[login]</span></p>
                    <p>Электронная почта: <span>$user[email]</span></p>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="$user[id]">
                        <input type="submit" name="action" value="Изменить">
                        <input type="submit" name="action" value="Удалить">
                    </form>
                </div>
_HTML_;

        }
		echo "</div>";


    ?>
</body>
</html>

