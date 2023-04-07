<footer>
	<h3><?php echo $footerTitle ?? 'Повал сайта'?></h3>
	<nav>
        <?php
            foreach ($nav as $key => $value) {
                echo "<a href='$key'>$value</a>";
            }
        ?>
	</nav>
</footer>
</body>
</html>
