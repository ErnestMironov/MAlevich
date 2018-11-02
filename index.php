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
                <img src="production/img/arc.svg" alt="" class="block-1__arc">
                <img src="production/img/strawberry.svg" alt="" class="block-1__strawberry">
                <img src="production/img/purple-man.png" alt="" class="block-1__man block-1__man_purple">
                <img src="production/img/yellow-man.png" alt="" class="block-1__man block-1__man_yellow">
                <img src="production/img/blue-man.png" alt="" class="block-1__man block-1__man_blue">
                <img src="production/img/white-man.png" alt="" class="block-1__man block-1__man_white">
                <img src="production/img/m.png" alt="" class="block-1__man block-1__letter_m">
                <img src="production/img/y.png" alt="" class="block-1__man block-1__letter_y">
                <img src="production/img/c.png" alt="" class="block-1__man block-1__letter_c">
                <img src="production/img/k.png" alt="" class="block-1__man block-1__letter_k">
            </div>
        </div>
        <?php
            include 'blocks/categories.php';
        ?>
    </div>
    <?php
        include 'blocks/footer.php';
    ?>
</body>

</html>