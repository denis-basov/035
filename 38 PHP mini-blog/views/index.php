<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Culinary by Free Css Templates</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
            <h1><a href="/">Culinary</a></h1>
            <h2>Template By Free CSS Templates</h2>
        </div>
        <!-- end div#logo -->
    </div>
    <!-- end div#header -->
    <div id="menu">
        <ul>
            <li><a href="/news/">Все новости</a></li>
            <li><a href="/news/football/">Футбол</a></li>
            <li><a href="/news/formulaone/">Формула 1</a></li>
            <li><a href="/news/basketball/">Баскетбол</a></li>
            <li><a href="/news/tennis/">Теннис</a></li>
            <li><a href="/news/hockey/">Хоккей</a></li>
        </ul>
    </div>
    <!-- end div#menu -->
    <div id="page">
        <div id="page-bgtop">
            <div id="content">
                <h2 class="title">Главная страница</h2>
            </div>
            <!-- end div#content -->
            <div id="sidebar">
                <ul>
                    <li id="search">
                        <h2 class="search">Search</h2>
                        <form method="get" action="">
                            <fieldset>
                                <input type="text" id="search-text" name="s" value="" />
                                <input type="submit" id="search-submit" value="Search" />
                            </fieldset>
                        </form>
                    </li>
                    <li>
                        <h2><a href="/news/football/">Футбол</a></h2>
                        <ul>
                            <?php foreach( $footballNews as $newsItem ):?>
                                <li><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['h1'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li>
                        <h2><a href="/news/formulaone/">Формула 1</a></h2>
                        <ul>
                            <?php foreach( $formulaoneNews as $newsItem ):?>
                                <li><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['h1'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li>
                    <li>
                        <h2><a href="/news/basketball/">Баскетбол</a></h2>
                        <ul>
                            <?php foreach( $basketballNews as $newsItem ):?>
                                <li><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['h1'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li>
                        <h2><a href="/news/tennis/">Теннис</a></h2>
                        <ul>
                            <?php foreach( $tennisNews as $newsItem ):?>
                                <li><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['h1'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li>
                        <h2><a href="/news/hockey/">Хоккей</a></h2>
                        <ul>
                            <?php foreach( $hockeyNews as $newsItem ):?>
                                <li><a href="/news/<?php echo $newsItem['id'];?>"><?php echo $newsItem['h1'];?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- end div#sidebar -->
            <div style="clear: both; height: 1px"></div>
        </div>
    </div>
    <!-- end div#page -->
    <div id="footer">
        <p>Copyright &copy; 2007 Culinary. All Rights Reserved. Designed by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.&nbsp;&nbsp;<a href="#">Privacy Policy</a> | <a href="#">Terms of Use</a></p>
    </div>
    <!-- end div#footer -->
</div>
<!-- end div#wrapper -->
</body>
</html>
