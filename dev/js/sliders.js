import Swiper from 'swiper';



var mainSlider = new Swiper('.main-slider__slider', {
  loop: false,
  grabCursor: true,
  direction: 'vertical',
  pagination: {
    el: '.main-slider__pagination',
    clickable: true
  },
  breakpoints: {
    647: {
      direction: 'horizontal'
    }
  }
});

var serviceSlider = new Swiper('.block-1__slider-body', {
  loop: true,
  grabCursor: true,
  autoplay: true
});



var stagesPagination = function () {
  if ($(window).width() > 647) {
    var stagesSlider = new Swiper('.stages__slider', {
      grabCursor: true,
      autoHeight: true,
      autoplay: true,
      on: {
        transitionEnd: function () {
          $('.stages__number span').text(stagesSlider.activeIndex + 1);
          $('.stages__pagination-item').removeClass('stages__pagination-item_active');
          $(".stages__pagination-item:eq(" + stagesSlider.activeIndex + ")").addClass('stages__pagination-item_active');
        }
      }
    });
    $('.stages__pagination-item').each(function () {
      $(this).click(function () {
        $('.stages__pagination-item').removeClass('stages__pagination-item_active');
        $(this).addClass('stages__pagination-item_active');
        var curr = $(this).text();
        $('.stages__number span').text(curr);
        stagesSlider.slideTo(curr - 1);
      })
    })
    $('[data="open-more-info"]').each(function () {
      $(this).click(function () {
        $(this).toggleClass('stages__slide-btn_active');
        let target = $(this).attr('data-href');
        $('#' + target + '').toggle(0);
        setTimeout(function () {
          stagesSlider.updateAutoHeight(300);
        }, 1);
      })
    })

    $('.stages__more-info-close').each(function () {
      $(this).click(function () {
        $('[data="open-more-info"]').removeClass('stages__slide-btn_active');
        $(this).parent().css("display", "none");
        setTimeout(function () {
          stagesSlider.updateAutoHeight(300);
        }, 1);
      })
    })
  }
}



var productSlider = new Swiper('.product-slider__body', {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 71,
  grabCursor: true,
  autoplay: true,
  navigation: {
    nextEl: '.product-slider__arrow-next',
    prevEl: '.product-slider__arrow-prev',
  },
  breakpoints: {
    1330: {
      slidesPerView: 2
    },
    1023: {
      slidesPerView: 2,
      spaceBetween: 30,
      allowTouchMove: false,
    },
    460: {
      slidesPerView: 1,
      direction: 'vertical',
      allowTouchMove: false,
    }
  },
});


var instagramSlider = new Swiper('.instagram__slider', {
  slidesPerView: 'auto',
  grabCursor: true
});




var ProductPageSlider = new Swiper(".product-page__slider", {
  slidesPerView: 'auto',
  spaceBetween: 34,
  slideToClickedSlide: true,
  navigation: {
    nextEl: '.product-page__arrow_right',
    prevEl: '.product-page__arrow_left',
  },
  breakpoints: {
    467: {
      spaceBetween: 13
    }
  }
})


ProductPageSlider.on('transitionEnd', function ProductPageEvents() {
  let active = ProductPageSlider.activeIndex + 1;
  if (ProductPageSlider.isEnd) {
    $('.product-page .swiper-slide').removeClass("swiper-slide-active");
    $('.product-page .swiper-slide:last-child').addClass("swiper-slide-active");
    active++;
  } else {
    $('.product-page .swiper-slide:last-child').removeClass("swiper-slide-active");
  }
  $(".product-page__counter-active").text(active);
  if ($(window).width() > 647) {
    if (ProductPageSlider.isEnd) {
      $('.product-page__arrow_right').fadeOut("fast");
    } else {
      $('.product-page__arrow_right').fadeIn();
    }
    if (ProductPageSlider.isBeginning) {
      $('.product-page__arrow_left').css("opacity", "0");
    } else {
      $('.product-page__arrow_left').css("opacity", "1");
    }
  }
})



var ppOffset = function () {
  if (($(".product-page").length) && ($(window).width() > 647)) {
    let $ml = $(".header .container").offset();
    $(".product-page__body").css("margin-left", $ml.left);
    let $sw = $(".product-page__slider-wrapper").offset();
    let $sw2 = $("body").width() - $sw.left;
    $(".product-page__slider-wrapper").css("width", $sw2);
    ProductPageSlider.update();
    let $ml2 = $(".product-page__slider-wrapper").offset();
    $(".product-page__btn").css("margin-left", $ml2.left);
  }
}


var AnotherProjectsSlider = new Swiper(".block-11__slider", {
  slidesPerView: 2,
  spaceBetween: 32,
  slideToClickedSlide: true,
  navigation: {
    nextEl: '.block-11__arrow_right',
    prevEl: '.block-11__arrow_left',
  },
})



var ImageWrapperSlider = new Swiper(".block-10__img-wrapper_slider", {
  slidesPerView: 'auto',
  slideToClickedSlide: true,
  breakpoints: {
    467: {
      spaceBetween: 13
    }
  }
})





$(window).resize(() => ppOffset());

ppOffset();

stagesPagination();