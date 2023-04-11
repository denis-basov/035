<?php

function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
d($_GET);

$userName = $_GET['userName'];

echo "Привет, $userName!";
