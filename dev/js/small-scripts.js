// import * as FilePond from 'filepond';

function deliveryTabs() {
    $('[data-delivery]').each(function () { // выбираем кнопки на странице доставки и проходимся по каждой

        $(this).click(function () { // прослушивваем "клик" по кнопке

            $(this).parents(".delivery__item").find(".delivery__list").removeClass('delivery__list_active'); // ищем ее родителя и скрывавем все "цели" кнопок

            $(this).parents(".delivery__item").find(".delivery__button").removeClass("delivery__button_active");  // ищем родителя и удаляем активный класс у всех кнопок

            let target = $(this).attr("data-delivery"); // находим "цель" кнопки

            $(this).addClass("delivery__button_active"); // добавляем кнопке активный класс

            $("#" + target + "").addClass("delivery__list_active"); // добавляем "цели" активный класс

        })
    })
}

deliveryTabs();