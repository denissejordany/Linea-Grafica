// volverPortada.js

document.addEventListener("DOMContentLoaded", () => {

    const backBtn = document.querySelector(".contact-btn-back");
    const target = document.querySelector("#diseno-arte");

    // usamos la misma animación global
    if (!backBtn || !target || !window.smoothScrollTo) return;

    backBtn.addEventListener("click", (e) => {
        e.preventDefault();

        const offset = -80; // ajusta si tienes header fijo
        const targetY =
            target.getBoundingClientRect().top +
            window.pageYOffset +
            offset;

        smoothScrollTo(targetY, 1200); // misma suavidad
    });

});
