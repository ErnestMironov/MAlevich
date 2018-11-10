<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <div class="main-block">
        <?php
            include 'blocks/header.php';
            include 'blocks/categories.php';
            include 'blocks/bread-crumbs.php';
        ?>
        <div class="delivery">
            <div class="container">
                <img src="production/img/arc(5).svg" alt="" class="delivery__arc">
                <h1 class="delivery__title">оплата и доставка</h1>
                <div class="delivery__item">
                    <h2 class="delivery__subtitle">оплата заказа</h2>
                    <div class="delivery__buttons-wrapper">
                        <div class="delivery__button">
                            <img src="production/img/delivery-button.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> когда платить </span>
                        </div>
                        <div class="delivery__button">
                            <img src="production/img/delivery-button2.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> способы оплаты </span>
                        </div>
                    </div>
                </div>
                <div class="delivery__item">
                    <h2 class="delivery__subtitle">доставка и способы получения заказа</h2>
                    <div class="delivery__buttons-wrapper">
                        <div class="delivery__button">
                            <img src="production/img/delivery-button.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> самовывоз с производства </span>
                        </div>
                        <div class="delivery__button">
                            <img src="production/img/delivery-button2.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> доставка </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include 'blocks/footer.php';
        ?>
    </div>
</body>

</html> 