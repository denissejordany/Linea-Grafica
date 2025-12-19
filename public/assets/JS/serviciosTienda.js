document.addEventListener('DOMContentLoaded', () => {

    const cardsContainer = document.querySelector('.cards-container');
    const buttons = document.querySelectorAll('.card-btn');
    const serviceSections = document.querySelectorAll('.service-feature');
    const backButtons = document.querySelectorAll('[data-back]');

    // Asegurar estado inicial limpio
    serviceSections.forEach(sec => {
        sec.classList.add('hidden');
        sec.classList.remove('fade-in', 'fade-out');
    });

    // CLICK EN "DESCUBRE MÁS"
    buttons.forEach(btn => {
        btn.addEventListener('click', e => {
            e.preventDefault();

            const serviceKey = btn.dataset.service;
            const targetSection = document.getElementById(`service-${serviceKey}`);

            // Reset animaciones previas
            cardsContainer.classList.remove('fade-in');
            cardsContainer.classList.add('fade-out');

            setTimeout(() => {
                cardsContainer.style.display = 'none';

                // Limpiar TODAS las secciones
                serviceSections.forEach(sec => {
                    sec.classList.add('hidden');
                    sec.classList.remove('fade-in', 'fade-out');
                });

                // Mostrar la correcta
                targetSection.classList.remove('hidden');

                // Forzar reflow para que la animación siempre dispare
                targetSection.offsetHeight;

                targetSection.classList.add('fade-in');
            }, 400);
        });
    });

    // CLICK EN VOLVER
    backButtons.forEach(btn => {
        btn.addEventListener('click', () => {

            serviceSections.forEach(sec => {
                sec.classList.remove('fade-in');
                sec.classList.add('fade-out');
            });

            setTimeout(() => {
                serviceSections.forEach(sec => {
                    sec.classList.add('hidden');
                    sec.classList.remove('fade-out');
                });

                cardsContainer.style.display = 'flex';

                cardsContainer.offsetHeight;
                cardsContainer.classList.remove('fade-out');
                cardsContainer.classList.add('fade-in');
            }, 400);
        });
    });

});
