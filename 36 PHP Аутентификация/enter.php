<?php

// подключение к бд
require 'core/DBConnect.php';
// подключение классов ядра
require 'core/SignIn.php';


// обработка формы регистрации
if ($_SERVER['REQUEST_METHOD'] === 'POST') { // если форма отправлена
	list($errors, $input) = SignIn::validate_form();

	if ($errors) {
		SignIn::show_form($errors, $input);
	} else {
		SignIn::process_form($input);
	}
} else {
	SignIn::show_form();
}
