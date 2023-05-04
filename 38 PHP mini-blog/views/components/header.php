<!DOCTYPE html>
<html lang="en">
<head>
  <title><?= $newsItem['title'] ?? 'Mini blog'?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/template/fonts/icomoon/style.css">
  <link rel="stylesheet" href="/template/css/bootstrap.min.css">
  <link rel="stylesheet" href="/template/css/magnific-popup.css">
  <link rel="stylesheet" href="/template/css/jquery-ui.css">
  <link rel="stylesheet" href="/template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="/template/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="/template/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="/template/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="/template/css/aos.css">

  <link rel="stylesheet" href="/template/css/style.css">
</head>
<body>

<div class="site-wrap">

  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="site-navbar" role="banner">
    <div class="container-fluid">
      <div class="row align-items-center">

        <div class="col-12 search-form-wrap js-search-form">
          <form method="get" action="#">
            <input type="text" id="s" class="form-control" placeholder="Search...">
            <button class="search-btn" type="submit"><span class="icon-search"></span></button>
          </form>
        </div>

        <div class="col-4 site-logo">
          <a href="/" class="text-black h2 mb-0">Mini Blog</a>
        </div>

        <div class="col-8 text-right">
          <nav class="site-navigation" role="navigation">
            <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">
              <?php require 'nav.php';?>
              <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
            </ul>
          </nav>
          <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
      </div>

    </div>
  </header>
