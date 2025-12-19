</main>

<footer class="footer">
    <div class="footer-container">

        <!-- Enlaces rápidos -->
        <div class="footer-column">
            <h4 class="footer-title">Enlaces rápidos</h4>

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

            <p class="footer-copy">
                ©2025 Línea Gráfica. <br>
                Todos los derechos reservados
            </p>
        </div>

        <!-- Contacto -->
        <div class="footer-column">
            <h4 class="footer-title">Contáctanos</h4>

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
        </div>
    </div>
</footer>

<script src="<?php echo Routes::js('main.js'); ?>"></script>
<script src="<?php echo Routes::js('inicio.js'); ?>"></script>

<script src="<?php echo Routes::js('serviciosTienda.js'); ?>"></script>
<script src="<?php echo Routes::js('blog.js'); ?>"></script>
</body>
</html>
