<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вывод данных из БД</title>
    <style>
        .container{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            padding: 20px;
            background: aliceblue;
            gap: 20px;
        }
        .box{
            border: 3px solid lightskyblue;
            border-radius: 6px;
            padding: 10px;
        }
        .box span{
            color: brown;
            font-weight: bold;
        }
        .item{
            background: lightgray;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
	<header>
        <h1>Шапка сайта</h1>
        <div class="logo">Логотип</div>
		<nav>
			<a href="/">Офисы компании</a>
			<a href="customers.php">Заказчики</a>
			<a href="orders.php">Заказы</a>
			<a href="products.php">Товары</a>
			<a href="salesreps.php">Сотрудники компании</a>
		</nav>
	</header>
