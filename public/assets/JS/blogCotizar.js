// blogCotizar.js
document.addEventListener("DOMContentLoaded", () => {

    const btns = document.querySelectorAll(".btn-cotizar");

    if (!btns.length) return;

    btns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            window.location.href = "/linea_grafica/tienda#cotizar";
        });
    });

});
