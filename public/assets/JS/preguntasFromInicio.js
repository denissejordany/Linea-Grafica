// preguntasFromInicio.js
(() => {

    const OFFSET = -80;
    const DURATION = 1400;
    let isScrolling = false;

    function easeInOutCubic(t) {
        return t < 0.5
            ? 4 * t * t * t
            : 1 - Math.pow(-2 * t + 2, 3) / 2;
    }

    function smoothScroll(target) {
        if (!target || isScrolling) return;
        isScrolling = true;

        const startY = window.scrollY;
        const targetY =
            target.getBoundingClientRect().top +
            window.pageYOffset +
            OFFSET;

        const distance = targetY - startY;
        let startTime = null;

        function animate(time) {
            if (!startTime) startTime = time;
            const elapsed = time - startTime;
            const progress = Math.min(elapsed / DURATION, 1);
            const eased = easeInOutCubic(progress);

            window.scrollTo(0, startY + distance * eased);

            if (progress < 1) {
                requestAnimationFrame(animate);
            } else {
                isScrolling = false;
            }
        }

        requestAnimationFrame(animate);
    }

    document.addEventListener("DOMContentLoaded", () => {

        const target = document.getElementById("pregunta");
        if (!target) return;

        /* 🔹 CASO 1: viene desde otra página con #pregunta */
        if (window.location.hash === "#pregunta") {
            setTimeout(() => smoothScroll(target), 200);
        }

        /* 🔹 CASO 2: clic estando en el mismo blog */
        const links = document.querySelectorAll('a[href$="#pregunta"], .btn-pregunta');

        links.forEach(link => {
            link.addEventListener("click", (e) => {
                // si ya estamos en blog, evitamos el salto brusco
                if (window.location.pathname.includes("blog")) {
                    e.preventDefault();
                    history.pushState(null, "", "#pregunta");
                    smoothScroll(target);
                }
            });
        });

    });

})();
