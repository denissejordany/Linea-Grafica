// scrollPortada.js

document.addEventListener("DOMContentLoaded", () => {

    const btnDescubre = document.querySelector(".card-btn-port");
    const target = document.querySelector("#produccion-diseno");

    if (!btnDescubre || !target || !window.smoothScrollTo) return;

    btnDescubre.addEventListener("click", (e) => {
        e.preventDefault();

        const offset = -80;
        const targetY =
            target.getBoundingClientRect().top +
            window.pageYOffset +
            offset;

        smoothScrollTo(targetY, 1200);
    });

});
