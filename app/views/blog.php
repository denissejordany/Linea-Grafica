<!----------SOBRE NOSOTROS-------->
<h2 class="info-title">
    <span>SOBRE NOSOTROS</span>
</h2>
<section class="nosotros-section">
    <div class="mision-bg">
        <div class="mision-box">
            <h2>MISIÓN</h2>
            <p>
                Buscamos trascender la expectativa, comprometiéndonos en brindar un servicio,
                ágil y ético. Dandoles a nuestros usuarios calidad, tiempo y precio justo.
            </p>
        </div>
    </div>
    <br><br> <br>
    <div class="vision-bg">
        <div class="vision-box">
            <h2>VISIÓN</h2>
            <p>
                Consolidar nuestro liderazgo en las artes gráficas, impulsando la innovación
                continua en nuestros productos y métodos para ofrecer un servicio inigualable
                y destacar entre nuestros clientes.
            </p>
        </div>
    </div>
    <br> <br> <br> <br> <br><br> <br>
    <div class="nosotros-cards">
        <a href="#" class="nosotros-card fotos">
            <img src="<?php echo Routes::img('blog/fotos.png'); ?>" alt="Fotos">
            <span>FOTOS</span>
        </a>

        <a href="#" class="nosotros-card proyectos">
            <img src="<?php echo Routes::img('blog/proyectos.png'); ?>" alt="Proyectos">
            <span>PROYECTOS</span>
        </a>
    </div><br> <br><br> <br>
</section>

<!----------FOTOS DE LAS INSTALACIONES-------->
<h2 class="info-title">
    <span>FOTOS DE LAS INSTALACIONES</span>
</h2> <br><br>
<section class="alt-carousel">
    <div class="alt-carousel-inner">

        <div class="alt-track">
            <!-- Slide 1 -->
            <div class="alt-slide">
                <div class="alt-text">
                    PROYECTOS DE ALTA CALIDAD
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto1.png'); ?>">
                </div>
            </div>

            <!-- Slide 2 invertido -->
            <div class="alt-slide reverse">
                <div class="alt-text">
                    LOS MEJORES DISEÑADORES SOLO CON NOSOTROS
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto2.png'); ?>">
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="alt-slide">
                <div class="alt-text">
                   CONTAMOS CON LAS PRODUCCIÓN DE CALIDAD SOLO PARA TI
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto3.png'); ?>">
                </div>
            </div>

            <!-- Slide 4 invertido -->
            <div class="alt-slide reverse">
                <div class="alt-text">
                    CADA DETALLE VALE LA PENA, SI TRABAJAMOS CONTIGO
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto4.png'); ?>">
                </div>
            </div>
            <!-- Slide 5 -->
            <div class="alt-slide">
                <div class="alt-text">
                    DEDICACIÓN EN CADA PIEZA
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto5.png'); ?>">
                </div>
            </div>

            <!-- Slide 6 invertido -->
            <div class="alt-slide reverse">
                <div class="alt-text">
                    TOMAMOS ENSERIO CADA PROYECTO
                </div>
                <div class="alt-image">
                    <img src="<?php echo Routes::img('blog/foto6.png'); ?>">
                </div>
            </div>
        </div>
 <div class="alt-dots">
    <?php for ($i = 0; $i < 6; $i++): ?>
        <button class="alt-dot" data-slide="<?php echo $i; ?>"></button>
    <?php endfor; ?>
 </div>

        <button type="button" class="alt-btn alt-prev" aria-label="Slide anterior">
            &#10094;
        </button>

        <button type="button" class="alt-btn alt-next" aria-label="Slide siguiente">
            &#10095;
        </button>

 <br><br>
    </div>
</section>


<!----------PROYECTOS-------->
<h2 class="info-title">
    <span>PROYECTOS</span>
</h2>
<h4>Dale clic a la imagen y descubre más sobre nuestros proyectos</h4>
<section class="projects-carousel">
    <div class="projects-carousel-inner">

        <button type="button" class="projects-btn projects-prev" aria-label="Proyecto anterior">
            &#10094;
        </button>

        <div class="projects-track">

            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto1.png'); ?>" alt="Proyecto 1">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Cuadernos y brochure</h3>
                    <p class="projects-text">
                        Le garantizamos la máxima calidad en cada tirada junto a un
                        servicio inigualable para todos sus proyectos de cuadernos y brochures.
                    </p>
                </div>
            </div>

            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto2.png'); ?>" alt="Proyecto 2">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Individuales personalisados</h3>
                    <p class="projects-text">
                        Ofrecemos individuales que no solo añaden un toque de distinción a sus platos y productos,
                        sino que también cumplen con los más altos estándares de calidad gráfica.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto3.png'); ?>" alt="Proyecto 3">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Collarines y cadenetas</h3>
                    <p class="projects-text">
                        Le proporcionamos las soluciones más actuales y eficientes en cadenetas
                        y collarines para destacar sus productos en el mercado
                    </p>
                </div>
            </div>

            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto5.png'); ?>" alt="Proyecto 5">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Banners</h3>
                    <p class="projects-text">
                        Mientras la competencia invierte en visibilidad, nosotros le ofrecemos
                        la garantía de un producto de línea gráfica inigualable.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto6.png'); ?>" alt="Proyecto 6">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Raspa y ganal</h3>
                    <p class="projects-text">
                        Le ofrecemos una solución completa para sus boletos "Raspa y Gana",
                        asegurando calidad de impresión y manejo de la aleatoriedad de su proyecto
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto7.png'); ?>" alt="Proyecto 7">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Volantes y enmicados</h3>
                    <p class="projects-text">
                        Asegure que sus proyectos cuenten con la solidez de volantes impresos bajo los mejores estándares de calidad.
                        El enmicado ofrece una inversión inteligente al preservar la integridad de sus documentos importantes.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto8.png'); ?>" alt="Proyecto 8">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Marcador de precios</h3>
                    <p class="projects-text">
                        Un marcador de precios es un elemento vital para la transparencia y eficiencia operativa.
                        Es crucial disponer de marcadores de calidad que faciliten la señalización de sus productos.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto9.png'); ?>" alt="Proyecto 9">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Paleta - tablet tent</h3>
                    <p class="projects-text">
                        Nuestras paletas Tablet Tent son la solución ideal para comunicar ofertas y mensajes clave
                        directamente en el punto de decisión del cliente.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto10.png'); ?>" alt="Proyecto 10">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Cajas - display</h3>
                    <p class="projects-text">
                        Ofrecemos soluciones de empaque que se convierten en plataformas de marketing. Garantizamos la
                        calidad de la línea gráfica y la integridad estructural de sus cajas display.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto11.png'); ?>" alt="Proyecto 11">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Rompecabezas</h3>
                    <p class="projects-text">
                        Una manera creativa y tangible de comunicar su marca. Contamos con la mejor calidad para que su
                        diseño encaje perfectamente. Cotice su rompecabezas personalizado hoy.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto12.png'); ?>" alt="Proyecto 12">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Stickers</h3>
                    <p class="projects-text">
                        Los stickers son una herramienta de marketing simple pero poderosa para incrementar la visibilidad
                        de su marca. Ofrecemos alta calidad en impresión y adhesivos duraderos.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto13.png'); ?>" alt="Proyecto 13">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Cupones</h3>
                    <p class="projects-text">
                        Asegure que su estrategia de descuentos se ejecute con materiales de alta calidad y acabado profesional.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto14.png'); ?>" alt="Proyecto 14">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Afiches</h3>
                    <p class="projects-text">
                        Ponga su evento, promoción o anuncio en el foco con afiches producidos bajo los más altos
                        estándares de nuestra línea gráfica.
                    </p>
                </div>
            </div>
            <!-- Slide -->
            <div class="projects-slide">
                <div class="projects-image">
                    <img src="<?php echo Routes::img('blog/proyectos/proyecto4.png'); ?>" alt="Proyecto 4">
                </div>

                <div class="projects-content">
                    <h3 class="projects-subtitle">Cartas menú</h3>
                    <p class="projects-text">
                        Asegure que cada detalle de su oferta se comunique con elegancia y claridad con colores
                        vibrantes, textos legibles y materiales de primer nivel que reflejan la excelencia de su cocina.
                    </p>
                </div>
            </div>
        </div>
        <button type="button" class="projects-btn projects-next" aria-label="Proyecto siguiente">
            &#10095;
        </button>
    </div>
</section>

<div class="cotizar-wrapper">
    <a href="<?= Routes::url('tienda'); ?>#cotizar" class="btn-cotizar">
        Cotizar ahora
    </a>
</div><br><br>
<!---------- PREGUNTAS FRECUENTES-------->
<div class="faq-wrapper">
    <h2 class="info-title">
        <span> PREGUNTAS FRECUENTES</span>
    </h2>
    <section class="faq-highlights">
        <div class="faq-highlight-card">
            <div class="faq-highlight-container">

                <div class="faq-highlight-image">
                    <img src="<?php echo Routes::img('blog/pregunta1.png'); ?>" alt="Brochure ejemplo">
                </div>

                <div class="faq-highlight-content">
                    <h3 class="faq-highlight-title">¿Qué es un brochure?</h3>

                    <p class="faq-highlight-text">
                        Un brochure es un documento impreso o digital que tiene como objetivo
                        divulgar y describir una entidad, organización, producto, servicio
                        o evento en particular.
                    </p>

                    <button class="faq-highlight-btn-text" type="button" data-target="brochure-link">
                        <img src="<?php echo Routes::img('blog/bt_conoce.png'); ?>" alt="" class="faq-highlight-icon">
                        Conoce más

                    </button>
                </div>

            </div>
        </div>

        <!--  faq-highlight-card 2  -->
        <div class="faq-highlight-card">
            <div class="faq-highlight-container">

                <div class="faq-highlight-image">
                    <img src="<?php echo Routes::img('blog/pregunta2.png'); ?>" alt="Brochure ejemplo">
                </div>

                <div class="faq-highlight-content">
                    <h3 class="faq-highlight-title">¿Vale más calidad que el precio?</h3>

                    <p class="faq-highlight-text">

                        La respuesta a esta pregunta es un SÍ rotundo. La calidad, en realidad,
                        es lo que determina el valor y la satisfacción del cliente a largo plazo.
                    </p>

                    <button class="faq-highlight-btn-text" type="button" data-target="calidad-precio">
                        <img src="<?php echo Routes::img('blog/bt_conoce.png'); ?>" alt="" class="faq-highlight-icon">
                        Conoce más

                    </button>
                </div>

            </div>
        </div>

        <!--  faq-highlight-card 3  -->
        <div class="faq-highlight-card">
            <div class="faq-highlight-container">

                <div class="faq-highlight-image">
                    <img src="<?php echo Routes::img('blog/pregunta3.png'); ?>" alt="Brochure ejemplo">
                </div>

                <div class="faq-highlight-content">
                    <h3 class="faq-highlight-title"> ¿Los trabajos son mejor en RGB o CMYK?</h3>

                    <p class="faq-highlight-text">
                        La decisión de elegir entre los modos de color RGB y CMYK
                        para un trabajo depende totalmente del destino final que se tenga.

                    </p>

                    <button class="faq-highlight-btn-text" type="button" data-target="rgb-cmyk">
                        <img src="<?php echo Routes::img('blog/bt_conoce.png'); ?>" alt="" class="faq-highlight-icon">
                        Conoce más

                    </button>
                </div>

            </div>
        </div>

</section>
</div>

<!----------¿QUÉ ES UN BROCHURE?-------->
<h2 class="info-title" id="brochure-link"> <span>¿QUÉ ES UN BROCHURE?</span> </h2>
<section class="brochure-info">

    <!-- BLOQUE SUPERIOR -->
    <div class="brochure-top">
        <div class="brochure-image">
            <img src="<?php echo Routes::img('blog/pregunta1.png'); ?>" alt="Ejemplo de brochure">
        </div>

        <div class="brochure-text">
            <p><br>
                Cuando se trata de materiales como los brochures que acabamos de discutir,
                 la calidad es absolutamente indispensable, ya que estos folletos son la 
                 cara tangible de su negocio. La impresión debe reflejar el profesionalismo de la marca.
            </p>
            
        </div>
    </div>
  <div class="brochure-center-text">
        <p>El brochure es un documento informativo y publicitario impreso, caracterizado 
            por su formato compacto y plegado (como díptico o tríptico), diseñado para 
            describir, promover y detallar de manera estructurada una empresa, producto, 
            servicio o evento específico. Su importancia radica en que ofrece la capacidad 
            de profundizar en los detalles cruciales de lo que promociona, sirviendo como una 
            herramienta de comunicación más extensa que un anuncio simple, pero más enfocada que 
            una página web completa.</p>
    </div>
    <!-- BLOQUE INFERIOR -->
    <div class="brochure-bottom">
        <img src="<?php echo Routes::img('blog/brochure2.png'); ?>" alt="Brochure ejemplo 1">
        <img src="<?php echo Routes::img('blog/brochure3.png'); ?>" alt="Brochure ejemplo 2">
    </div>
 <div class="brochure-center-text2">
        <p>No esperes más</p>
    </div>
</section>
<div class="cotizar-wrapper">
    <a href="<?= Routes::url('tienda'); ?>#cotizar" class="btn-cotizar">
        Cotizar ahora
    </a>
</div><br><br>

<!----------CONOCE A LÍNEA GRÁFICA-------->
<h2 class="info-title" id="calidad-precio">
    <span>¿CALIDAD O PRECIO?</span>
</h2>
<section class="calidad-info">

    <!-- BLOQUE SUPERIOR -->
    <div class="calidad-top">
        <div class="calidad-image">
            <img src="<?php echo Routes::img('blog/calidad1.png'); ?>" alt="Ejemplo de calidad">
        </div>
 <div class="calidad-texts">
        <div class="calidad-text">
            <p>
                Cuando hablamos de calidad, hablamos de línea gráfica.
            </p>
            
        </div>
        <div class="calidad-text1">
            <p>               
               Al final, invertir en la calidad de LÍNEA GRÁFICA XXI no es 
               solo pagar por una impresión, es invertir en la imagen, credibilidad
                y éxito de su propia marca.
            </p>
            
        </div>
 </div>
    </div>
  <div class="calidad-center-text">
        <p>LÍNEA GRÁFICA XXI S.A.C. es la opción recomendada en el sector gráfico
             por ofrecer una calidad superior que supera el factor precio, 
             manteniendo siempre la eficiencia.</p>
    </div>
     <div class="calidad-center-text1">
        <p> La empresa respalda su oferta con 
             una vasta experiencia y el equipo tecnológico y humano necesario para
             garantizar la rapidez y la perfecta adaptación de los resultados a 
             cualquier tipo de proyecto y necesidad del cliente.</p>
    </div>
    <!-- BLOQUE INFERIOR -->
    <div class="calidad-bottom">
        <img src="<?php echo Routes::img('blog/calidad2.png'); ?>" alt="calidad 1">
        <img src="<?php echo Routes::img('blog/calidad3.png'); ?>" alt="calidad 2">
    </div>
 <div class="calidad-center-text2">
        <p>No esperes más</p>
    </div>
</section>
<div class="cotizar-wrapper">
    <a href="<?= Routes::url('tienda'); ?>#cotizar" class="btn-cotizar">
        Cotizar ahora
    </a>
</div><br><br>
<!----------¿LOS TRABAJOS SON MEJOR EN RGB o CMYK?-------->
<h2 class="info-title" id="rgb-cmyk">
    <span>¿LOS TRABAJOS SON MEJOR EN RGB o CMYK?</span>
</h2>
<section class="trabajos-info">
   
  <div class="trabajos-center-text">
        <p> <br>El modelo de color RGB (rojo, verde y azul) es un sistema aditivo y 
            el estándar para todos los medios digitales, incluyendo pantallas, 
            web y archivos digitales. Funciona añadiendo luz, donde el negro es 
            la ausencia de color y el blanco resulta de la suma total (R+G+B). Su 
            principal beneficio es que proporciona una amplia y vibrante variedad de 
            colores, ideal para replicar luces intensas y efectos brillantes.
        <br><br><br>
        El modelo de color CMYK (cian, magenta, amarillo y negro) es un sistema 
        sustractivo diseñado específicamente para la impresión comercial (tarjetas, 
        folletos, revistas, etc.). Funciona mediante la absorción de luz (tinta física),
         donde el blanco es la ausencia de tinta y el negro se logra con la tinta K 
         (Key) para asegurar un color puro y profundo. Trabajar en CMYK desde el inicio
          es fundamental, ya que es el idioma que usan las imprentas y ayuda a 
          anticipar fielmente el resultado final impreso.
           <br><br>
        </p>
    </div>
      <div class="trabajos-center-text1">
        <p> El modelo de color RGB (Rojo, Verde, Azul) es un sistema aditivo que se basa en la luz,
             estándar en todos los medios digitales (pantallas y web), donde el blanco es la suma total 
             de los colores. En contraste, el modelo CMYK (Cian, Magenta, Amarillo, Negro) es un 
             sistema sustractivo basado en tinta, diseñado exclusivamente para la impresión comercial,
              donde el negro se logra con la tinta K y el blanco es la ausencia de tinta.
        </p>
    </div>
    <!-- BLOQUE INFERIOR -->
    <div class="trabajos-bottom">
        <img src="<?php echo Routes::img('blog/rgb1.png'); ?>" alt="rgb 1">
        <img src="<?php echo Routes::img('blog/rgb2.png'); ?>" alt="rgb 2">
    </div>
 <div class="trabajos-center-text2">
        <p>No esperes más</p>
    </div>
</section>
<div class="cotizar-wrapper">
    <a href="<?= Routes::url('tienda'); ?>#cotizar" class="btn-cotizar">
        Cotizar ahora
    </a>
</div>
<br><br><br>