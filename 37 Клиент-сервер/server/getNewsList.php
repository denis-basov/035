<?php
// подключение к бд
require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// получение данных от клиентской стороны
$start = (int)$_GET['start']; // откуда начинаем выборку
$limit = (int)$_GET['limit']; // кол-во новостей

// выборка нужных данных из БД
$query = "SELECT id, title, image
					FROM news
					ORDER BY add_date DESC
					LIMIT $start, $limit;";
$data = $pdo->query($query)->fetchAll();

//echo '<pre>';
//print_r($data);

// кодирование в JSON
// предоставление ответа
echo json_encode($data);