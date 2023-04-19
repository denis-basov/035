<?php
	require 'DBConnect.php';
	$pdo = DBConnect::getConnection();
	$query = "SELECT ORDER_NUM, ORDER_DATE, QTY, AMOUNT,
						COMPANY, CREDIT_LIMIT,
						NAME, AGE, TITLE, HIRE_DATE, QUOTA, salesreps.SALES AS SALESREPS_SALES,
						CITY, REGION, TARGET, offices.SALES AS OFFICES_SALES
						FROM orders, customers, salesreps, offices
						WHERE CUST = CUST_NUM
						AND
						REP = EMPL_NUM
						AND
						REP_OFFICE = OFFICE;";
	$result = $pdo->query($query);
	require 'header.php';
?>
	<h2>Заказы</h2>
	<div class="container">
		<?php while( $product = $result->fetch() ):?>
			<div class="box">
				<div class="item item-1">
					<h3>Заказ:</h3>
					<p>Идентификатор заказа: <span><?php echo $product['ORDER_NUM'];?></span></p>
					<p>Дата оформления заказа: <span><?php echo $product['ORDER_DATE'];?></span></p>
					<p>Количество: <span><?php echo $product['QTY'];?></span></p>
					<p>Стоимость: <span><?php echo $product['AMOUNT'];?></span></p>
				</div>

				<div class="item item-2">
					<h3>Клиент:</h3>
					<p>Название компании: <span><?php echo $product['COMPANY'];?></span></p>
					<p>Кредитный лимит: <span><?php echo $product['CREDIT_LIMIT'];?></span></p>
				</div>

				<div class="item item-3">
				<h3>Менеджер:</h3>
					<p>Имя: <span><?php echo $product['NAME'];?></span></p>
					<p>Возраст: <span><?php echo $product['AGE'];?></span></p>
					<p>Должность: <span><?php echo $product['TITLE'];?></span></p>
					<p>Дата найма: <span><?php echo $product['HIRE_DATE'];?></span></p>
					<p>План продаж менеджера: <span><?php echo $product['QUOTA'];?></span></p>
					<p>Продажи менеджера: <span><?php echo $product['SALESREPS_SALES'];?></span></p>
				</div>
				<div class="item item-4">
					<h3>Офис:</h3>
					<p>Город: <span><?php echo $product['CITY'];?></span></p>
					<p>Регион: <span><?php echo $product['REGION'];?></span></p>
					<p>План продаж офиса: <span><?php echo $product['TARGET'];?></span></p>
					<p>Продажи офиса: <span><?php echo $product['OFFICES_SALES'];?></span></p>
				</div>
			</div>
		<?php endwhile;?>
	</div>

</body>
</html>