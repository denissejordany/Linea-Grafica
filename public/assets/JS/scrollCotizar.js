// scrollCotizar.js

document.addEventListener("DOMContentLoaded", () => {

    const mobileBtns = document.querySelectorAll(".mobile-btn");
    const contactTarget = document.querySelector("#contactanos");

    if (!mobileBtns.length || !contactTarget || !window.smoothScrollTo) return;

    mobileBtns.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();

            const offset = -60;
            const targetY =
                contactTarget.getBoundingClientRect().top +
                window.pageYOffset +
                offset;

            smoothScrollTo(targetY, 1400);
        });
    });

});
