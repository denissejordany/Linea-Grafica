document.addEventListener("DOMContentLoaded", () => {

    const contactTarget = document.querySelector("#contactanos");

    if (!contactTarget || !window.smoothScrollTo) return;

    // 🔹 Detectar si viene desde otra página
    if (window.location.hash === "#cotizar") {

        // pequeño delay para asegurar render
        setTimeout(() => {
            const offset = -60;
            const targetY =
                contactTarget.getBoundingClientRect().top +
                window.pageYOffset +
                offset;

            smoothScrollTo(targetY, 1400);
        }, 150);

    }

});
