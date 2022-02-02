document.addEventListener("DOMContentLoaded", function () {
  new Splide(".splide", {
    perPage: 4,
    cover: true,
    height: "6rem",
    lazyLoad: "nearby",
    rewind: true,
    breakpoints: {
      height: "4rem",
    },
  }).mount();
  // ====================================
  new Splide("#card-slider", {
    perPage: 2,
    autoplay: true,
    rewind: true,
    breakpoints: {
      600: {
        perPage: 1,
      },
    },
  }).mount();
});
