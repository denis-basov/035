<?php
require 'DBConnect.php';

$pdo = DBConnect::getConnection();

$query = "SELECT MFR_ID, PRODUCT_ID, DESCRIPTION, PRICE, QTY_ON_HAND
FROM products";

$result = $pdo->query($query);
require 'header.php';
?>

<h2>Продукты компании</h2>
<div class="container">
	<?php while( $product = $result->fetch() ):?>
		<div class="box">
			<h3>Индетификатор MFR: <span><?php echo $product['MFR_ID'];?></span></h3>
			<p>Индетификатор продукта: <span><?php echo $product['PRODUCT_ID'];?></span></p>
			<p>Описание: <span><?php echo $product['DESCRIPTION'];?></span></p>
			<p>Цена: <span><?php echo $product['PRICE'];?></span></p>
			<p>Количество товара: <span><?php echo $product['QTY_ON_HAND'];?></span></p>
		</div>
	<?php endwhile;?>
</div>


</body>
</html>



