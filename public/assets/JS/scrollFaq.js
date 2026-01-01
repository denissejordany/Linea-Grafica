// scrollFaq.js
document.addEventListener("DOMContentLoaded", () => {

    const buttons = document.querySelectorAll(".faq-highlight-btn-text");

    if (!buttons.length || !window.smoothScrollTo) return;

    buttons.forEach(btn => {
        btn.addEventListener("click", () => {

            const targetId = btn.dataset.target;
            const target = document.getElementById(targetId);

            if (!target) return;

            const offset = -80;
            const targetY =
                target.getBoundingClientRect().top +
                window.pageYOffset +
                offset;

            smoothScrollTo(targetY, 1200);
        });
    });

});
