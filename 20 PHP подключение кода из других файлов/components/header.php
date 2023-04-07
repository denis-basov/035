<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo isset($title) ? $title : 'Моя компания'; ?></title>
<!--	<title>--><?php //echo $title ?? 'Моя компания'; ?><!--</title>-->
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
	<h1><?php echo $headerTitle ?? 'Заголовок шапки сайта'; ?></h1>
	<nav>
        <!--   вместо статической разметки должен быть перебор массива с меню   -->
        <?php
			require 'menu.php';
            foreach ($nav as $key => $value) {
                echo "<a href='$key'>$value</a>";
            }

//            foreach ($nav as $comp=>$name){
//                echo '<a href="' . $comp . '">' . $name . '</a>';
//            }
        ?>
	</nav>
</header>