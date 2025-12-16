
document.addEventListener('DOMContentLoaded', function () {

    let index = 0;
    const track = document.querySelector('.alt-track');
    const slides = document.querySelectorAll('.alt-slide');
    const next = document.querySelector('.alt-next');
    const prev = document.querySelector('.alt-prev');

    console.log(track, slides, next, prev); // DEBUG

    if (!track || slides.length === 0 || !next || !prev) {
        console.error('Carrusel: elementos no encontrados');
        return;
    }

    next.addEventListener('click', () => {
        index = (index + 1) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
    });

   prev.addEventListener('click', () => {
    if (index === 0) {
        index = slides.length - 1;
    } else {
        index--;
    }
    track.style.transform = `translateX(-${index * 100}%)`;
});
prev.addEventListener('click', () => {
    console.log('CLICK PREV', index);
    if (index === 0) {
        index = slides.length - 1;
    } else {
        index--;
    }
    track.style.transform = `translateX(-${index * 100}%)`;
});

});

