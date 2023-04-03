<?php
// 1. Создайте блок с переменными, которые относятся к пользователю
// Имя, фамилия, возраст, хобби, емейл.
// 2. Сформируйте разметку и вставьте в нее значения из объявленных переменных.
?>
<?php
	$lname="Иван";
	$sname="Петров";
	$hobby=["Рыбалка", "Путешествия", "Есть", "Спать"];
	$email="fish@mail.ru";
	$age=43;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=<<, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h1> Пользователь <?php echo $lname; ?> :</h1>
<p> Фамилия <?php echo $sname; ?> </p>
<p> Имя : <?php echo $lname; ?> </p>
<p> Возраст : <?php echo $age; ?> </p>
<p>Хобби:</p>
	<ul>
		<?php
			foreach ($hobby as $item){
				echo "<li>$item</li>";
			}
		?>
	</ul>
<p> Емейл : <?php echo $email; ?> </p>


</body>
</html>