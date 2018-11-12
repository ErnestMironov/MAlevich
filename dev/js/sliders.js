import Swiper from 'swiper';



var serviceSlider = new Swiper('.service__slider .swiper-container', {
  loop: true,
  grabCursor: true,
  clickable: true,
  navigation: {
    nextEl: '.service__slider-next',
    prevEl: '.service__slider-prev'
  }
});

