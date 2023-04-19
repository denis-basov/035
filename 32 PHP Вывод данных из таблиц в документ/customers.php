<?php
require 'DBConnect.php';

$pdo = DBConnect::getConnection();
$query = "SELECT CUST_NUM, COMPANY, CUST_REP, CREDIT_LIMIT
					FROM customers
					ORDER BY CREDIT_LIMIT DESC";
$result = $pdo->query($query);
require 'header.php';
?>

	<h2>Заказчики</h2>
	<div class="container">
		<?php while( $customer = $result->fetch() ):?>
			<div class="box">
				<h3>Идентификатор клиента: <span><?php echo $customer['CUST_NUM'];?></span></h3>
				<p>Название компании: <span><?php echo $customer['COMPANY'];?></span></p>
				<p>Номер менеджера: <span><?= $customer['CUST_REP'];?></span></p>
				<p>Кредитный лимит: <span><?= $customer['CREDIT_LIMIT'];?></span></p>
			</div>
		<?php endwhile;?>
	</div>


</body>
</html>
