document.addEventListener('DOMContentLoaded', () => {

    // 1. ACORDEONES PRINCIPALES
    const mainAccordions = document.querySelectorAll('.main-accordion');

    mainAccordions.forEach((accordion) => {
        accordion.addEventListener('toggle', () => {
            if (accordion.open) {
                // Cierra los otros acordeones principales
                mainAccordions.forEach((other) => {
                    if (other !== accordion) {
                        other.open = false;
                    }
                });
            } else {
                // Si cerramos el acordeón principal (Canal de Denuncias), 
                // cerramos también todos sus sub-formularios internos
                const subAccordions = accordion.querySelectorAll('.sub-accordion');
                subAccordions.forEach(sub => sub.open = false);
            }
        });
    });

    // 2. SUB-ACORDEONES (Persona Natural, Jurídica, Anónima)
    const subAccordions = document.querySelectorAll('.sub-accordion');

    subAccordions.forEach((subAccordion) => {
        subAccordion.addEventListener('toggle', () => {
            if (subAccordion.open) {
                // Cierra los otros sub-formularios activos
                subAccordions.forEach((otherSub) => {
                    if (otherSub !== subAccordion) {
                        otherSub.open = false;
                    }
                });
            }
        });
    });

    // 3. EVENTO PARA EL BANNER ROSADO (Cierra el sub-acordeón al hacer clic)
    const formBanners = document.querySelectorAll('.form-banner');

    formBanners.forEach((banner) => {
        banner.addEventListener('click', () => {
            // Busca el sub-acordeón padre y lo cierra
            const parentSubAccordion = banner.closest('.sub-accordion');
            if (parentSubAccordion) {
                parentSubAccordion.open = false;
            }
        });
    });

    // 4. MUESTRA NOMBRE DE ARCHIVO
    const fileInputs = document.querySelectorAll('.file-input');

    fileInputs.forEach((input) => {
        input.addEventListener('change', (e) => {
            const fileNameSpan = input.nextElementSibling;
            if (e.target.files.length > 0) {
                fileNameSpan.textContent = e.target.files[0].name;
            } else {
                fileNameSpan.textContent = 'Sin archivos seleccionados';
            }
        });
    });

    // 5. ENVÍO DE FORMULARIOS
    const forms = document.querySelectorAll('.custom-form');

    forms.forEach((form) => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            console.log('Enviado desde:', form.id, data);
            alert('Formulario enviado correctamente.');
        });
    });

});