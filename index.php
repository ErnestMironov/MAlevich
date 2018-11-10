<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <div class="main-block">
        <?php
            include 'blocks/header.php';
        ?>
        <div class="block-1">
            <img src="production/img/bubble-border(1).svg" alt="" class="block-1__bubble">
            <div class="block-1__left">
                <div class="container">
                    <div class="block-1__subtitle">типография</div>
                    <h1 class="block-1__title">малевич</h1>
                    <div class="block-1__text">
                        По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у
                        некторых людей недоумение при попытках прочитать
                    </div>
                    <a href="abiut.php" class="btn block-1__btn">о типографии</a>
                </div>
            </div>
            <div class="block-1__right">
                <img src="production/img/arc.svg" alt="" class="block-1__arc_skeleton">
                <img src="production/img/arc(3).svg" alt="" class="block-1__arc">
                <img src="production/img/arc(2).svg" alt="" class="block-1__arc block-1__arc_bottom">
                <img src="production/img/strawberry.svg" alt="" class="block-1__strawberry">
                <img src="production/img/purple-man.svg" alt="" class="block-1__man block-1__man_purple">
                <img src="production/img/yellow-man.svg" alt="" class="block-1__man block-1__man_yellow">
                <img src="production/img/blue-man.svg" alt="" class="block-1__man block-1__man_blue">
                <img src="production/img/white-man.svg" alt="" class="block-1__man block-1__man_white">
                <img src="production/img/m.svg" alt="" class="block-1__man block-1__letter_m">
                <img src="production/img/y.svg" alt="" class="block-1__man block-1__letter_y">
                <img src="production/img/c.svg" alt="" class="block-1__man block-1__letter_c">
                <img src="production/img/k.svg" alt="" class="block-1__man block-1__letter_k">
            </div>
        </div>
        <?php 
            $CTitle = true;
            include 'blocks/categories.php';
        ?>
        <div class="block-2">
            <div class="container">
                <div class="block-2__top">
                    <h2 class="block-2__title">как мы работаем</h2>
                    <div data-wow-duration="1s" data-wow-offset="150" class="block-2__top-text wow fadeIn">
                        Грамотная организация бизнес-процессов
                        и автоматизированная система управления
                        типографией позволяет выполнять срочные заказы
                        любого уровня сложности с высоким качеством и в срок.
                    </div> 
                </div>
                <div class="block-2__list"> 
                    <img src="production/img/long__dash.svg" alt="" class="block-2__list-dash svg">
                    <div class="block-2__list-item">
                        <div class="block-2__round"></div>
                        <h3 class="block-2__subtitle">Расчет
                            стоимости</h3>
                        <div  class="block-2__list-text">
                            Свяжитесь с нами любым удобным способом и получите оперативный расчет заказа
                        </div>
                    </div>
                    <div class="block-2__list-item">
                        <div class="block-2__round"></div>
                        <h3 class="block-2__subtitle">Подготовка
                            макетов</h3>
                        <div  class="block-2__list-text">
                            Проверим Ваши файлы на ошибки, внесем правки либо создадим для Вас дизайн с нуля
                        </div>
                    </div>
                    <div class="block-2__list-item">
                        <div class="block-2__round"></div>
                        <h3 class="block-2__subtitle">Оплата
                            заказа</h3>
                        <div  class="block-2__list-text">
                            Проверим Ваши файлы на ошибки, внесем правки либо создадим для Вас дизайн с нуля
                        </div>
                    </div>
                    <div class="block-2__list-item">
                        <div class="block-2__round"></div>
                        <h3 class="block-2__subtitle">Производство</h3>
                        <div  class="block-2__list-text">
                            Проверим Ваши файлы на ошибки, внесем правки либо создадим для Вас дизайн с нуля
                        </div>
                    </div>
                    <div class="block-2__list-item">
                        <div class="block-2__round"></div>
                        <h3 class="block-2__subtitle">Готовый
                            продукт</h3>
                        <div  class="block-2__list-text">
                            Проверим Ваши файлы на ошибки, внесем правки либо создадим для Вас дизайн с нуля
                        </div>
                    </div>
                </div>
                <div class="block-2__glass">
                    <img src="production/img/glass-cover.svg" alt="" class="block-2__glass-cover">
                    <div class="block-2__glass-wrapper">
                        <img src="production/img/glass.svg" alt="" class="block-2__glass-icon">
                    </div>
                </div>
                <img src="production/img/bubble-border(8).svg" alt="" class="block-2__bubble-border svg">
                <div class="block-2__notebook-wrapper">
                    <img src="production/img/notebook-cover.svg" alt="">
                    <img src="production/img/man-with-notebook.svg" alt="" class="block-2__notebook">
                </div>
            </div>
        </div>
        <div class="block-3">
            <div class="container">
                <div class="block-3__top">
                    <h2 data-wow-duration=".5s" data-wow-offset="300" class="block-3__title wow fadeInDown">собственное <br> производство</h2>
                    <div class="block-3__equally">=</div>
                    <h2 data-wow-duration=".5s" data-wow-offset="300" class="block-3__title wow fadeInDown">минимальные <br> сроки изготовления</h2>
                </div>
                <div class="block-3__text">
                    Собственное производство позволяет нам гибко регулировать сроки изготовления рекламных конструкций,
                    а так же использовать возможности для снижения стоимости изделий
                </div>
                <a href="#!" class="btn block-3__btn">рассчитать заказ</a>
                <img src="production/img/man-with-papers.png" alt="" class="block-3__img"> 
            </div>
        </div>
        <div class="block-4">
            <h2 class="block-4__title">
                нам доверяют
            </h2>
            <div class="block-4__list">
                <div alt="" class="block-4__brand">
                    <img src="production/img/nestle.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/nc.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/cenpho.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/skinaly.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/aiber.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/nestle.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/nc.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/cenpho.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/skinaly.png" alt="">
                </div>
                <div alt="" class="block-4__brand">
                    <img src="production/img/aiber.png" alt="">
                </div>
            </div>
        </div>
        <?php
            include 'blocks/footer.php';
        ?>
    </div>
</body>

</html>