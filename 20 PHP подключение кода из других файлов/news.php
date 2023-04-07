<?php
    $title = 'Новости';
    $headerTitle = 'Новости нашей компании';
    $footerTitle = 'Подвал страницы с новостями';

	require 'components/header.php';
?>

<main>
	<h2>Контент страницы с новостями</h2>
	<div class="news">
		<div class="news-item">
			<h3>Новость № 1</h3>
		</div>
		<div class="news-item">
			<h3>Новость № 2</h3>
		</div>
		<div class="news-item">
			<h3>Новость № 3</h3>
		</div>
	</div>
</main>

<?php
	require 'components/footer.php';
?>
