// import * as FilePond from 'filepond';
import WOW from "wow.js";


$(".main-slider__scroll-down").click(function () {
    var destination = $(window).height();
        $('html').animate({ scrollTop: destination }, 500);
    return false; 
});

$('[data="scroll"]').click(function () {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;
    $('html').animate({ scrollTop: destination }, 1100);
    return false; 
});

$('[data="call"]').each(function(){
    let target  = $(this).attr("data-call");
    $(this).find(".checkbox").click(function(){
        $('#' + target).slideDown();
    })
})

var heightFix = function(){
    if($(window).width() > 647){
        let $height = $(".form .container").height();
        $(".form").css("height", $height);
    }else{
        let $height = $(".main-block").height();
        $(".main-block").css("height", $height);
    }
}

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		$('.desktop-header__fixed-block').css("opacity","1");
    } else {
		$('.desktop-header__fixed-block').css("opacity","0");
    }
}

function ppBorder (){
    $('[data-ap="border-fh"]').addClass("fullHeight");
    $('[data-ap="border-fw"]').addClass("fullWidth"); 
}

// When the user clicks on the button, scroll to the top of the document
$("html").on("click","#scrollTop",function(){
    $("html,body").animate({ scrollTop: 0 }, "slow");
});

$("html").on("click","#scrollDown",function(){
    let height = $(window).height();
    $("html,body").animate({ scrollTop: '+=' + window.innerHeight }, 'slow');
});   

var wow = new WOW();

window.onload = function(){ 
    $(".preloader").fadeOut();
    $("body, html").css("overflow", "visible");
    wow.init(); 
    heightFix();
    ppBorder ();
}
window.onscroll = function() {scrollFunction()}


// const inputElement = document.querySelector('input[type="file"]');
// const pond = FilePond.create( inputElement ); 


// pond.setOptions({
//     labelIdle: 'Перетащите файл или <span class="filepond--label-action"> Выберете </span>',
//     labelFileLoading: 'Загрузка',
//     labelFileLoadError: 'Во время загрузки произошла ошибка'
// });
