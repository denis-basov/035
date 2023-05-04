<?php
  $nav = [
    '/news/' => 'Все новости',
    '/news/sport' => 'Спорт',
    '/news/science' => 'Наука',
    '/news/space' => 'Космос',
    '/news/culture' => 'Культура',
    '/news/weather' => 'Погода ',
  ];
?>

<?php foreach ($nav as $uri => $description) :?>
    <li><a href="<?=$uri?>"><?=$description?></a></li>
<?php endforeach;?>

