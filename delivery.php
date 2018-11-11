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
                <img src="production/img/c.svg" alt="" class="delivery__c">
                <img src="production/img/arc(5).svg" alt="" class="delivery__arc">
                <h1 class="delivery__title">оплата и доставка</h1>
                <div class="delivery__item">
                    <h2 class="delivery__subtitle">оплата заказа</h2>
                    <div class="delivery__buttons-wrapper">
                        <div role="button" data-delivery="paymentsWay" class="delivery__button">
                            <img src="production/img/delivery-button.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> когда платить </span>
                        </div>
                        <div role="button" data-delivery="paymentsMethods" class="delivery__button">
                            <img src="production/img/delivery-button2.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> способы оплаты </span>
                        </div>
                    </div>
                    <div id="paymentsWay" class="delivery__list">
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble5.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">оформление заказа</div>
                            <div class="delivery__list-text">Вы оставляете заявку на нашем сайте или оформляете заказ в
                                самой типографии</div>
                        </div>
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble6.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">проверка макета</div>
                            <div class="delivery__list-text">мы проверяем полученные файлы на соответствие техническим
                                требованиям. В случае успешной поверки вы получите подтверждение</div>
                        </div>
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble3.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">оплата</div>
                            <div class="delivery__list-text">вы оплачиваете заказ любым удобным способом</div>
                        </div>
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble7.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">печать</div>
                            <div class="delivery__list-text">после поступления оплаты ваш макет отправляется в печать</div>
                        </div>
                    </div>
                    <div id="paymentsMethods" class="delivery__list">
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">Оплата наличными в типографии</div>
                            <div class="delivery__list-text">вы оплачиваете заказ любым удобным способом</div>
                        </div>
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble2.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">Оплата банковской картой VISA и VISA Electron, MasterCard
                                и Maestro</div>
                            <div class="delivery__list-text">вы оплачиваете заказ любым удобным способом</div>
                        </div>
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble3.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-title">Оплата из кошелька в Яндекс.Деньгах</div>
                            <div class="delivery__list-text">вы оплачиваете заказ любым удобным способом</div>
                        </div>
                    </div>
                </div>
                <div class="delivery__item">
                    <img src="production/img/arc(6).svg" alt="" class="delivery__arc-2">
                    <img src="production/img/m.svg" alt="" class="delivery__m">
                    <img src="production/img/y.svg" alt="" class="delivery__y">
                    <h2 class="delivery__subtitle">доставка и способы получения заказа</h2>
                    <div class="delivery__buttons-wrapper">
                        <div role="button" data-delivery="pickup" class="delivery__button">
                            <img src="production/img/delivery-button3.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> самовывоз с производства </span>
                        </div>
                        <div role="button" data-delivery="delivery" class="delivery__button">
                            <img src="production/img/delivery-button4.svg" alt="" class="delivery__button-bg svg">
                            <span class="delivery__button-text"> доставка </span>
                        </div>
                    </div>
                    <div id="pickup" class="delivery__list delivery__list_single">
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble4.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-text">При заказе на сумму до 2000 рублей</div>
                            <div class="delivery__list-title">250 рублей</div>
                            <div class="delivery__list-text">При заказе на сумму от 2000 рублей </div>
                            <div class="delivery__list-title">бесплатно</div>
                        </div>
                    </div>
                    <div id="delivery" class="delivery__list delivery__list_single">
                        <div class="delivery__list-item">
                            <img src="production/img/delivery-bubble8.svg" alt="" class="delivery__list-bubble">
                            <div class="delivery__list-text" style="text-align: left;">
                                <p>
                                    Самостоятельно забрать заказ можно с нашего производства, расположенного по адресу:
                                    г. Санкт-Петербург, Лиговский пр. д.50, корп. 13
                                </p>
                                <p>
                                    Как получить заказ: дождитесь SMS сообщения о готовности заказа и приходите к нам в
                                    гости с 12 до 20 часов.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="delivery__table">
                    <h2 class="delivery__subtitle delivery__subtitle_color">Минимальные сроки готовности заказов</h2>
                    <div class="delivery__table-head">
                        <div class="delivery__table-cell">Старт заказа </div>
                        <div class="delivery__table-cell">забрать в типографии</div>
                        <div class="delivery__table-cell">доставка курьером</div>
                    </div>
                    <div class="delivery__table-body">
                        <div class="delivery__table-row">
                            <div class="delivery__table-cell">понедельник</div>
                            <div class="delivery__table-cell">вторник с 12:00</div>
                            <div class="delivery__table-cell">вторник с 10:00 до 22:00</div>
                        </div>
                        <div class="delivery__table-row">
                            <div class="delivery__table-cell">вторник</div>
                            <div class="delivery__table-cell">среда с 12:00</div>
                            <div class="delivery__table-cell">среда с 10:00 до 22:00</div>
                        </div>
                        <div class="delivery__table-row">
                            <div class="delivery__table-cell">среда</div>
                            <div class="delivery__table-cell">четверг с 12:00</div>
                            <div class="delivery__table-cell">четверг с 10:00 до 22:00</div>
                        </div>
                        <div class="delivery__table-row">
                            <div class="delivery__table-cell">четверг</div>
                            <div class="delivery__table-cell">пятница с 12:00</div>
                            <div class="delivery__table-cell">пятница с 10:00 до 22:00</div>
                        </div>
                    </div>
                    <div class="delivery__courier">
                        <img class="delivery__courier-thoughts svg" src="production/img/courier.svg" alt="">
                        <img src="production/img/blue-man.svg" class="delivery__courier-man" alt="">                 
                    </div>
                    <img src="production/img/k.svg" alt="" class="delivery__k">
                </div>
                <div class="delivery__text">
                    <p> «Стартом заказа» является момент поступления оплаты за него на счёт типографии.</p>

                    <p>Приведенные в таблице сроки являются минимальными, и не гарантируют изготовление вашего заказа
                        "не позднее" приведенных значений.</p>

                    <p>Если вам важен срок исполнения заказа: Согласовывайте срок исполнения заказа с менеджером
                        сервиса ДО оплаты заказа. Оплачивая заказ - вы подтверждаете, что срок заказа вам известен, или
                        не важен.</p>
                </div>
            </div>
            <img src="production/img/delivery-footer-bubble.svg" alt="" class="delivery__bottom-bubble">
        </div>
        <?php
            include 'blocks/footer.php';
        ?>
    </div>
</body>

</html>