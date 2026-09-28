document.addEventListener('DOMContentLoaded', function() {
    const quejasForms = document.querySelectorAll('.custom-form');
    
    // Elementos del Modal
    const modal = document.getElementById('custom-modal');
    const modalIcon = document.getElementById('modal-icon');
    const modalTitle = document.getElementById('modal-title');
    const modalMessage = document.getElementById('modal-message');
    const modalActions = document.getElementById('modal-actions');

    // Iconos SVG
    const checkIcon = `<svg fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>`;
    const errorIcon = `<svg fill="none" stroke="currentColor" stroke-width="4" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>`;

    // Función para manejar el Modal
    function showModal(type, title, message = '', onConfirm = null) {
        modalTitle.textContent = title;
        
        if (message) {
            modalMessage.textContent = message;
            modalMessage.classList.add('active');
        } else {
            modalMessage.classList.remove('active');
        }
        
        modalActions.innerHTML = ''; // Limpiar botones
        modalIcon.className = 'modal-icon'; // Reset clases
        
        if (type === 'confirm') {
            modalIcon.innerHTML = checkIcon; 
            
            const btnConfirm = document.createElement('button');
            btnConfirm.className = 'btn-modal btn-confirm';
            btnConfirm.textContent = 'SÍ, ENVIAR';
            btnConfirm.onclick = () => {
                closeModal();
                if (onConfirm) onConfirm();
            };

            const btnCancel = document.createElement('button');
            btnCancel.className = 'btn-modal btn-cancel';
            btnCancel.textContent = 'NO, VOLVER';
            btnCancel.onclick = closeModal;

            modalActions.appendChild(btnConfirm);
            modalActions.appendChild(btnCancel);
        } 
        else if (type === 'success' || type === 'error') {
            modalIcon.classList.add(type === 'success' ? 'icon-success' : 'icon-error');
            modalIcon.innerHTML = type === 'success' ? checkIcon : errorIcon;

            const btnOk = document.createElement('button');
            btnOk.className = 'btn-modal btn-ok';
            btnOk.textContent = 'ENTENDIDO';
            btnOk.onclick = closeModal;
            
            modalActions.appendChild(btnOk);
        }

        modal.classList.add('active');
    }

    function closeModal() {
        modal.classList.remove('active');
    }

    // Interceptar el envío de los formularios
    quejasForms.forEach(form => {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // 1. Llamamos al modal de Confirmación
            showModal('confirm', '¿Estás seguro de enviar tu queja?', '', () => {
                
                // 2. Si el usuario confirma, procedemos con el Fetch
                const btnSubmit = form.querySelector('.btn-submit');
                const originalText = btnSubmit.innerHTML;
                btnSubmit.innerHTML = 'ENVIANDO...';
                btnSubmit.disabled = true;

                const formData = new FormData(form);

                // ==========================================
                // 🛠️ MODO PRUEBAS: VER QUÉ SE ESTÁ ENVIANDO
                // ==========================================
                //console.log('--- DATOS ENVIADOS AL PHP ---');
                //for (let [key, value] of formData.entries()) {
                    // Imprime cada campo y su valor en la consola
                //    console.log(`${key}:`, value); 
                //}
                // ==========================================

                fetch('/linea_grafica/app/views/enviar.php', {
                    method: 'POST',
                    body: formData
                })
                .then(res => {
                    if (!res.ok) throw new Error('Error en el servidor');
                    return res.json();
                })
                .then(data => {
                    if (data.success) {
                        // Lanzar Modal de Éxito
                        showModal('success', '¡Enviado!', 'Su solicitud ha sido enviada correctamente.');
                        form.reset();
                        
                        const fileNameSpan = form.querySelector('.file-name');
                        if(fileNameSpan) fileNameSpan.textContent = 'Sin archivos seleccionados';
                    } else {
                        // Lanzar Modal de Error
                        showModal('error', 'Error', data.msg);
                    }
                })
                .catch(error => {
                    showModal('error', 'Error de conexión', 'Ocurrió un problema de red. Inténtelo nuevamente.');
                })
                .finally(() => {
                    btnSubmit.innerHTML = originalText;
                    btnSubmit.disabled = false;
                });
            });
        });
    });

    // Pequeño script para el input file (nombre del archivo)
    const fileInputs = document.querySelectorAll('.file-input');
    fileInputs.forEach(input => {
        input.addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'Sin archivos seleccionados';
            const nameDisplay = this.parentElement.querySelector('.file-name');
            if(nameDisplay) nameDisplay.textContent = fileName;
        });
    });
});