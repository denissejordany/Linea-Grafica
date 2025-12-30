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
 <div class="info-content">
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

   <div class="info-carousel" id="carousel-info">

        <div class="card-slot left"></div>

        <div class="center-wrapper">
            <button class="info-arrow left" id="infoPrev">&#10094;</button>

            <div class="card-slot center"></div>

            <button class="info-arrow right" id="infoNext">&#10095;</button>
        </div>

        <div class="card-slot right"></div>
        
   </div><br><br><br>
<div class="cotizar-wrapper">
    
    <a href="#cotizar" class="btn-cotizar">Cotizar ahora</a>
</div>
<br>
</div>
   <!--- MEJORES PROYECTOS ------------------>

   <h2 class="info-title">
        <span>MEJORES PROYECTOS</span>
   </h2><br><br>
 <div class="info-carousel" id="carousel-services">

        <div class="card-slot left"></div>

        <div class="center-wrapper">
            <button class="info-arrow left" id="infoPrev">&#10094;</button>

            <div class="card-slot center"></div>

            <button class="info-arrow right" id="infoNext">&#10095;</button>
        </div>

        <div class="card-slot right"></div>
</div>
 <div class="info-center-text2">
        <p>No esperes más, cotiza ahora</p>
    </div><br>
   <div class="cotizar-wrapper">
    <a href="#cotizar" class="btn-cotizar">Cotizar ahora</a>
   </div>
<br>
<!----------NUESTROS CLIENTES-------->

 <h2 class="info-title">
        <span>NUESTROS CLIENTES</span>
   </h2>
   <section class="clientes">
    

    <div class="clientes-grid">
        <img src="<?php echo Routes::img('inicio/cliente1.png'); ?>" alt="Arca Continental">
        <img src="<?php echo Routes::img('inicio/cliente2.png'); ?>" alt="Rokys">
        <img src="<?php echo Routes::img('inicio/cliente3.png'); ?>" alt="Trilce">
        <img src="<?php echo Routes::img('inicio/cliente4.png'); ?>" alt="Pardos Chicken">
        <img src="<?php echo Routes::img('inicio/cliente5.png'); ?>" alt="Fuxion">
        <img src="<?php echo Routes::img('inicio/cliente6.png'); ?>" alt="Celima">
        <img src="<?php echo Routes::img('inicio/cliente7.png'); ?>" alt="Trebol">
        <img src="<?php echo Routes::img('inicio/cliente8.png'); ?>" alt="AAP">
        <img src="<?php echo Routes::img('inicio/cliente9.png'); ?>" alt="Clinica Loayza">
        <img src="<?php echo Routes::img('inicio/cliente10.png'); ?>" alt="Financiera Confianza">
        <img src="<?php echo Routes::img('inicio/cliente11.png'); ?>" alt="Layconsa">
    </div>
</section>

</section>
