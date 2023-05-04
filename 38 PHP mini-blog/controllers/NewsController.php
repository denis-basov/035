<?php

require ROOT . '/models/News.php';

// контроллер страницы с новостями
class NewsController
{

  /**
   * рекурсивный метод построения дерева комментариев
   */
  private static function  makeTree($arr, $root = 0, $level = 0)
  {
    $ulClass = $level ? 'children' : 'comment-list';

    echo "<ul class='$ulClass'>";
    foreach ($arr[$root] as $i) {
      echo "<li  class='comment' id='$i[id]'>";
      echo '<div class="vcard">';
      echo '<img src="' . $i['image'] . '" alt="Image placeholder">';
      echo '</div>';
      echo '<div class="comment-body">';
      echo '<h3>' . $i['first_name'] . ' ' . $i['last_name'] . '</h3>';
      echo '<div class="meta">' . $i['add_date'] . '</div>';
      echo '<p>' . $i['text'] . '</p>';
      echo '<p><a href="#" class="reply rounded">Ответить</a></p>';
      echo '</div>';
      if (isset($arr[$i['id']])) self::makeTree($arr, $i['id'], ++$level);
      echo "</li>";
    }
    echo "</ul>";
  }


  /**
   * метод отображения списка новостей
   */
  public function actionIndex()
  {

    $newsList = News::getCategoryNews();
    //Debug::d($newsList);

    require ROOT . '/views/news/index.php';

    return true;
  }


  /**
   * метод отображения одной новости детально
   */
  public function actionView($id)
  {
    if ($id) {
      $newsItem = News::getNewsItemById($id); // получаем новость
      $newsItem['text'] = str_replace("\r\n\r\n", '</p><p>', $newsItem['text']);

      // получаем список категорий с подсчетом новостей по каждой из них
      $totalNewsByCategory = News::countNewsByCategories();

      // популярные посты
      $popularItems = News::getPopularNews(3);

      // комментарии
      list($comments, $commentsCount) = News::getCommentsByNewsId($id); // получаем комментарии



      Debug::d($comments);

      require ROOT . '/views/news/view.php';
    }

    return true;
  }


  /**
   * выборка новостей по категории
   */
  public function actionCategory($category)
  {
    // получаем новости по нужной категории включая данные по категории
    $newsList = News::getNewsListByCategory($category);
    // получаем данные по категории
    $category = News::getCategoryByTitle($category);
    //Debug::d($category);

    require ROOT . '/views/news/index.php';

    return true;
  }
}

// /template/images/news/vaza2.jpg     644 * 429