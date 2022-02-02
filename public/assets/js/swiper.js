document.addEventListener("DOMContentLoaded", function (e) {
  var swiper = new Swiper(".swiper-container", {
    slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiperPoster = new Swiper(".swiper-container-poster", {
    slidesPerView: 2,
    spaceBetween: 30,
    loop: true,
    speed: 600,
    autoplay: {
      delay: 9000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
});
