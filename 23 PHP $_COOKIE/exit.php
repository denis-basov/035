<?php

echo 'Выход';

// удаляем куки
setcookie('first_name', '', time() - 90);

// перенаправляем клиента на главную
header('Location: index.php');
exit;