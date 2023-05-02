<?php

return [
	//'shop/shop/([a-z]+)/([0-9]+)' => 'shop/category/$1/$2', // shop/shop/toys/44 => shop/category/toys/44
	//'about' => 'about/index', // страница о компании AboutController.php actionIndex
	'contacts' => 'contacts/index', // страница с контактами
	'news/([a-z]+)' => 'news/category/$1', // страница просмотра новостей по категории
	'news/([0-9]+)' => 'news/view/$1', // news/45 -- news/view/45 - просмотр одной новости
	'news' => 'news/index', // страница с разделом новостей "NewsController.php" "actionIndex"
	'' => 'index/index' // главная страница
];
