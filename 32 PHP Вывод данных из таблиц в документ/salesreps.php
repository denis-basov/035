<?php
require "DBConnect.php";

$pdo = DBConnect::getConnection();

$query = "SELECT NAME, AGE, REP_OFFICE, TITLE, HIRE_DATE, QUOTA, SALES
FROM salesreps";

$result = $pdo->query($query);
require "header.php";
?>

<h2>Сотрудники</h2>
<div class="container">
	<?php while( $salesrep = $result->fetch() ):?>
		<div class="box">
			<h3>Имя сотрудника: <span><?php echo $salesrep['NAME'];?></span></h3>
			<p>Возраст: <span><?php echo $salesrep['AGE'];?></span></p>
			<p>Номер оффиса: <span><?php echo $salesrep['REP_OFFICE'];?></span></p>
			<p>Подразделение: <span><?php echo $salesrep['TITLE'];?></span></p>
			<p>Дата приема: <span><?php echo $salesrep['HIRE_DATE'];?></span></p>
			<p>План продаж: <span><?php echo $salesrep['QUOTA'];?></span></p>
			<p>Продажи сотрудника: <span><?php echo $salesrep['SALES'];?></span></p>
		</div>
	<?php endwhile;?>
</div>

</body>
</html>