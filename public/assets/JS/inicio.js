

const slides = document.querySelectorAll(".slide");
const indicators = document.querySelectorAll(".indicator");

let currentIndex = 0;
let interval = setInterval(nextSlide, 5000);

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
        indicators[i].classList.toggle("active", i === index);
    });
    currentIndex = index;
}

function nextSlide() {
    let next = (currentIndex + 1) % slides.length;
    showSlide(next);
}

indicators.forEach(indicator => {
    indicator.addEventListener("click", () => {
        clearInterval(interval);
        showSlide(Number(indicator.dataset.slide));
        interval = setInterval(nextSlide, 5000);
    });
});

//CARRUSEL-------------------------------------------

//Conocenos
const dataInfo = [
    { img: "/WEBLINEA/public/assets/img/inicio/info1.png", text: "Contamos con maquinas repotenciadas." },
    { img: "/WEBLINEA/public/assets/img/inicio/info2.png", text: "Servicio de calidad garantizado." },
    { img: "/WEBLINEA/public/assets/img/inicio/info3.png", text: "Mejores proyectos con nosotros." }
];
//Mejores proyectos
const dataServices = [
    { img: "/WEBLINEA/public/assets/img/inicio/proyect1.png", text: "Material Publicitario." },
    { img: "/WEBLINEA/public/assets/img/inicio/proyect2.png", text: "Material Editorial." },
    { img: "/WEBLINEA/public/assets/img/inicio/proyect3.png", text: "Productos Especiales." }
];
//Inicializar carruseles
   InfoCarousel("#carousel-info", dataInfo);
    InfoCarousel("#carousel-services", dataServices, 5000);
    

    function InfoCarousel(containerSelector, data, interval = 4500) {

        const container = document.querySelector(containerSelector);
        if (!container) return;

        let centerIndex = 1;
        let timer = null;

        const slots = {
            left: container.querySelector(".card-slot.left"),
            center: container.querySelector(".card-slot.center"),
            right: container.querySelector(".card-slot.right")
        };

        const btnPrev = container.querySelector(".info-arrow.left");
        const btnNext = container.querySelector(".info-arrow.right");

        function cardHTML(item) {
            return `
                <div class="info-card">
                    <img src="${item.img}" alt="">
                    <p>${item.text}</p>
                </div>
            `;
        }

        function render(direction = "next") {

            const exitClass = direction === "next"
                ? "card-exit-left"
                : "card-exit-right";

            container.querySelectorAll(".info-card").forEach(card => {
                card.classList.add(exitClass);
            });

            setTimeout(() => {

                const leftIndex = (centerIndex - 1 + data.length) % data.length;
                const rightIndex = (centerIndex + 1) % data.length;

                slots.left.innerHTML = cardHTML(data[leftIndex]);
                slots.center.innerHTML = cardHTML(data[centerIndex]);
                slots.right.innerHTML = cardHTML(data[rightIndex]);

                slots.left.className = "card-slot left is-left";
                slots.center.className = "card-slot center is-center";
                slots.right.className = "card-slot right is-right";

                container.querySelectorAll(".info-card").forEach(card => {
                    card.classList.add("card-enter");
                });

                requestAnimationFrame(() => {
                    container.querySelectorAll(".info-card").forEach(card => {
                        card.classList.remove("card-enter");
                    });
                });

            }, 220);
        }

        function next() {
            centerIndex = (centerIndex + 1) % data.length;
            render("next");
        }

        function prev() {
            centerIndex = (centerIndex - 1 + data.length) % data.length;
            render("prev");
        }

        btnNext && (btnNext.onclick = next);
        btnPrev && (btnPrev.onclick = prev);

        timer = setInterval(next, interval);

        render();
    }

    /* ==========================
       EXPONER FUNCIÓN GLOBAL
    ========================== */
    window.InfoCarousel = InfoCarousel;


