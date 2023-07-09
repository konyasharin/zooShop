<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zoo</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="sass/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sass/style.css?<?php echo filemtime('sass/style.css')?>">
    <script src="js/wow.min.js"></script>
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
        require_once 'parts/modal.php';
        require_once 'parts/header.php';
    ?>
    <main class="main">
        <div class="main__screen">
            <img src="icons/round.png" alt="round" class="round">
        </div>
        <div class="container">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <h1>Зоомагазин<br>«Добро» </h1>
            <p>Мы занимаемся продажей самой лучшей продукции для ваших питомцев. Также благодаря нам уже довольно большое количество животных нашло себе новый дом.
                Мы покажем вашему питомцу как хорошо можно жить!</p>
            <button class="main__btn">Удивить питомца</button>
            <img src="img/window.png" alt="window" class="main__img">
        </div>
    </main>
    <section class="about">
        <div class="about__screen">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
        </div>
        <div class="container">
            <h2>О нас</h2>
            <div class="about__block wow animate__animated animate__fadeInLeft about__block-1">
                <p>Помимо торговли мы помогаем приютам с поиском владельца для <span>N</span> различных питомцев. Именно вы можете стать лучшим другом для одного
                    (или нескольких) из них</p>
                <img src="img/about1.png" alt="about">
            </div>
            <div class="about__block wow animate__animated animate__fadeInRight">
                <img src="img/about2.png" alt="about">
                <p>В нашем ассортименте вы можете найти более <span>N</span> аксессуаров и видов еды для вашего домашнего питомца</p>
            </div>
            <div class="about__block wow animate__animated animate__fadeInLeft">
                <p>Если же у вас нет питомца, то вы можете также найти у нас огромное количество очень милых плюшевых мишек, котиков и других видов животных, которые отлично впишутся в ваш домашний уют</p>
                <img src="img/about3.png" alt="about">
            </div>
        </div>
    </section>
    <section class="help">
        <div class="help__screen">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
            <img src="icons/round.png" alt="round" class="round">
        </div>
        <img src="img/bg-footer.png" alt="bg" class="background">
        <div class="container">
            <img src="img/gif.gif" alt="gif" class="gif">
            <div class="help__content">
                <h2>Помощь приютам</h2>
                <p>Уже N человек перешли на сайт одного из приютов и возможно взяли к себе в семью нового питомца. Если ты хочешь оказаться в их числе, то скорее переходи на сайт одного из приютов для животных и следуй последующим инструкциям. Сделай на одно счастливое животное больше!</p>
                <div class="help__buttons">
                    <a href="#"><button>«Супер-собака»</button></a>
                    <a href="#"><button>«БИМ»</button></a>
                    <a href="#"><button>«Зов предков»</button></a>
                    <a href="#"><button>«Ника»</button></a>
                    <a href="#"><button>«Лесной приют»</button></a>
                    <a href="#"><button>«В добрые руки»</button></a>
                </div>
            </div>
            <img src="img/dog.png" alt="dog" class="dog">
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <h4>© 2023 Nikolay Malyshev</h4>
        </div>
    </footer>
    <script src="./bundle.js?<?php echo filemtime('./bundle.js')?>"></script>
</body>
</html>