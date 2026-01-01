</main>

<footer class="footer footer-tienda">
    <div class="footer-container">

        <!-- Encabezados (MISMA ESTRUCTURA) -->
        <div class="footer-headings">
            <h4 class="footer-title">Enlaces rápidos</h4>
        </div>

        <!-- Grid (MISMA ESTRUCTURA, una sola columna) -->
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

            <!-- Copyright (MISMA POSICIÓN QUE EL ORIGINAL) -->
            <p class="footer-copy">
                ©2025 Línea Gráfica. Todos los derechos reservados
            </p>

        </div>
    </div>
</footer>
<script src="<?php echo Routes::js('serviciosTienda.js'); ?>"></script>
<script src="<?php echo Routes::js('resposiveTienda.js'); ?>"></script>
<script src="<?= Routes::js('smoothScroll.js'); ?>"></script>
<script src="<?= Routes::js('scrollPortada.js'); ?>"></script>
<script src="<?= Routes::js('scrollCotizar.js'); ?>"></script>
<script src="<?= Routes::js('volverPortada.js'); ?>"></script>
<script src="<?= Routes::js('blogTiendaScrollt.js'); ?>"></script>
</body>
</html>
