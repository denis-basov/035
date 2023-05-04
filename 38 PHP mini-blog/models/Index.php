<?php

/**
 * Class Index - модель для получения данных для главной страницы
 */
class Index
{
  // получение списка новостей
  public static function getNewsList(){
    $pdo = DB::getConnection();

    $query = "SELECT news.id as news_id, title, text, add_date, image, authors.id as author_id, first_name, last_name, avatar 
            FROM news, authors 
            WHERE author_id = authors.id 
            ORDER BY add_date DESC;";
    return $pdo->query($query)->fetchAll();
  }
}