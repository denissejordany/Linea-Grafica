document.addEventListener('DOMContentLoaded', () => {

    let index = 0;

    const track  = document.querySelector('.alt-track');
    const slides = document.querySelectorAll('.alt-slide');
    const next   = document.querySelector('.alt-next');
    const prev   = document.querySelector('.alt-prev');
    const dots   = document.querySelectorAll('.alt-dot');

    if (!track || slides.length === 0) {
        console.error('Carrusel: elementos no encontrados');
        return;
    }

    function updateCarousel() {
        track.style.transform = `translateX(-${index * 100}%)`;
        updateDots();
    }

    function updateDots() {
        dots.forEach(dot => dot.classList.remove('active'));
        if (dots[index]) dots[index].classList.add('active');
    }

    if (next && prev) {
        next.addEventListener('click', () => {
            index = (index + 1) % slides.length;
            updateCarousel();
        });

        prev.addEventListener('click', () => {
            index = (index - 1 + slides.length) % slides.length;
            updateCarousel();
        });
    }

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            index = parseInt(dot.dataset.slide);
            updateCarousel();
        });
    });

    updateCarousel(); // inicializa

});

/*CARRUSEL PROYECTOS*/
document.addEventListener('DOMContentLoaded', () => {

    let index = 0;

    const track  = document.querySelector('.projects-track');
    const slides = document.querySelectorAll('.projects-slide');
    const next   = document.querySelector('.projects-next');
    const prev   = document.querySelector('.projects-prev');

    if (!track || slides.length === 0 || !next || !prev) return;

    function updateCarousel() {
        track.style.transform = `translateX(-${index * 100}%)`;
    }

    next.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        updateCarousel();
    });

    prev.addEventListener('click', () => {
        index = (index - 1 + slides.length) % slides.length;
        updateCarousel();
    });

});
