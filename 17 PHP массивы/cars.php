<?php
function d($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}

$carsDB = [
	['id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'],
	['id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'],
	['id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
		'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg']
];
$car = $carsDB[2];
//d($car);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
				content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php echo $car['maker'] ." ". $car['model'];?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo $car['maker'] ." ". $car['model'];?></h1>
    <div class="auto">
        <div class="car-info">
            <h3>Производитель: <span><?php echo $car['maker'];?></span></h3>
            <h3>Модель: <span><?php echo $car['model'];?></span></h3>
            <p>Год выпуска: <span><?php echo $car['made_year'];?></span> г.</p>
            <p>Максимальная скорость: <span><?php echo $car['top_speed'];?></span> км/ч</p>
            <p>Ускорение до 100 км/ч: <span><?php echo $car['acceleration_to_100'];?></span> с.</p>
            <p>Мощность: <span><?php echo $car['power'];?></span> л/с</p>
            <p>Масса: <span><?php echo $car['weight'];?></span> кг</p>
        </div>
        <div class="car-image">
            <img src="<?php echo $car['image']?>" alt="<?php echo $car['maker'] ." ". $car['model'];?>">
        </div>
    </div>


<!--		--><?php //foreach ($carsDB as $car_item)
//		{?>
<!--        <h1>--><?php //echo $car_item['maker']. ' ' .$car_item['model'] ?><!--</h1>-->
<!--        <div class="auto">-->
<!--            <div class="car-info">-->
<!--                <h3>Производитель: <span>--><?php //echo $car_item['maker']?><!--</span></h3>-->
<!--                <p>Модель: <span>--><?php //echo $car_item['model'] ?><!--</span>.</p>-->
<!--                <p>Год выпуска: <span>--><?php //echo $car_item['made_year'] ?><!--</span> год.</p>-->
<!--                <p>Максимальная скорость: <span>--><?php //echo $car_item['top_speed'] ?><!--</span> км/ч.</p>-->
<!--                <p>Ускорение: <span>--><?php //echo $car_item['acceleration_to_100'] ?><!--</span> с.</p>-->
<!--                <p>Мощность: <span>--><?php //echo $car_item['power'] ?><!--</span> л/с.</p>-->
<!--                <p>Масса: <span>--><?php //echo $car_item['weight'] ?><!--</span> кг.</p>-->
<!--            </div>-->
<!--            <div class="car-image"><img src="--><?php //echo $car_item['image']?><!--" alt="--><?php //echo $car_item['maker']. ' ' .$car_item['model'] ?><!--"></div>-->
<!--        </div>-->
<!--			--><?php
//		}?>

<!--    <div class="car">-->
<!--        <h1>--><?php //echo $car['maker'] ." ". $car['model'];?><!--</h1>-->
<!--        <div class="car-info">-->
<!--            <h2>Производитель: <span></span>--><?php //echo $car['maker'];?><!--</span></span></h2>-->
<!--            <h3>Модель: <span></span>--><?php //echo $car['model'];?><!--</span></span></h3>-->
<!--            <ul>-->
<!--                <li>Год выпуска: <span>--><?php //echo $car['made_year'];?><!-- г.</span></li>-->
<!--                <li>Максимальная скорость: <span>--><?php //echo $car['top_speed'];?><!-- км/ч</span></li>-->
<!--                <li>Ускорение до 100 км/ч: <span>--><?php //echo $car['acceleration_to_100'];?><!-- с</span></li>-->
<!--                <li>Мощность: <span>--><?php //echo $car['power'];?><!-- л/с</span></li>-->
<!--                <li>Масса: <span>--><?php //echo $car['weight'];?><!-- кг</span></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <img src="--><?php //echo $car['image'];?><!--" alt="--><?php //echo $car['maker'] ." ". $car['model'];?><!--">-->
<!--    </div>-->


<!--    <div class="auto">-->
<!--        <h1>--><?php //echo $car['maker'] ." ". $car['model'];?><!--</h1>-->
<!--        <div class="car-info">-->
<!---->
<!--            <h3>Производитель: <span>--><?php //echo $car['maker']?><!--</span></h3>-->
<!--            <h3>Модель: <span>--><?php //echo $car['model']?><!--</span></h3>-->
<!--            <p>Год выпуска: <span>--><?php //echo $car['made_year']?><!--</span></p>-->
<!--            <p>Максимальная скорость: <span>--><?php //echo $car['top_speed']?><!--</span> км/ч</p>-->
<!--            <p>Разгон до 100: <span>--><?php //echo $car['acceleration_to_100']?><!--</span> с.</p>-->
<!--            <p>Мощность: <span>--><?php //echo $car['power']?><!--</span> л/с.</p>-->
<!--            <p>Вес: <span>--><?php //echo $car['weight']?><!--</span> кг.</p>-->
<!--            <div class="car-img">-->
<!--                <img src="--><?php //echo $car['image']?><!--" alt=--><?php //echo $car['maker']?><!-->-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</body>
</html>

