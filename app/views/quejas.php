
<h2 class="info-title">
    <span>GESTIÓN DE RECLAMOS, QUEJAS Y DENUNCIAS</span>
</h2>

<section class="quejas">
    <div class="cards-container">

        <!-- ACORDEÓN 1: SUGERENCIAS -->
        <details class="accordion-item main-accordion">
            <summary class="accordion-header">
                <span class="btn-icon">❯</span>
                <span class="accordion-title">Formulario para sugerencias y consultas</span>
            </summary>
            <div class="accordion-content">
                <form class="custom-form" id="form-sugerencias">
                    <div class="form-group">
                        <label for="nombre-sug">Nombre y Apellido (Obligatorio)*</label>
                        <input type="text" id="nombre-sug" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="tel-sug">Celular (Obligatorio)*</label>
                        <input type="tel" id="tel-sug" name="celular" required>
                    </div>

                    <div class="form-group">
                        <label for="email-sug">Correo electrónico (Obligatorio)*</label>
                        <input type="email" id="email-sug" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="tema-sug">Tema</label>
                        <div class="select-wrapper">
                            <select id="tema-sug" name="tema">
                                <option value="consulta">Consulta</option>
                                <option value="sugerencia">Sugerencia</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensaje-sug">Mensaje</label>
                        <textarea id="mensaje-sug" name="mensaje" rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <p class="file-instruction">
                            Anexe los archivos que considere requeridos como evidencia (los formatos de archivo aceptables son pdf, jpg y gif, con un tamaño máximo de 1 Mb).
                        </p>
                        <div class="file-upload-wrapper">
                            <label for="file-sug" class="btn-file">Ingresa tu archivo</label>
                            <input type="file" id="file-sug" name="archivo" accept=".pdf,.jpg,.jpeg,.gif" class="file-input">
                            <span class="file-name">Sin archivos seleccionados</span>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">ENVIAR</button>
                </form>
            </div>
        </details>

        <!-- ACORDEÓN 2: RECLAMOS / PUBLICITARIO (IDs Corregidos) -->
        <details class="accordion-item main-accordion">
            <summary class="accordion-header">
                <span class="btn-icon">❯</span>
                <span class="accordion-title">Formulario de Reclamos / Solicitudes</span>
            </summary>
            <div class="accordion-content">
                <form class="custom-form" id="form-reclamos">
                    <div class="form-group">
                        <label for="nombre-rec">Nombre y Apellido (Obligatorio)*</label>
                        <input type="text" id="nombre-rec" name="nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="tipo-doc-rec">Tipo de Documento</label>
                        <div class="select-wrapper">
                            <select id="tipo-doc-rec" name="tipo_documento">
                                <option value="dni">DNI</option>
                                <option value="ruc">RUC</option>
                                <option value="carnet">Carnet de Extranjería</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="num-doc-rec">Número de Documento (Obligatorio)*</label>
                        <input type="text" id="num-doc-rec" name="numero_documento" required>
                    </div>

                    <div class="form-group">
                        <label for="dir-rec">Dirección (Obligatorio)*</label>
                        <input type="text" id="dir-rec" name="direccion" required>
                    </div>

                    <div class="form-group">
                        <label for="tel-rec">Celular (Obligatorio)*</label>
                        <input type="tel" id="tel-rec" name="celular" required>
                    </div>

                    <div class="form-group">
                        <label for="email-rec">Correo electrónico (Obligatorio)*</label>
                        <input type="email" id="email-rec" name="email" required>
                    </div>          

                    <div class="form-group">
                        <label for="mensaje-rec">Mensaje</label>
                        <textarea id="mensaje-rec" name="mensaje" rows="6"></textarea>
                    </div>

                    <div class="form-group">
                        <p class="file-instruction">
                            Anexe los archivos que considere requeridos como evidencia (los formatos de archivo aceptables son pdf, jpg y gif, con un tamaño máximo de 1 Mb).
                        </p>
                        <div class="file-upload-wrapper">
                            <label for="file-rec" class="btn-file">Ingresa tu archivo</label>
                            <input type="file" id="file-rec" name="archivo" accept=".pdf,.jpg,.jpeg,.gif" class="file-input">
                            <span class="file-name">Sin archivos seleccionados</span>
                        </div>
                    </div>

                    <button type="submit" class="btn-submit">ENVIAR</button>
                </form>
            </div>
        </details>

       <!-- ACORDEÓN 3: CANAL DE DENUNCIAS -->
    <details class="accordion-item main-accordion">
     <summary class="accordion-header">
          <span class="btn-icon">❯</span>
         <span class="accordion-title">Canal de denuncias</span>
        </summary>

        <div class="sub-accordion-container">

            <!-- SUB-OPCIÓN 1: PERSONA NATURAL -->
                <details class="accordion-item sub-accordion">
    <summary class="sub-header">
        <div class="sub-title-wrapper">
            <!-- Ícono desde la carpeta quejas -->
            <img src="<?php echo Routes::img('quejas/per_natural.png'); ?>" alt="Persona Natural" class="sub-icon">
            <span class="sub-title">Persona Natural</span>
        </div>
    </summary>

    <div class="accordion-content">
        <div class="form-banner">
            <span class="btn-icon">❯</span>
            <span>Formulario de Denuncia Persona Natural</span>
        </div>

        <p class="form-disclaimer">
            “Este canal se establece para ofrecer soluciones a los informes de prácticas inapropiadas que infrinjan las normas establecidas en línea gráfica”
        </p>

        <form class="custom-form" id="form-persona-natural">
            <!-- 1. Datos Personales -->
            <div class="form-group">
                <label for="nombre-pn">Nombre y Apellido (Obligatorio)*</label>
                <input type="text" id="nombre-pn" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="doc-type-pn">Tipo de documento</label>
                <div class="select-wrapper">
                    <select id="doc-type-pn" name="tipo_documento">
                        <option value="DNI">DNI</option>
                        <option value="RUC">RUC</option>
                        <option value="CE">Carnet de Extranjería</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="num-doc-pn">Número de Documento (Obligatorio)*</label>
                <input type="text" id="num-doc-pn" name="numero_documento" required>
            </div>

            <div class="form-group">
                <label for="dir-pn">Dirección (Obligatorio)*</label>
                <input type="text" id="dir-pn" name="direccion" required>
            </div>

            <div class="form-group">
                <label for="tel-pn">Celular (Obligatorio)*</label>
                <input type="tel" id="tel-pn" name="celular" required>
            </div>

            <div class="form-group">
                <label for="email-pn">Correo electrónico (Obligatorio)*</label>
                <input type="email" id="email-pn" name="email" required>
            </div>          

            <!-- 2. Opción de Protección de Datos (Radio Buttons Personalizados) -->
            <div class="form-group">
                <label class="section-label">¿Desea proteger sus datos personales?*</label>
                <div class="radio-options-group">
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="si" checked required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">Sí deseo proteger mis datos</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="no" required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">No deseo proteger mis datos</span>
                    </label>
                </div>
            </div>

            <!-- 3. Descripción de los Hechos -->
            <div class="form-group">
                <label for="descripcion-hechos-pn">Descripción clara y detallada de los hechos denunciados.</label>
                <textarea id="descripcion-hechos-pn" name="descripcion_hechos" rows="5"></textarea>
            </div>

            <!-- 4. Ubicación de los Hechos -->
            <div class="form-group">
                <label>Distrito / Provincia / Región donde se producen los hechos:</label>
                <div class="location-inputs-group">
                    <input type="text" id="distrito-pn" name="distrito" placeholder="Distrito">
                    <input type="text" id="provincia-pn" name="provincia" placeholder="Provincia">
                    <input type="text" id="region-pn" name="region" placeholder="Región">
                </div>
            </div>

            <!-- 5. Fecha de los Hechos (Calendario Estilizado) -->
            <div class="form-group">
                <label for="fecha-hechos-pn">Fecha de los hechos</label>
                <div class="date-input-wrapper">
                    <input type="date" id="fecha-hechos-pn" name="fecha_hechos">
                </div>
            </div>

            <!-- 6. Presunto Autor -->
            <div class="form-group">
                <label for="autor-pn">Indicar datos del presunto autor o autores de los hechos*</label>
                <textarea id="autor-pn" name="autor_hechos" rows="5" required></textarea>
            </div>
        <!-- 7. Antecedentes -->
            <div class="form-group">
                <label for="antecedentes-pn">Antecedentes y medios probatorios*</label>
                <textarea id="antecedentes-pn" name="antecedentes" rows="5" required></textarea>
            </div>

             <p class="form-disclaimer">
            “Adjunte los documentos que considere pertinentes como evidencia de su denuncia. Los archivos permitidos son PDF Y JPG, con un tamaño máximo de 1 MB.”
            </p>
            
                        <div class="file-upload-wrapper">
                            <label for="file-rec" class="btn-file">Ingresa tu archivo</label>
                            <input type="file" id="file-rec" name="archivo" accept=".pdf,.jpg,.jpeg,.gif" class="file-input">
                            <span class="file-name">Sin archivos seleccionados</span>
                         </div>
       
        <p class="form-disclaimer">
             Compromiso <br><br>
            Por medio del presente, manifiesto mi compromiso de permanecer a disposición del Centro para brindar las aclaraciones que sean necesarias y proporcionar información adicional relacionada con las irregularidades que fundamentan la presente denuncia.
            <br><br>
            Declaración jurada y autorización.
            <br><br>
            Declaro bajo juramento que la documentación proporcionada al Centro corresponde a la información que se encuentra a mi disposición y que su contenido es verdadero. Asimismo, autorizo a Arcom a verificar su autenticidad, de acuerdo con las atribuciones que le confiere la normativa vigente.
            <br><br>
            De igual manera, declaro conocer que mis datos personales serán tratados por Arcom exclusivamente para la gestión y administración de la denuncia presentada, conforme a lo establecido en la Ley N.° 27806, Ley de Transparencia y Acceso a la Información Pública; la Ley N.° 29733, Ley de Protección de Datos Personales; y su Reglamento, aprobado mediante el D.S. N.° 003-2013-JUS.
        </p>
            <button type="submit" class="btn-submit">ENVIAR</button>
        </form>
    </div>
</details>

            <!-- SUB-OPCIÓN 2: PERSONA JURÍDICA -->
            <details class="accordion-item sub-accordion">
                <summary class="sub-header">
                    <div class="sub-title-wrapper">
                        <!-- Ícono desde la carpeta quejas -->
                        <img src="<?php echo Routes::img('quejas/per_juridica.png'); ?>" alt="Persona Jurídica" class="sub-icon">
                        <span class="sub-title">Persona Jurídica</span>
                    </div>
                </summary>

                <div class="accordion-content">
                    <div class="form-banner">
                        <span class="btn-icon">❯</span>
                        <span>Formulario de Denuncia Persona Jurídica</span>
                    </div>
                     <form class="custom-form" id="form-persona-juridica">
             <p class="form-disclaimer">
           “Este canal tiene como finalidad atender y gestionar reportes relacionados con malas prácticas que vulneren las normas y disposiciones establecidas por Línea gráfica”
               </p>
                    
                        <div class="form-group">
                            <label for="razon-pj">Razón Social (Obligatorio)*</label>
                            <input type="text" id="razon-pj" name="razon_social" required>
                        </div>
                        <div class="form-group">
                            <label for="ruc-pj">RUC (Obligatorio)*</label>
                            <input type="text" id="ruc-pj" name="ruc" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre-pn">Nombre y apellido Representante legal*</label>
                            <input type="text" id="nombre-pn" name="nombre" required>
                         </div>
                        <div class="form-group">
                            <label for="dir-pn">Dirección legal*</label>
                            <input type="text" id="dir-pn" name="direccion" required>
                        </div>

                        <div class="form-group">
                            <label for="tel-pn">Celular *</label>
                            <input type="tel" id="tel-pn" name="celular" required>
                        </div>

                        <div class="form-group">
                            <label for="email-pn">Correo electrónico*</label>
                            <input type="email" id="email-pn" name="email" required>
                        </div>     
         <!-- 2. Opción de Protección de Datos (Radio Buttons Personalizados) -->
            <div class="form-group">
                <label class="section-label">¿Desea proteger sus datos personales?*</label>
                <div class="radio-options-group">
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="si" checked required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">Sí deseo proteger mis datos</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="no" required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">No deseo proteger mis datos</span>
                    </label>
                </div>
            </div>

            <!-- 3. Descripción de los Hechos -->
            <div class="form-group">
                <label for="descripcion-hechos-pn">Descripción clara y detallada de los hechos denunciados.</label>
                <textarea id="descripcion-hechos-pn" name="descripcion_hechos" rows="5"></textarea>
            </div>

            <!-- 4. Ubicación de los Hechos -->
            <div class="form-group">
                <label>Distrito / Provincia / Región donde se producen los hechos:</label>
                <div class="location-inputs-group">
                    <input type="text" id="distrito-pn" name="distrito" placeholder="Distrito">
                    <input type="text" id="provincia-pn" name="provincia" placeholder="Provincia">
                    <input type="text" id="region-pn" name="region" placeholder="Región">
                </div>
            </div>

            <!-- 5. Fecha de los Hechos (Calendario Estilizado) -->
            <div class="form-group">
                <label for="fecha-hechos-pn">Fecha de los hechos</label>
                <div class="date-input-wrapper">
                    <input type="date" id="fecha-hechos-pn" name="fecha_hechos">
                </div>
            </div>

            <!-- 6. Presunto Autor -->
            <div class="form-group">
                <label for="autor-pn">Indicar datos del presunto autor o autores de los hechos*</label>
                <textarea id="autor-pn" name="autor_hechos" rows="5" required></textarea>
            </div>
        <!-- 7. Antecedentes -->
            <div class="form-group">
                <label for="antecedentes-pn">Antecedentes y medios probatorios*</label>
                <textarea id="antecedentes-pn" name="antecedentes" rows="5" required></textarea>
            </div>

             <p class="form-disclaimer">
            “Adjunte los documentos que considere pertinentes como evidencia de su denuncia. Los archivos permitidos son PDF Y JPG, con un tamaño máximo de 1 MB.”
            </p>
            
                        <div class="file-upload-wrapper">
                            <label for="file-rec" class="btn-file">Ingresa tu archivo</label>
                            <input type="file" id="file-rec" name="archivo" accept=".pdf,.jpg,.jpeg,.gif" class="file-input">
                            <span class="file-name">Sin archivos seleccionados</span>
                         </div>
            <!-- 8. Compromiso y Declaración Jurada --> 
            <p class="form-disclaimer">
            Compromiso <br><br>
            Por medio del presente, manifiesto mi compromiso de permanecer disponible para el Centro, con el propósito de brindar las aclaraciones que sean necesarias y proporcionar información adicional respecto de las irregularidades que sustentan la presente denuncia.
             <br><br>
            Declaración jurada y autorización
            <br><br>
            Declaro bajo juramento que la documentación proporcionada al Centro corresponde a la información que tengo disponible y que su contenido se ajusta a la verdad. Asimismo, autorizo a Arcom a verificar su autenticidad, de acuerdo con las facultades que le otorga la normativa vigente.
            <br><br>
            De igual manera, declaro conocer que mis datos personales serán tratados por Arcom y autorizo su uso para la gestión y administración de la denuncia presentada, de conformidad con lo establecido en la Ley N.° 27806, Ley de Transparencia y Acceso a la Información Pública; la Ley N.° 29733, Ley de Protección de Datos Personales; y su Reglamento, aprobado mediante el D.S. N.° 003-2013-JUS.
            </p>
                        <button type="submit" class="btn-submit">ENVIAR</button>
                    </form>
                </div>
            </details>

     <!-- SUB-OPCIÓN 3: ANÓNIMA -->
            <details class="accordion-item sub-accordion">
                <summary class="sub-header">
                    <div class="sub-title-wrapper">
                        <!-- Ícono desde la carpeta quejas -->
                        <img src="<?php echo Routes::img('quejas/per_anonima.png'); ?>" alt="Anónima" class="sub-icon">
                        <span class="sub-title">Anónima</span>
                    </div>
                </summary>

                <div class="accordion-content">
                    <div class="form-banner">
                        <span class="btn-icon">❯</span>
                        <span>Formulario de Denuncia Anónima</span>
                    </div>                    

                    <form class="custom-form" id="form-anonima">
                    <p class="form-disclaimer">
                    “Este canal tiene como finalidad atender y gestionar reportes relacionados con malas prácticas que vulneren las normas y disposiciones establecidas por Línea gráfica”
                    </p>
                                <div class="form-group">
                            <label for="email-pn">Correo electrónico*</label>
                            <input type="email" id="email-pn" name="email" required>
                        </div>     
         <!-- 2. Opción de Protección de Datos (Radio Buttons Personalizados) -->
            <div class="form-group">
                <label class="section-label">¿Desea proteger sus datos personales?*</label>
                <div class="radio-options-group">
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="si" checked required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">Sí deseo proteger mis datos</span>
                    </label>
                    <label class="custom-radio">
                        <input type="radio" name="proteger_datos" value="no" required>
                        <span class="radio-mark"></span>
                        <span class="radio-label-text">No deseo proteger mis datos</span>
                    </label>
                </div>
            </div>

            <!-- 3. Descripción de los Hechos -->
            <div class="form-group">
                <label for="descripcion-hechos-pn">Descripción clara y detallada de los hechos denunciados.</label>
                <textarea id="descripcion-hechos-pn" name="descripcion_hechos" rows="5"></textarea>
            </div>

            <!-- 4. Ubicación de los Hechos -->
            <div class="form-group">
                <label>Distrito / Provincia / Región donde se producen los hechos:</label>
                <div class="location-inputs-group">
                    <input type="text" id="distrito-pn" name="distrito" placeholder="Distrito">
                    <input type="text" id="provincia-pn" name="provincia" placeholder="Provincia">
                    <input type="text" id="region-pn" name="region" placeholder="Región">
                </div>
            </div>

            <!-- 5. Fecha de los Hechos (Calendario Estilizado) -->
            <div class="form-group">
                <label for="fecha-hechos-pn">Fecha de los hechos</label>
                <div class="date-input-wrapper">
                    <input type="date" id="fecha-hechos-pn" name="fecha_hechos">
                </div>
            </div>

            <!-- 6. Presunto Autor -->
            <div class="form-group">
                <label for="autor-pn">Indicar datos del presunto autor o autores de los hechos*</label>
                <textarea id="autor-pn" name="autor_hechos" rows="5" required></textarea>
            </div>
        <!-- 7. Antecedentes -->
            <div class="form-group">
                <label for="antecedentes-pn">Antecedentes y medios probatorios*</label>
                <textarea id="antecedentes-pn" name="antecedentes" rows="5" required></textarea>
            </div>

             <p class="form-disclaimer">
            “Adjunte los documentos que considere pertinentes como evidencia de su denuncia. Los archivos permitidos son PDF Y JPG, con un tamaño máximo de 1 MB.”
            </p>
            
                        <div class="file-upload-wrapper">
                            <label for="file-rec" class="btn-file">Ingresa tu archivo</label>
                            <input type="file" id="file-rec" name="archivo" accept=".pdf,.jpg,.jpeg,.gif" class="file-input">
                            <span class="file-name">Sin archivos seleccionados</span>
                         </div>
            <!-- 8. Compromiso y Declaración Jurada --> 
            <p class="form-disclaimer">
            Compromiso <br><br>
            Por medio del presente, manifiesto mi compromiso de permanecer disponible para el Centro, con el propósito de brindar las aclaraciones que sean necesarias y proporcionar información adicional respecto de las irregularidades que sustentan la presente denuncia.
             <br><br>
            Declaración jurada y autorización
            <br><br>
            Declaro bajo juramento que la documentación proporcionada al Centro corresponde a la información que tengo disponible y que su contenido se ajusta a la verdad. Asimismo, autorizo a Arcom a verificar su autenticidad, de acuerdo con las facultades que le otorga la normativa vigente.
            <br><br>
            De igual manera, declaro conocer que mis datos personales serán tratados por Arcom y autorizo su uso para la gestión y administración de la denuncia presentada, de conformidad con lo establecido en la Ley N.° 27806, Ley de Transparencia y Acceso a la Información Pública; la Ley N.° 29733, Ley de Protección de Datos Personales; y su Reglamento, aprobado mediante el D.S. N.° 003-2013-JUS.
            </p>
       


                        <button type="submit" class="btn-submit">ENVIAR</button>
                    </form>
                </div>
            </details>

        </div>
    </details>

  </div>

    <div class="quejas-boton">
        <a href="<?php echo Routes::url('inicio'); ?>" class="btn-navegar">Seguir navegando</a>
    </div>
</section>

