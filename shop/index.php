<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shop</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="../sass/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../sass/shop.css?<?php echo filemtime('../sass/shop.css')?>">
    <script src="../js/wow.min.js"></script>
    <script>
        const mediaQuery = window.matchMedia('(min-width: 1200px)');
        if(mediaQuery.matches) {
            new WOW({
                offset: 300
            }).init();
        }
    </script>
</head>
<body>
    <?php
        require_once '../parts/modal.php';
        require_once '../parts/headerSmall.php';
    ?>
    <section class="filter">
        <div class="container">
            <button class="filter__btn filter__btn_active">Все</button>
            <button class="filter__btn">Одежда</button>
            <button class="filter__btn">Еда</button>
            <button class="filter__btn">Игрушки</button>
            <button class="filter__btn">Медикаменты</button>
            <button class="filter__btn">Гигиена</button>
            <button class="filter__btn">Аксессуары</button>
        </div>
    </section>
    <section class="items">
        <div class="container">
            <div class="items__wrapper">
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
            </div>
            <div class="items__nav">
                <button class="items__nav-btn items__nav-btn_active">1</button>
                <button class="items__nav-btn">2</button>
                <button class="items__nav-btn">3</button>
                <span class="items__nav-continue">...</span>
                <button class="items__nav-btn">271</button>
            </div>
        </div>
    </section>
    <section class="discount">
        <div class="discount__wrapper">
            <img src="../img/discount-dog.png" alt="dog" class="discount__bg-img">
            <img src="../img/item.png" alt="item">
            <div class="disount__text-block">
                <h2>Скидка</h2>
                <h4>Корм для собак</h4>
                <div class="discount__prices">
                    <span class="discount__price_old">220 RUB</span>
                    <span class="discount__price_new">200 RUB</span>
                </div>
                <button class="discount__btn">Купить</button>
            </div>
        </div>
    </section>
    <section class="items" id="popularItems">
        <h2>Популярные товары</h2>
        <div class="container">
            <div class="items__wrapper">
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
                <div class="item">
                    <div class="item__background">
                        <img src="../img/item.png" alt="item" class="item__img">
                    </div>
                    <h4 class="item__name">Корм для собак</h4>
                    <span class="item__price">200 RUB</span>
                    <div class="stars">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star-yellow.png" alt="star">
                        <img src="../icons/star.png" alt="star">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer footer_small">
        <img src="../img/bg-small.png" alt="bg" class="background__small">
        <div class="container footer__small-text">
            <h4>© 2023 Nikolay Malyshev</h4>
        </div>
    </footer>
    <script src="../bundle.js?<?php echo filemtime('../bundle.js')?>"></script>
</body>
</html>