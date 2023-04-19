<?php

require 'DBConnect.php';

// 1. Установка подключения к бд
$pdo = DBConnect::getConnection();

//DBConnect::d($pdo);

// 2. Текст запроса к БД
$query = "SELECT OFFICE, CITY, REGION, MGR, TARGET, SALES FROM offices";

// 3. Отправляем запрос к БД и получаем результирующий объект PDOStatement
$result = $pdo->query($query); // $result - объект класса PDOStatement
//DBConnect::d($result);

require 'header.php';
?>
    <h2>Офисы компании</h2>
    <div class="container">
         <?php
            while($office = $result->fetch()){
                echo <<<_HTML_
                <div class="box">
                    <h3> Офис номер: <span>$office[OFFICE] </span></h3>
                    <p> Город офиса: <span>$office[CITY] </span></p>
                    <p> Регион офиса: <span>$office[REGION] </span></p>
                    <p> Планы продаж офиса: <span>$office[TARGET] </span></p>
                    <p> Реальные продажи офиса: <span>$office[SALES] </span></p>
                </div>
_HTML_;
            }
         ?>
    </div>


</body>
</html>