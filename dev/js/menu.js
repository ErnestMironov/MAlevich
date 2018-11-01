var showMenu = function(){
    $('[data="call-menu"]').each(function(){
        $(this).click(function(){
            $('.menu__left').addClass("menu__left_active");
            $('.menu__right').addClass("menu__right_active");
            $("body, html").css("overflow", "hidden");
        })
    });
    $('.menu__close').click(function(){
        $('.menu__left').removeClass("menu__left_active");
        $('.menu__right').removeClass("menu__right_active");
        $("body, html").css("overflow", "visible");
    })
}

var showSubMenu = function(){
    if($(window).width() < 648){
        $(".menu__list-item a").removeAttr("data");
    }
    $('[data="showSubMenu"]').each(function(){
        $(this).mouseenter(function(){
            // $(".menu__sublist").fadeOut("fast");
            $(this).siblings(".menu__sublist").fadeIn("fast");
            if($(window).width() < 648){
                $(this).addClass("menu__drop-down_active")
            }
        }
        )
    })
}

showMenu(); 
showSubMenu();