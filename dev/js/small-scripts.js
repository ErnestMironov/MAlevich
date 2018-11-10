// import * as FilePond from 'filepond';

function deliveryTabs() {
    $('[data-delivery]').each(function () { // выбираем кнопки на странице доставки и проходимся по каждой

        $(this).click(function () { // прослушивваем "клик" по кнопке

            $(this).parents(".delivery__item").find(".delivery__list").removeClass('delivery__list_active'); // ищем ее родителя и скрывавем все "цели" кнопки

            let target = $(this).attr("data-delivery"); // находим "цель" кнопки

            $("#" + target + "").addClass("delivery__list_active"); // добавляем "цели" активный класс

        })
    })
}
deliveryTabs();