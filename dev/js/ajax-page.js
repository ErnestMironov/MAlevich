import Swiper from 'swiper';
$(window).on('popstate', function (event) {
  console.log("location: " + document.location + ", state: " + JSON.stringify(event.state));
  if (typeof event.state === 'undefined') {
    window.history.pushState({
      'backed': 'true'
    }, '', document.location);
  }
});


function openAP() {
  if ($(window).width() > 1023) {
    $(".main-slider__slide").click(function (event) {
      event.preventDefault();

      var dataBtn = $(this).data('id');
      var dataTitle = $(this).data('title');
      $("html, body").css("overflow", "hidden")
      $('.main-slider__ajax-page').css('transform', 'translate(0)').load("product-page.php .content", function () {
        var dataOffcanvasID = dataBtn;
        var dataOffcanvasTitle = dataTitle;
        // window.history.pushState({'rowId':dataOffcanvasID,'pageTitle':dataOffcanvasTitle},'', '/portfolio/'+dataOffcanvasID+'/');
        window.history.pushState({
          'rowId': dataOffcanvasID,
          'pageTitle': dataOffcanvasTitle
        }, '', '/product-page.php');
        $('.main-slider__ajax-page .block-10__item').removeClass("wow");
        $('[data-ap="border-fh"]').addClass("fullHeight");
        $('[data-ap="border-fw"]').addClass("fullWidth");
        let $ml = $(".header .container").offset();
        $(".product-page__body").css("margin-left", $ml.left);
        let $sw2 = $(".main-slider__ajax-page").width();
        $(".product-page__slider-wrapper").css("width", $sw2);
        let $ml2 = $(".product-page__slider-wrapper").position();
        $(".product-page__btn").css("margin-left", $ml2.left + 50);
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

        var AnotherProjectsSlider = new Swiper(".block-11__slider", {
          slidesPerView: 2,
          spaceBetween: 32,
          slideToClickedSlide: true,
          navigation: {
            nextEl: '.block-11__arrow_right',
            prevEl: '.block-11__arrow_left',
          },
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

        function shiftArray(arr, cnt) {
          return arr.slice(cnt).concat(arr.slice(0, cnt));
        }

        $('.product-page__slider .swiper-slide').click(function () {
          var curr_slide = $(this)
          var images = [];
          $('.product-page__slider .swiper-slide').each(function (key, value) {

            images.push({
              'src': $(value).find('img').attr('src'),
              'opts': {
                'caption': $(value).find('img').attr('caption')
              }
            });

          });

          console.log(images);
          images = shiftArray(images, curr_slide);

          $.fancybox.open(

            images, {
              btnTpl: {
                // Arrows
                arrowLeft: '<a data-fancybox-prev class="fancybox-button fancybox-button--arrow_left fa fa-angle-left" title="{{PREV}}" href="javascript:;">' +
                  "</a>",

                arrowRight: '<a data-fancybox-next class="fancybox-button fancybox-button--arrow_right fa fa-angle-right" title="{{NEXT}}" href="javascript:;">' +
                  "</a>"
              },
              loop: true,
              buttons: [
                "close"
              ],
              'transitionIn': 'elastic',
              'transitionOut': 'elastic'
            });

          return false;

        });
        $(".product-page__btn").click(function (event) {
          event.preventDefault();
          window.history.back();
        })
        window.addEventListener("popstate", function (e) {
          $('.main-slider__ajax-page').css('transform', 'translateX(110vw)');
          $("html, body").css("overflow", "visible");
        }, false)
      })
    })
  }
}

openAP();