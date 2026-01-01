document.addEventListener('DOMContentLoaded', () => {

    document.querySelectorAll('.mobile-carousel').forEach(carousel => {

        const track = carousel.querySelector('.carousel-track-tienda');
        const items = track.children;
        const nextBtn = carousel.querySelector('.next');
        const prevBtn = carousel.querySelector('.prev');

        let index = 0;

        const updateCarousel = () => {
            track.style.transform = `translateX(-${index * 100}%)`;
        };

        nextBtn.addEventListener('click', () => {
            index = (index + 1) % items.length;
            updateCarousel();
        });

        prevBtn.addEventListener('click', () => {
            index = (index - 1 + items.length) % items.length;
            updateCarousel();
        });

    });

});
