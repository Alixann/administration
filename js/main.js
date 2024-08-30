//свайпер галерея
const swiper = new Swiper(".swiper-container", {
  // Цикличность
  loop: true,

  // Пагинация
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  a11y: {
    paginationBulletMessage: "Тут название слайда {{index}}",
  },
  autoplay: {
    delay: 2000,
    disableOnInteraction: false, // Продолжает автопрокрутку после взаимодействия пользователя
  },
  speed: 1000,
});

//поиск
const icon = document.querySelector(".icon");
const search = document.querySelector(".search");

icon.onclick = function () {
  search.classList.toggle("active");
};

console.log(35);


//поиск по сайту

