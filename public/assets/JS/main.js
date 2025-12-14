// header.php
const btn = document.getElementById("menuBtn");
const menu = document.getElementById("navMenu");
const icon = document.getElementById("menu-icon");

btn.addEventListener("click", () => {
    menu.classList.toggle("open");
    btn.classList.toggle("active");



    icon.src = menu.classList.contains("open")
        ? icon.dataset.close
        : icon.dataset.open;
});
//------------------------
