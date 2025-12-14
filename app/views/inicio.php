<?php if (!empty($pageStyles)): ?>
        <?php foreach ($pageStyles as $css): ?>
            <link rel="stylesheet" href="<?= Routes::css($css); ?>">
        <?php endforeach; ?>
    <?php endif; ?>
<section class="hero">
     
    <div class="carousel" id="carousel">

        <div class="carousel-track">
            <div class="slide active">
                <img src="<?php echo Routes::img('inicio/slide1.png'); ?>" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="<?php echo Routes::img('inicio/slide2.png'); ?>" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="<?php echo Routes::img('inicio/slide3.png'); ?>" alt="Slide 3">
            </div>
        </div>

        <div class="carousel-indicators">
            <button class="indicator active" data-slide="0"></button>
            <button class="indicator" data-slide="1"></button>
            <button class="indicator" data-slide="2"></button>
        </div>

    </div>
</section>

<section class="info-section">

   <h2 class="info-title">
        <span>CONÓCENOS</span>
   </h2>

   <p class="info-text">
         LINEA GRAFICA XXI S.A.C. fue fundada el 26 de Septiembre del 2003, gracias 
        a la dedicación y esfuerzo de la familia Aguilar Beltrán, con el paso del tiempo
        fuimos evolucionando hasta llegar a ser reconocidos en el mercado por la calidad,
        eficiencia y puntualidad que brindamos en nuestros servicios. Con la trayectoria 
        que mantenía hasta ese momento fue ampliando su cartera de clientes y junto con
        ella, la responsabilidad que esto significaba. Con esfuerzo se hizo posible 
        implementar nuevas maquinarias y contratar personal calificado con la única 
        finalidad de seguir mejorando su servicio.
   </p>

   <div class="info-carousel">

        <div class="card-slot left"></div>

        <div class="center-wrapper">
            <button class="info-arrow left" id="infoPrev">&#10094;</button>

            <div class="card-slot center"></div>

            <button class="info-arrow right" id="infoNext">&#10095;</button>
        </div>

        <div class="card-slot right"></div>
   </div>

</section>
