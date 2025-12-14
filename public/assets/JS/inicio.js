

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

const data = [
    {
        img: "/WEBLINEA/public/assets/img/inicio/info1.png",
        text: "Contamos con maquinas repotenciadas solo para ti."
    },
    {
        img: "/WEBLINEA/public/assets/img/inicio/info2.png",
        text: "Servicio de calidad, trabajamos con los mejores diseñadores y maquinas "
    },
    {
        img: "/WEBLINEA/public/assets/img/inicio/info3.png",
        text: "Mejores proyectos, solo con nosotros."
    }
];

let centerIndex = 1;

const slots = {
    left: document.querySelector(".card-slot.left"),
    center: document.querySelector(".card-slot.center"),
    right: document.querySelector(".card-slot.right")
};

function render(direction = "next") {

    const exitClass = direction === "next"
        ? "card-exit-left"
        : "card-exit-right";

    // animar salida SOLO de las tarjetas actuales
    document.querySelectorAll(".info-card").forEach(card => {
        card.classList.add(exitClass);
    });

    setTimeout(() => {

        const left = (centerIndex - 1 + data.length) % data.length;
        const right = (centerIndex + 1) % data.length;

        slots.left.innerHTML = cardHTML(data[left]);
        slots.center.innerHTML = cardHTML(data[centerIndex]);
        slots.right.innerHTML = cardHTML(data[right]);

        slots.left.className = "card-slot left is-left";
        slots.center.className = "card-slot center is-center";
        slots.right.className = "card-slot right is-right";

        // preparar entrada
        document.querySelectorAll(".info-card").forEach(card => {
            card.classList.add("card-enter");
        });

        requestAnimationFrame(() => {
            document.querySelectorAll(".info-card").forEach(card => {
                card.classList.remove("card-enter");
            });
        });

    }, 220);
}

// botones
document.getElementById("infoNext").onclick = () => {
    centerIndex = (centerIndex + 1) % data.length;
    render("next");
};

document.getElementById("infoPrev").onclick = () => {
    centerIndex = (centerIndex - 1 + data.length) % data.length;
    render("prev");
};

// autoplay
setInterval(() => {
    centerIndex = (centerIndex + 1) % data.length;
    render("next");
}, 4500);

// inicial
render();


function cardHTML(item) {
    return `
        <div class="info-card">
            <img src="${item.img}">
            <p>${item.text}</p>
        </div>
    `;
}

document.getElementById("infoNext").onclick = () => {
    centerIndex = (centerIndex + 1) % data.length;
    render();
};

document.getElementById("infoPrev").onclick = () => {
    centerIndex = (centerIndex - 1 + data.length) % data.length;
    render();
};

// autoplay
setInterval(() => {
    centerIndex = (centerIndex + 1) % data.length;
    render();
}, 4500);

render();