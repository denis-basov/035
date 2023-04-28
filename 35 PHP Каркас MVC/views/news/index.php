<?php
	// шаблон главной страницы со списком новостей
	require 'views/components/header.php';
?>

<div class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3>Список новостей</h3>
			</div>
		</div>
	</div>
</div>

<div class="site-section bg-white">
	<div class="container">
		<div class="row">
            <?php foreach($newsList as $news_item):?>
			<div class="col-lg-4 mb-4">
				<div class="entry2">
					<a href="news/<?=$news_item['news_id']?>"><img src="<?=$news_item['image']?>"
                                                                   alt="<?=$news_item['title']?>"
                                                                   class="img-fluid
					rounded"></a>
					<div class="excerpt">
						<span class="post-category text-white <?=$news_item['class_name']?>
						mb-3"><?=$news_item['translation']?></span>

						<h2><a href="news/<?=$news_item['news_id']?>"><?=$news_item['title']?></a></h2>
						<div class="post-meta align-items-center text-left clearfix">
							<figure class="author-figure mb-0 mr-3 float-left"><img src="<?=$news_item['avatar']?>"
                                                                                    alt="<?=$news_item['first_name']?> <?=$news_item['last_name']?>" class="img-fluid"></figure>
							<span class="d-inline-block mt-1"><a
                                        href="<?=$news_item['author_id']?>"><?=$news_item['first_name']?>
                                <?=$news_item['last_name']?></a></span>
							<span>&nbsp;-&nbsp; <?=$news_item['add_date']?></span>
						</div>

						<p><?=mb_substr($news_item['text'], 0, 150) ?></p>
						<p><a href="news/<?=$news_item['news_id']?>">Подробнее...</a></p>
					</div>
				</div>
			</div>
			<?php endforeach;?>
		</div>

		<!--   пагинация     -->
		<div class="row text-center pt-5 border-top">
			<div class="col-md-12">
				<div class="custom-pagination">
					<span>1</span>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>...</span>
					<a href="#">15</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	require 'views/components/footer.php';
?>
