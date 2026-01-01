<link 
  rel="stylesheet" 
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
/>

</main>

<footer class="footer">
    <div class="footer-container">

        <!-- Encabezados -->
        <div class="footer-headings">
            <h4 class="footer-title">Enlaces rápidos</h4>
            <h4 class="footer-title">Contáctanos</h4>
        </div>

        <!-- Grilla de filas alineadas -->
        <div class="footer-grid">

            <!-- Columna Enlaces -->
            <ul class="footer-links">
                <li>
                    <a href="<?php echo Routes::url('acerca'); ?>">
                        <span class="icon">
                            <img src="<?php echo Routes::img('footer/acerca.png'); ?>" alt="">
                        </span>
                        Acerca de nosotros
                    </a>
                </li>

                <li>
                    <a href="<?php echo Routes::url('politicas'); ?>">
                        <span class="icon">
                            <img src="<?php echo Routes::img('footer/politicas.png'); ?>" alt="">
                        </span>
                        Nuestras políticas
                    </a>
                </li>

                <li>
                    <a href="<?php echo Routes::url('preguntas'); ?>">
                        <span class="icon">
                            <img src="<?php echo Routes::img('footer/preguntas.png'); ?>" alt="">
                        </span>
                        Preguntas frecuentes
                    </a>
                </li>
                
            </ul>

            <!-- Columna Contacto -->
            <ul class="footer-contact">
                <li>
                    <span class="icon">
                        <img src="<?php echo Routes::img('footer/ubicacion.png'); ?>" alt="">
                    </span>
                    Av. Bolivia 729 Breña, Lima – Perú
                </li>

                <li>
                    <span class="icon">
                        <img src="<?php echo Routes::img('footer/telefono.png'); ?>" alt="">
                    </span>
                    +51 940 909 749
                </li>

                <li>
                    <span class="icon">
                        <img src="<?php echo Routes::img('footer/correo.png'); ?>" alt="">
                    </span>
                    ventas@lineagraficaxxi.com
                </li>
            </ul>
 <p class="footer-copy">
            ©2025 Línea Gráfica. Todos los derechos reservados
        </p>
        </div>
    </div>
</footer>


<script src="<?php echo Routes::js('main.js'); ?>"></script>
<script src="<?php echo Routes::js('inicio.js'); ?>"></script>
<script src="<?php echo Routes::js('blog.js'); ?>"></script>
<script src="<?= Routes::js('blogCotizar.js'); ?>"></script>
<script src="<?= Routes::js('scrollFaq.js'); ?>"></script>
<script src="<?= Routes::js('smoothScroll.js'); ?>"></script>
</body>
</html>
