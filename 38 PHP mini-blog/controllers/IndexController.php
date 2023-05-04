<?php

require ROOT . '/models/Index.php';
require ROOT . '/models/News.php';


// контроллер главной страницы
class IndexController
{
  public function actionIndex(){

    $newsList = News::getCategoryNews();
    //Debug::dd($newsList);

    require ROOT . '/views/index/index.php';

    return true;
  }
}
