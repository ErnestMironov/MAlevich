<!DOCTYPE html>
<html lang="ru">
<?php include 'blocks/head.php' ?>

<body class="page">
    <div class="main-block">
        <?php
            include 'blocks/header.php';
            include 'blocks/categories.php';
        ?>
        <div class="service">
            <div class="container">
                <img src="production/img/c.svg" alt="" class="service__c"> 
                <h1 class="service__title service__title_blue">
                    интерьерная печать
                </h1>
                <div class="service__text" style="margin-bottom: 386px">
                    <img src="production/img/service__bubble.svg" alt="" class="service__text-bg" style="top: -130px; right: 0px;">
                    <p>
                        Интерьерная печать применяется для оформления помещений, выставочных экспозиций, мест продаж
                        внутри торговых комплексов, офисов компаний, а также собственной квартиры.
                    </p>
                    <p>
                        Использование пигментных чернил на водной основе, и высокое разрешение печати позволяет
                        получать насыщенные изображения, сохраняя при этом тончайшие цветовые оттенки, полутона и
                        переходы. В результате графика приобретает привлекательный красочный вид.
                    </p>
                </div>
                <img src="production/img/man-reading.svg" alt="" class="service__img service__img_print">
                <div class="service__text service__text_center service__text_purple">
                    <img src="production/img/m.svg" alt="" class="service__m">
                    <img src="production/img/y.svg" alt="" class="service__y">
                    <p>
                        Широкий спектр материалов для интерьерной печати: фотобумага, самоклеящейся и светорассеивающая
                        плёнка (Бэклит), акварельная бумага, художественный холст и шелк, а также огромная коллекция
                        рам и паспарту нашей багетной мастерской поможет вам в реализации ваших творческих замыслов.
                    </p>
                </div>
                <div class="service__price-list">
                    <h2 class="service__subtitle">прайс-лист</h2>
                    <img src="production/img/pricelist_bg.svg" alt="" class="service__price-list-bg">
                    <div class="service__table-head">
                        <div class="service__table-cell">материал </div>
                        <div class="service__table-cell">плотность</div>
                        <div class="service__table-cell">макс. ширина печати</div>
                        <div class="service__table-cell">стоимость, руб/м2</div>
                    </div>
                    <div class="service__table-body">
                        <div class="service__table-row">
                            <div class="service__table-cell">бумага белая</div>
                            <div class="service__table-cell">150 г/м2</div>
                            <div class="service__table-cell">1.52 м</div>
                            <div class="service__table-cell">700</div>
                        </div>
                        <div class="service__table-row">
                            <div class="service__table-cell">фотобумага глянцевая</div>
                            <div class="service__table-cell">125 г/м2</div>
                            <div class="service__table-cell">1.52 м</div>
                            <div class="service__table-cell">700</div>
                        </div>
                        <div class="service__table-row">
                            <div class="service__table-cell">холст натуральный Леонардо</div>
                            <div class="service__table-cell">340 г/м2</div>
                            <div class="service__table-cell">2.02 м</div>
                            <div class="service__table-cell">700</div>
                        </div>
                    </div>
                </div>
                <div class="service__info">
                    <img src="production/img/cabinet.svg" alt="" class="service__cabinet">
                    <img src="production/img/k.svg" alt="" class="service__k">
                    <div class="service__info-text">
                        <div class="service__info-title">Требования к макетам для интерьерной печати:</div> 
                        <span class="service__info-color-text">Формат файла:</span> TIFF, PSD, JPEG, EPS, AI. Цветовая модель: RGB.
                        Если в макете содержатся мелкие элементы (текст, логотипы и т. п.), предпочтителен векторный формат.
                        В векторных форматах все тексты должны быть переведены в кривые Безье (outlines), в растровых – растрированы.
                        При верстке в Illustrator помещенные растровые изображения желательно предоставлять отдельно (для возможности цветокоррекции). <br>
                        <span class="service__info-color-text">Разрешение файла:</span> 150 dpi. Если исходный файл имеет меньшее разрешение, не увеличивайте его – это не улучшит качество печати.
                        Масштаб для растровых изображений – 1:1. Для векторных возможно масштабирование. ПРИПУСК НА ОБРЕЗ НЕ ТРЕБУЕТСЯ!
                        К макету желательно прилагать распечатку
                        Верстка, выполненная в программе CorelDraw, в работу не принимается!
                    </div>
                </div>
                <div class="service__slider">
                    <h2 class="service__subtitle">ОБРАЗЦЫ интерьерной ПЕЧАТИ</h2>
                    <img src="production/img/slider-mask.svg" alt="" class="service__slider-mask svg">
                    <img src="production/img/service-slider__arrow.svg" alt="" class="service__slider-prev">
                    <img src="production/img/service-slider__arrow.svg" alt="" class="service__slider-next">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url('production/img/interiror-print.jpg');">
                            </div>
                            <div class="swiper-slide" style="background-image: url('production/img/interiror-print2.jpg');">
                            </div>
                            <div class="swiper-slide" style="background-image: url('production/img/interiror-print3.jpg');">
                            </div>
                        </div>
                    </div>
                </div>   
            </div>
            <img src="production/img/delivery-footer-bubble.svg" alt="" class="service__bottom-bubble">
        </div>
        <?php
            include 'blocks/footer.php';
        ?>
    </div>
</body>

</html>