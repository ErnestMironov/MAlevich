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
        <div class="contacts">
            <img src="production/img/bubble-border(1).svg" alt="" class="contacts__bubble">
            <img src="production/img/bubble-border(10).svg" alt="" class="contacts__bubble-2">
            <div class="container">
                <img src="production/img/arc(5).svg" alt="" class="contacts__arc">
                <h1 class="contacts__title">контакты</h1>
                <div class="contacts__list">
                    <div class="contacts__list-item">
                        <div class="contacts__subtitle">приходите:</div>
                        <div class="contacts__list-text">Санкт-Петербург, Лиговский пр. д.50, корп. 13</div>
                    </div>
                    <div class="contacts__list-item">
                        <div class="contacts__subtitle">заказывайте:</div>
                        <div class="contacts__list-text">с 12 до 20 часов. Без обеда и выходных.</div>
                    </div>
                    <div class="contacts__list-item">
                        <div class="contacts__subtitle">пишите: </div>
                        <div class="contacts__list-text">office@malevichspb.ru</div>
                    </div>
                    <div class="contacts__list-item">
                        <div class="contacts__subtitle">звоните:</div>
                        <div class="contacts__list-text">8 (812) 640 49 96</div>
                    </div>
                </div>
            </div>
            <div class="contacts__map-wrapper">
                <img src="production/img/call-man.png" alt="" class="contacts__img">
                <img src="production/img/map-mask.svg" alt="" class="contacts__map-mask">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1999.3089395485993!2d30.321647316111328!3d59.927015669998255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46963100e2fd9e6f%3A0xcbece6bb36c46973!2z0JPQvtGA0L7RhdC-0LLQsNGPINGD0LsuLCA1MSwg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LMsIDE5MTAyMw!5e0!3m2!1sru!2sru!4v1541687140844" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <?php
            include 'blocks/footer.php';
        ?>
    </div>
</body>

</html>