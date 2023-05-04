<?php
    require 'views/components/header.php';
?>


  <div class="site-section bg-light">
    <div class="container">
      <div class="row align-items-stretch retro-layout-2">
        <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('/template/images/img_1.jpg');">
            <div class="text">
              <h2>The AI magically removes moving objects from videos.</h2>
              <span class="date">July 19, 2019</span>
            </div>
          </a>
          <a href="single.html" class="h-entry v-height gradient" style="background-image: url('/template/images/img_2.jpg');">

            <div class="text">
              <h2>The AI magically removes moving objects from videos.</h2>
              <span class="date">July 19, 2019</span>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="single.html" class="h-entry img-5 h-100 gradient" style="background-image: url('/template/images/img_v_1.jpg');">

            <div class="text">
              <div class="post-categories mb-3">
                <span class="post-category bg-danger">Travel</span>
                <span class="post-category bg-primary">Food</span>
              </div>
              <h2>The AI magically removes moving objects from videos.</h2>
              <span class="date">July 19, 2019</span>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('/template/images/img_3.jpg');">

            <div class="text">
              <h2>The 20 Biggest Fintech Companies In America 2019</h2>
              <span class="date">July 19, 2019</span>
            </div>
          </a>
          <a href="single.html" class="h-entry v-height gradient" style="background-image: url('/template/images/img_4.jpg');">

            <div class="text">
              <h2>The 20 Biggest Fintech Companies In America 2019</h2>
              <span class="date">July 19, 2019</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">

    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <h2>Последние посты</h2>
        </div>
      </div>

      <div class="row">

        <?php foreach($newsList as $newsItem):?>
          <div class="col-lg-4 mb-4">
          <div class="entry2">
            <a href="/news/<?=$newsItem['news_id']?>"><img src="<?=$newsItem['image']?>" alt="<?=$newsItem['title']?>"
                                                      class="img-fluid
            rounded"></a>
            <div class="excerpt">

              <?php foreach($newsItem['categories'] as $category):?>
                <span class="post-category text-white <?=$category['class_name']?>
                mb-3"><?=$category['translation']?></span>
              <?php endforeach;?>

              <h2><a href="/news/<?=$newsItem['news_id']?>"><?=$newsItem['title']?></a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="<?=$newsItem['avatar']?>" alt="Image"
                                                                        class="img-fluid"></figure>
                <span class="d-inline-block mt-1"><a
                            href="#"><?=$newsItem['first_name']?> <?=$newsItem['last_name']?></a></span>
                <span>&nbsp;-&nbsp; <?=$newsItem['add_date']?></span>
              </div>
              <p><?=mb_substr($newsItem['text'], 0, 150) . '...'?></p>
              <p><a href="/news/<?=$newsItem['news_id']?>">Read More</a></p>
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

  <div class="site-section bg-light">
    <div class="container">

      <div class="row align-items-stretch retro-layout">

        <div class="col-md-5 order-md-2">
          <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('/template/images/img_4.jpg');">
            <span class="post-category text-white bg-danger">Travel</span>
            <div class="text">
              <h2>The 20 Biggest Fintech Companies In America 2019</h2>
              <span>February 12, 2019</span>
            </div>
          </a>
        </div>

        <div class="col-md-7">

          <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('/template/images/img_1.jpg');">
            <span class="post-category text-white bg-success">Nature</span>
            <div class="text text-sm">
              <h2>The 20 Biggest Fintech Companies In America 2019</h2>
              <span>February 12, 2019</span>
            </div>
          </a>

          <div class="two-col d-block d-md-flex">
            <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('/template/images/img_2.jpg');">
              <span class="post-category text-white bg-primary">Sports</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
            <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('/template/images/img_3.jpg');">
              <span class="post-category text-white bg-warning">Lifestyle</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>


  <div class="site-section bg-lightx">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-5">
          <div class="subscribe-1 ">
            <h2>Subscribe to our newsletter</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
            <form action="#" class="d-flex">
              <input type="text" class="form-control" placeholder="Enter your email address">
              <input type="submit" class="btn btn-primary" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
    require 'views/components/footer.php';
?>