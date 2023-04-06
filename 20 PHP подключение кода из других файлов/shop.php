<?php
require 'components/header.php';
?>

    <section class="shop">
        <div class="container"></div>
        <h3 class="shops">Товары</h3>
        <div class="shops-item">
            <h3>Велосипед</h3>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Mollitia, possimus.</p>
            <p>price - 5 000 руб</p>
            <button>Купить</button>
        </div>
        <div class="shops-item">
            <h3>Мопед</h3>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Mollitia, possimus.</p>
            <p>price - 7 000 руб</p>
            <button>Купить</button>

        </div><div class="shops-item">
            <h3>Трактор</h3>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Mollitia, possimus.</p>
            <p>price - 55 000 руб</p>
            <button>Купить</button>

        </div><div class="shops-item">
            <h3>Самолет</h3>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipisicing elit. Mollitia, possimus.</p>
            <p>price - больше ляма руб</p>
            <button>Купить</button>
        </div>
    </section>
    <style>
        .shop {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            text-align: center;
            box-shadow: 2px 2px 10px red;
        }
        .shops-item {
            border: 2px solid red;
        }
        h3 {
            text-align: center;
        }
    </style>

<?php
require 'components/footer.php';
?>