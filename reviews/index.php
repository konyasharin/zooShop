<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reviews</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="../sass/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../sass/reviews.css?<?php echo filemtime('../sass/reviews.css')?>">
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

    <section class="reviews">
        <h2 class="reviews__title">Отзывы</h2>
        <div class="reviews__filter">
            <div class="container">
                <button class="reviews__btn reviews__btn_active">Все</button>
                <button class="reviews__btn" data-count="5">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                </button>
                <button class="reviews__btn" data-count="4">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                </button>
                <button class="reviews__btn" data-count="3">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                </button>
                <button class="reviews__btn" data-count="2">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                </button>
                <button class="reviews__btn" data-count="1">
                    <img src="../icons/star-yellow.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                </button>
                <button class="reviews__btn" data-count="0">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                    <img src="../icons/star-white.png" alt="star">
                </button>
            </div>
        </div>
        <div class="container">
            <div class="review">
                
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