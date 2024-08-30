document
  .getElementById("open-modal-btn")
  .addEventListener("click", function () {
    document.getElementById("my-modal").classList.add("open");
  });

document
  .getElementById("close-my-modal-btn")
  .addEventListener("click", function () {
    document.getElementById("my-modal").classList.remove("open");
  });


  //меню для адаптива
const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".dropdownmenu");
const subMenuItems = document.querySelectorAll(".subMenuItem");
const background = document.querySelector(".bg");
const main = document.querySelector("main");

menuBtn.addEventListener("click", function () {
  menuBtn.classList.toggle("open");
  menu.classList.toggle("open");
  background.classList.toggle("open");
  main.classList.toggle("open");
});

subMenuItems.forEach((subMenuItem) => {
  subMenuItem.addEventListener("click", function () {
    subMenuItem.classList.toggle("open");
  });
});


//модальное глава

document
  .getElementById("contactBtn")
  .addEventListener("click", function () {
    document.getElementById("modal-glava").classList.add("open");
  });

document
  .getElementById("close-my-modal-btn")
  .addEventListener("click", function () {
    document.getElementById("modal-glava").classList.remove("open");
  });

