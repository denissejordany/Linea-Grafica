<?php if (!empty($pageStyles)): ?>
        <?php foreach ($pageStyles as $css): ?>
            <link rel="stylesheet" href="<?= Routes::css($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>

<section class="info-section">

   <h2 class="info-title" id="diseno-arte">
        <span>DISEÑO Y ARTE</span>
   </h2>

   <div class="info-box">
        <div class="info-image">
            <img src="<?= Routes::imgTienda('trabajador_de_linea_1.png'); ?>" alt="Diseño y Arte">
        </div>

        <div class="info-text">
            <p class="info-lines">
                Bienvenido a la parte<br>
                de diseño y arte,<br>
                ahora podrás ver<br>
                nuestros proyectos,<br>
                <strong>¡Continúa navegando!</strong>
            </p>
            <a href="#" class="card-btn-port" data-service="publicitario">
                <span class="btn-icon">❯</span>
                Descubre más
            </a>
        </div>
    </div>

    <h2 class="info-title" id="produccion-diseno">
        <span>LO MEJOR EN PRODUCCIÓN DE DISEÑO</span>
    </h2>

        <div class="info-text-tema">
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

        <!-- RESPONSIVE SERVICES -->
        <section class="mobile-services">

            <!-- PUBLICITARIO -->
            <article class="mobile-service">
                <h3 class="mobile-title">Material Publicitario</h3>

                <div class="mobile-carousel">
                    <button class="carousel-btn prev">❮</button>

                    <div class="carousel-viewport">
                        <div class="carousel-track-tienda">
                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('carrusel-tienda-1.png'); ?>">
                                <ul>
                                    <li>Paletas,  collarines y cadenetas.</li>
                                    <li>Bolsas couche.</li>
                                    <li>Cupones, table tent, banners.</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('carrusel-tienda-2.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('carrusel-tienda-3.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                    <li>p</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-btn next">❯</button>
                </div>

                <a href="#" class="mobile-btn">Cotizar ahora</a>
            </article>

            <!-- EDITORIAL -->
            <article class="mobile-service">
                <h3 class="mobile-title">Material Editorial</h3>

                <div class="mobile-carousel">
                    <button class="carousel-btn prev">❮</button>

                    <div class="carousel-viewport">
                        <div class="carousel-track-tienda">
                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('carrusel-tienda-2.png'); ?>">
                                <ul>
                                    <li>Brochure</li>
                                    <li>Libros académicos</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-btn next">❯</button>
                </div>

                <a href="#" class="mobile-btn">Cotizar ahora</a>
            </article>

            <!-- ESPECIALES -->
            <article class="mobile-service">
                <h3 class="mobile-title">Productos Especiales</h3>
                
                <div class="mobile-carousel">
                    <button class="carousel-btn prev">❮</button>

                    <div class="carousel-viewport">
                        <div class="carousel-track-tienda">
                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('carrusel-tienda-2.png'); ?>">
                                <ul>
                                    <li>Cajas personalizadas en duplex, tapa dura con <br> cierre imantado.</li>
                                    <li>Cuadernos personalizados.</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                </ul>
                            </div>

                            <div class="carousel-item">
                                <img src="<?= Routes::imgTienda('Catalogo_Linea_Grafica_2.png'); ?>">
                                <ul>
                                    <li>Banners</li>
                                    <li>Cupones</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-btn next">❯</button>
                </div>

                <a href="#" class="mobile-btn">Cotizar ahora</a>

            </article>

        </section>


    <h2 class="info-title" id="contactanos">
        <span>CONTÁCTANOS</span>
    </h2>

        <section class="contact-section">

        <div class="contact-text">
            <p>
                ¿Listo para llevar tu marca al siguiente nivel?<br>
                ¡Que el cambio sea hoy!
            </p>
        </div>

        <form class="contact-form">

            <div class="contact-group">
                <label for="contact-name">Nombre completo</label>
                <input 
                    type="text" 
                    id="contact-name" 
                    name="name" 
                    placeholder="Ingresa tu nombre completo"
                    required
                >
            </div>

            <div class="contact-group">
                <label for="contact-email">Correo electrónico</label>
                <input 
                    type="email" 
                    id="contact-email" 
                    name="email" 
                    placeholder="correo@ejemplo.com"
                    required
                >
            </div>

            <div class="contact-group">
                <label for="contact-phone">Número de celular</label>
                <input 
                    type="tel" 
                    id="contact-phone" 
                    name="phone" 
                    placeholder="987 654 321"
                    required
                >
            </div>

            <div class="contact-group">
                <label for="contact-message">Mensaje</label>
                <textarea 
                    id="contact-message" 
                    name="message" 
                    placeholder="Escribe tu mensaje aquí..."
                    rows="4"
                    required
                ></textarea>
            </div>

            <div class="contact-actions">
                <button type="submit" class="contact-btn contact-btn-send">
                    Enviar mensaje
                </button>

                <button type="button" class="contact-btn contact-btn-back">
                    Volver
                </button>
            </div>

        </form>

</section>

    <h2 class="info-title">
        <span>ENCUENTRANOS</span>
    </h2>

    <section class="findus-section">

        <div class="findus-container">

            <!-- INFO IZQUIERDA -->
            <div class="findus-info">

                <!-- ITEM -->
                <div class="findus-item">
                    <div class="findus-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="findus-text">
                        <span class="findus-label">Ubícanos en:</span>
                        <p>Av. Bolivia 729 - Breña, Lima - Perú</p>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="findus-item">
                    <div class="findus-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="findus-text">
                        <span class="findus-label">Llámanos:</span>
                        <p>+51 940 909 749</p>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="findus-item">
                    <div class="findus-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="findus-text">
                        <span class="findus-label">Gmail:</span>
                        <p>ventas@lineagraficaxxi.com</p>
                    </div>
                </div>

            </div>

            <!-- MAPA DERECHA -->
            <div class="findus-map">
                <iframe 
                    src="https://www.google.com/maps?q=Av.%20Bolivia%20729%20Bre%C3%B1a%20Lima%20Per%C3%BA&output=embed"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>

    </section>

</section>

