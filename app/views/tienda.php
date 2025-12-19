<?php if (!empty($pageStyles)): ?>
        <?php foreach ($pageStyles as $css): ?>
            <link rel="stylesheet" href="<?= Routes::css($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>

<section class="info-section">

   <h2 class="info-title">
        <span>DISEÑO Y ARTE</span>
   </h2>

   <div class="info-box">
        <div class="info-image">
            <img src="<?= Routes::imgTienda('trabajador_de_linea_1.png'); ?>" alt="Diseño y Arte">
        </div>

        <div class="info-text">
            <p>
                Bienvenido a la parte de diseño y arte, ahora podrás ver nuestros
                proyectos. <strong>¡Continúa navegando!</strong>
            </p>
        </div>
    </div>

    <h2 class="info-title">
        <span>LO MEJOR EN PRODUCCIÓN DE DISEÑO</span>
    </h2>

        <div class="info-text">
            <p>
                El soporte integral y la excelencia en la calidad de cada <br> proyecto son nuestros pilares fundamentales.
            </p>
        </div>

        <div class="cards-container">

            <!-- CARD 1 -->
            <article class="info-card">

                <div class="card-header">
                    <h3 class="card-title">Material Publicitario</h3>
                </div>

                <div class="card-body">
                    <div class="card-image">
                        <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_1.png'); ?>" alt="Diseño Gráfico">
                    </div>

                    <ul class="card-list">
                        <li>Volantes, díptico y trípticos.</li>
                        <li>Stickers personalizados en couche y polipropileno para equipos de frío</li>
                        <li>Paletas,  collarines y cadenetas.</li>
                        <li>Bolsas couche.</li>
                        <li>Cupones, table tent, banners.</li>
                    </ul>

                    <a href="#" class="card-btn" data-service="publicitario">
                        <span class="btn-icon">❯</span>
                        Descubre más
                    </a>
                </div>
            </article>

            <!-- CARD 2 -->
            <article class="info-card">

                <div class="card-header">
                    <h3 class="card-title">Material Editorial</h3>
                </div>

                <div class="card-body">
                    <div class="card-image">
                        <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>" alt="Producción">
                    </div>

                    <ul class="card-list">
                        <li>Certificados en papel seguridad</li>
                        <li>Diplomas con tinta de seguridad</li>
                        <li>Brochure</li>
                        <li>Libros académicos</li>
                        <li>Catálogos</li>
                    </ul>

                    <a href="#" class="card-btn" data-service="editorial">
                        <span class="btn-icon">❯</span>
                        Descubre más
                    </a>
                </div>
            </article>

            <!-- CARD 3 -->
            <article class="info-card">
                <div class="card-header">
                    <h3 class="card-title">Productos Especiales</h3>
                </div>

                <div class="card-body">
                    <div class="card-image">
                        <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_3.png'); ?>" alt="Innovación">
                    </div>

                    <ul class="card-list">
                        <li>Vibrines para góndolas.</li>
                        <li>Ánforas.</li>
                        <li>Cajas personalizadas en duplex, tapa dura con cierre imantado.</li>
                        <li>Cuadernos personalizados.</li>
                        <li>Display.</li>
                    </ul>

                    <a href="#" class="card-btn" data-service="especiales">
                        <span class="btn-icon">❯</span>
                        Descubre más
                    </a>
                </div>
            </article>

        </div>

        <section class="service-feature hidden" id="service-publicitario">

            <!-- HEADER -->
            <div class="service-header">
                <h3 class="service-title">Material Publicitario</h3>

                <button class="service-back" data-back aria-label="Volver">❮</button>
            </div>

            <!-- CONTENT -->
            <div class="service-content">

                <!-- ITEM 1 -->
                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_1.png'); ?>" alt="">
                    <ul>
                        <li>Certificados</li>
                        <li>Diplomas</li>
                    </ul>
                </div>

                <!-- ITEM 2 -->
                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>" alt="">
                    <ul>
                        <li>Certificados</li>
                        <li>Diplomas</li>
                    </ul>
                </div>

                <!-- ITEM 3 -->
                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_3.png'); ?>" alt="">
                    <ul>
                        <li>Certificados</li>
                        <li>Diplomas</li>
                    </ul>
                </div>

            </div>

            <!-- ACTION -->
            <div class="service-action">
                <a href="#" class="service-btn">Cotizar ahora</a>
            </div>

        </section>

        <!-- MATERIAL EDITORIAL -->

        <section class="service-feature hidden" id="service-editorial">

            <div class="service-header">
                <h3 class="service-title">Material Editorial</h3>

                <button class="service-back" data-back aria-label="Volver">❮</button>
            </div>

            <div class="service-content">
                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>" alt="">
                    <ul>
                        <li>Certificados en papel seguridad</li>
                        <li>Diplomas con tinta especial</li>
                    </ul>
                </div>

                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_3.png'); ?>" alt="">
                    <ul>
                        <li>Libros académicos</li>
                        <li>Catálogos</li>
                    </ul>
                </div>

                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_1.png'); ?>" alt="">
                    <ul>
                        <li>Brochures</li>
                    </ul>
                </div>
            </div>

            <div class="service-action">
                <a href="#" class="service-btn">Cotizar ahora</a>
            </div>

        </section>

        <!-- MATERIAL ESPECIALES -->

        <section class="service-feature hidden" id="service-especiales">

            <div class="service-header">
                <h3 class="service-title">Productos Especiales</h3>

                <button class="service-back" data-back aria-label="Volver">❮</button>
            </div>

            <div class="service-content">
                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_3.png'); ?>" alt="">
                    <ul>
                        <li>Vibrines para góndolas</li>
                        <li>Ánforas</li>
                    </ul>
                </div>

                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_1.png'); ?>" alt="">
                    <ul>
                        <li>Cajas imantadas</li>
                        <li>Tapa dura</li>
                    </ul>
                </div>

                <div class="service-item">
                    <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>" alt="">
                    <ul>
                        <li>Cuadernos personalizados</li>
                        <li>Display</li>
                    </ul>
                </div>
            </div>

            <div class="service-action">
                <a href="#" class="service-btn">Cotizar ahora</a>
            </div>

        </section>

    <h2 class="info-title">
        <span>CONTÁCTANOS</span>
    </h2>

    <h2 class="info-title">
        <span>ENCUENTRANOS</span>
    </h2>

</section>


