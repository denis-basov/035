<?php

return [
	'contacts' => 'contacts/index',
	'news/([0-9]+)' => 'news/view/$1', // news/45 -- news/view/45
	'news' => 'news/index',
	'' => 'index/index'
];
