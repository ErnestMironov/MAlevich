<form class="form">
    <img src="production/img/block-4__bubble.svg" alt="" class="form__bubble">
    <img src="production/img/form_border.svg" alt="" class="form__border">
    <div class="container">
        <h2 data-wow-duration=".5s" data-wow-offset="300" class="form__title wow fadeInDown">оставить заявку</h2>
        <div class="form__inputs-wrapper">
            <div class="input form__input">
                <input placeholder="ваше имя" type="text">
            </div>
            <div class="input form__input">
                <input placeholder="ваш телефон или Email" type="text">
            </div>
            <div class="input input_textarea  form__input ">
                <textarea placeholder="ваше сообщение" type="textarea"></textarea>
            </div>
        </div>
        <label class="form__file">
            <svg width="352px" height="36px"
                fill="#F2F2F2"
                xmlns="http://www.w3.org/2000/svg">
                <rect width="100%" height="100%" stroke-dasharray="8px" stroke="black" stroke-width="2px"/>
            </svg>
               <div class="form__file-text"> выберите файл</div>
            <input type="file">
        </label>
        <div class="form__description">
            Вы можете прикрепить файлы с макетами:
            - до 5 файлов <br>
            - размер всех файлов не должен превышать 20 Мб <br>
            - Файлы большего размера выкладывайте на файлообменник и присылайте нам ссылку
        </div>
        <div class="form__img">
            <img src="production/img/form__img.svg" alt="" class="form__img-floor">
            <img src="production/img/form__man.png" alt="" class="form__img-man">
        </div>
    </div>
</form>
<footer class="footer">
    <div class="container">
        <div class="footer__info">
            © 2007-2018 "Типография Малевич" - широкоформатная печать в СПБ
        </div>
        <a href="" class="footer__axlab">made with love from AXLAB</a>
    </div>
</footer>
<script src="dev/js/jquery-11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.5/lodash.min.js"></script>
<script src="production/build.js"></script>
