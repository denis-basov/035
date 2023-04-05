<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

$users = [
	[
		'firstName' => 'Ivan',
		'lastName' => 'Petrov',
		'login' => 'Ivan999',
		'age' => 33,
		'hobby' => 'Reading',
		'avatar' => 'images/user1.jpg',
		'isAdmin' => false
	],
	[
		'firstName' => 'Anna',
		'lastName' => 'Petrova',
		'login' => 'Anna999',
		'age' => 14,
		'hobby' => 'Sleep',
		'avatar' => 'images/user2.jpg',
		'isAdmin' => false
	],
	[
		'firstName' => 'Sergey',
		'lastName' => 'Ivanov',
		'login' => 'Sergey555',
		'age' => 18,
		'hobby' => 'Reading',
		'avatar' => 'images/user3.jpg',
		'isAdmin' => false
	],
	[
		'firstName' => 'Irina',
		'lastName' => 'Sergeeva',
		'login' => 'Irina999',
		'age' => 44,
		'hobby' => 'Sleep',
		'avatar' => 'images/user2.jpg',
		'isAdmin' => false
	]
];
//d($users);

$carsDB = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="users">
        <?php
            foreach ($users as $user){
                echo "<div class='user'>";
                    echo "<div class='avatar'>";
                        echo "<img src='$user[avatar]' alt='$user[login]'>";
                    echo "</div>";
                    echo "<h2>Имя: $user[firstName]</h2>";
                    echo "<h2>Фамилия : $user[lastName]</h2>";
                    echo "<p>Имя пользователя: $user[login]</p>";
                    echo "<p>Возраст : $user[age]</p>";
                    echo "<p>Хобби : $user[hobby]</p>";
                echo "</div>";
            }
        ?>
    </section>

<?php
//    echo ' <div>';
//        foreach($carsDB as $carDB){
//            echo "<h2> $carDB[maker] $carDB[model] : </h2>";
//        foreach($carDB as $key=>$value){
//        echo " <div class=' cars' >";
//            echo "<p> $key : $value </p>";
//            echo " </div> ";}
//        }
//        echo " </div> ";
//?>

<!--    <section class="cars">-->
<!--			--><?php
//                foreach ($carsDB as $car) {
//                    echo "<div class= 'car'>";
//                    echo "<h2>Производитель: $car[maker]</h2>";
//                    echo "<h2>Модель: $car[model]</h2>";
//                    echo "<p>Год выпуска: $car[made_year]</p>";
//                    echo "<p>Максимальная скорость: $car[top_speed]</p>";
//                    echo "<p>Ускорение до 100 км/ч: $car[acceleration_to_100]</p>";
//                    echo "<p>Мощность: $car[power]</p>";
//                    echo "<p>Масса: $car[weight]</p>";
//                    echo "</div>";
//                }
//			?>
<!--    </section>-->


		<?php foreach ($carsDB as $car_item):?>
            <h1><?= $car_item['maker']. ' ' .$car_item['model'] ?></h1>
            <div class="auto">
                <div class="car-info">
                    <h3>Производитель: <span><?= $car_item['maker']?></span></h3>
                    <p>Модель: <span><?= $car_item['model'] ?></span>.</p>
                    <p>Год выпуска: <span><?= $car_item['made_year'] ?></span> год.</p>
                    <p>Максимальная скорость: <span><?= $car_item['top_speed'] ?></span> км/ч.</p>
                    <p>Ускорение: <span><?= $car_item['acceleration_to_100'] ?></span> с.</p>
                    <p>Мощность: <span><?= $car_item['power'] ?></span> л/с.</p>
                    <p>Масса: <span><?= $car_item['weight'] ?></span> кг.</p>
                </div>
                <div class="car-image"><img src="<?= $car_item['image']?>" alt="<?= $car_item['maker']. ' '
                    .$car_item['model'] ?>"></div>
            </div>
		<?php endforeach;?>

</body>
</html>
