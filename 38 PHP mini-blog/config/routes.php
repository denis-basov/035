<?php
 return [
 	'catalog' => 'catalog/index',
 	'catalog/electronics' => 'catalog/electronics',
 	'catalog/electronics/tv' => 'catalog/tv',
 	'catalog/electronics/pc' => 'catalog/pc',


	 "js-news/([0-9]+)/([0-9]+)" => 'jsNews/index/$1/$2', // JsNewsController метод actionIndex - новости с исп
	 //. JS
   'news/([a-z]+)' => 'news/category/$1', // NewsController метод actionCategory - новости по категории
   'news/([0-9]+)' => 'news/view/$1', // NewsController метод actionView - новость по ID
   'news' => 'news/index', // NewsController метод actionIndex - список новостей
   '' => 'index/index',
 ];