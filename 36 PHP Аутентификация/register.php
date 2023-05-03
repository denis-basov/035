<?php

// подключение к бд
require 'core/DBConnect.php';
// подключение классов ядра
require 'core/SignUp.php';


// обработка формы регистрации
if( $_SERVER['REQUEST_METHOD'] === 'POST' ){ // если форма отправлена
	list($errors, $input) = SignUp::validate_form();

	if($errors){
		SignUp::show_form($errors, $input);
	}else{
		SignUp::process_form($input);
	}
}else{
	SignUp::show_form();
}