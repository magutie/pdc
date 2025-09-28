<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Patriotas del Caribe: apoyo a cubanos en República Dominicana';
$page_description = 'Orientación en migración, derechos y comunidad para cubanos en RD. Regístrate gratis y recibe apoyo confiable de Patriotas del Caribe.';

include 'includes/head.php';
?>


<body>
    

<header>
    <div class="header-container">
        <div class="logo-eslogan">
            <h1>Patriotas del Caribe: apoyo a cubanos en República Dominicana</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo Patriotas del Caribe - Fundación de apoyo a migrantes cubanos en República Dominicana" class="logo" loading="eager">
        </div>
    </div>
</header>

<main>
<br><br>
<article class="info-proceso">
    <div class="info-container">
        <p>
            <strong>PATRIOTAS DEL CARIBE</strong> es una iniciativa sin fines de lucro que busca la libertad y el bienestar político, económico y social de sus miembros.
            <br><br>
            Estamos trabajando en apoyo de la comunidad cubana exiliada en República Dominicana para lograr su integración en la sociedad, respetando la soberanía del país anfitrión.
            <br><br>
            Tenemos un formulario como parte de un censo confidencial y voluntario para <strong> conocer cuántos compatriotas cubanos </strong>se encuentran en situación irregular y canalizar iniciativas de regularización propuestas en nuestro <a href="plan_trabajo.php">Plan de trabajo</a>
        </p>
    </div>
</article>

<section class="redes-sociales-container">
    <div class="redes-sociales">
        <a class="red-social"><img src="images/bandera_rd.png" alt="Bandera de República Dominicana, país anfitrión de migrantes cubanos" width="80" height="40" loading="lazy"></a>
        <a class="red-social"><img src="images/bandera_cuba.png" alt="Bandera de Cuba, país de origen de migrantes en República Dominicana" width="80" height="40" loading="lazy"></a>
    </div>
</section>

<section class="historia-patriotas">
    <h2>Héroes de la Libertad del Caribe</h2>
    
    <div class="heroe">
        <h3>Juan Pablo Duarte</h3>
        <p class="cita">"Vivir sin patria es lo mismo que vivir sin honor."</p>
        <img src="images/duarte.jpg" alt="Juan Pablo Duarte, padre fundador de República Dominicana y símbolo de libertad caribeña" class="heroe-img" loading="lazy">
        <p>
            Padre Fundador de la República Dominicana, Duarte soñaba con una América libre del dominio extranjero y unida por los principios de libertad y autodeterminación. Su ejemplo inspiró a muchos otros movimientos independentistas del Caribe, incluyendo a los cubanos que lucharon por sacudirse el yugo colonial. Martí lo estudió con devoción y lo consideró uno de los grandes padres de la libertad en América Latina.
        </p>
    </div>


    <div class="heroe">
        <h3>Máximo Gómez</h3>
        <p class="cita">"No lucho por conquistas personales, sino por la libertad de los pueblos."</p>
        <img src="images/gomez.jpg" alt="Máximo Gómez, estratega militar dominicano que luchó por la independencia de Cuba" class="heroe-img" loading="lazy">
        <p>
            Nacido en Baní, República Dominicana, Máximo Gómez fue un estratega militar clave en las guerras por la independencia de Cuba. Aunque dominicano de nacimiento, entregó su vida a la causa cubana y se convirtió en uno de sus héroes más reverenciados. Su valentía en el campo de batalla y su compromiso con la libertad caribeña lo convierten en el símbolo más poderoso de la unión histórica entre ambas naciones.
        </p>
    </div>

    <div class="heroe">
        <h3>José Martí</h3>
        <p class="cita">"La patria es ara, no pedestal."</p>
        <img src="images/marti.jpg" alt="José Martí, poeta y revolucionario cubano, defensor de la libertad de Cuba y la unidad caribeña" class="heroe-img" loading="lazy">
        <p>
            Poeta, filósofo y revolucionario cubano, José Martí es el alma de la independencia de Cuba. Su admiración por Juan Pablo Duarte y su estadía en Santo Domingo dejaron huellas profundas en su pensamiento. Martí veía a República Dominicana como un modelo de lucha patriótica, y a través de sus escritos y alianzas forjó puentes entre ambas islas en defensa de la soberanía, la dignidad y los valores republicanos.
        </p>
    </div>

    <br><br><br>
    <p class="texto-historico">
        Desde las montañas de Baní <br> hasta los campos de batalla en Cuba, <br> desde las palabras de Duarte hasta los versos inmortales de Martí, <br> nuestra historia caribeña ha sido escrita con sangre y valor compartido.<br><br> Hoy, Patriotas del Caribe continúa ese legado en defensa de la libertad, la dignidad y la soberanía de los pueblos. <br> <br>Trabajamos por la hermandad y los lazos voluntarios, no por la fusión entre pueblos.
    </p>
</section>


<section class="llamado-plan">
    <h2>📚 Guía Completa para Cubanos en República Dominicana</h2>
    <p>Todo lo que necesitas saber sobre regularización, derechos, trabajo, salud, educación y comunidades de apoyo en República Dominicana.</p>
    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 1rem 0;">
        <a href="cubanos-en-rd-guia.php" class="boton-rojo" style="background-color: #1976d2; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;">📖 Ver Guía Completa</a>
        <a href="plan_trabajo.php" class="boton-rojo" style="background-color: #d32f2f; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;">📋 Plan de Trabajo</a>
    </div>
</section>

<section id="formulario">
    <h2>Formulario de Registro Voluntario</h2>
    <form action="procesar.php" method="POST">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" min="0" required>

        <label for="fecha_entrada">Fecha de entrada a RD:</label>
        <input type="date" id="fecha_entrada" name="fecha_entrada" required>

        <label for="via_entrada">Vía de entrada:</label>
        <input type="text" id="via_entrada" name="via_entrada" required>

        <label for="escolaridad">Nivel de escolaridad:</label>
        <input type="text" id="escolaridad" name="escolaridad" required>

        <label for="profesion">Profesión:</label>
        <input type="text" id="profesion" name="profesion" required>

        <label for="ocupacion">Ocupación actual:</label>
        <input type="text" id="ocupacion" name="ocupacion" required>
        
        <!-- Campo nuevo: Dirección -->
        <label for="direccion"> Provincia de residencia:</label>
        <input type="text" id="direccion" name="direccion" placeholder="Ej: Santo Domingo Este, Santo Domingo" required>


        <label for="familiares">¿Tiene familiares en RD?</label>
        <input type="text" id="familiares" name="familiares">

        <button type="submit">Enviar Registro</button>
    </form>
</section>

<section class="valores-principios">
  <h2>Valores y Principios</h2>

  <div class="valores-container">
    <div class="valores-box positivo">
      <h3>✅ Promovemos</h3>
      <ul>
        <li>Patriotismo dominicano y cubano</li>
        <li>Respeto a la soberanía y leyes de la República Dominicana</li>
        <li>Respeto a la cultura, religión y tradiciones dominicanas</li>
        <li>Igualdad de mujeres y hombres ante la ley</li>
        <li>Respeto a la vida de los individuos sin distinciones físicas o cognitivas</li>
        <li>Activismo pacífico por la libertad de Cuba</li>
        <li>Unidad y solidaridad caribeña</li>
        <li>Integridad, trabajo honesto y gratitud al país anfitrión</li>
      </ul>
    </div>

    <div class="valores-box negativo">
      <h3>🚫 No apoyamos</h3>
      <ul>
        <li>Violación de las leyes dominicanas</li>
        <li>Migración descontrolada o desordenada</li>
        <li>Abuso de los recursos públicos del país</li>
        <li>Intervención en la política interna de la RD</li>
        <li>Explotación laboral de exiliados vulnerables</li>
        <li>Campañas ideológicas racistas, feministas, pro aborto o similares</li>
      </ul>
    </div>
  </div>
  <br> <br> <a href="valores.php">Leer más</a>
</section>

<br><br><br>

  <!-- Redes sociales oficiales -->
  <div class="siguenos-redes">
    <p>Únete a Nuestros Grupos Sociales:</p>
    <div class="redes-sociales">
      <a class="red-social" href="https://www.facebook.com/groups/1672337816821354/?ref=share&mibextid=NSMWBT " target="_blank">
        <img src="images/facebook.png" alt="Únete al grupo de Facebook de Patriotas del Caribe para migrantes cubanos en República Dominicana" loading="lazy">
      </a>
       <a class="red-social" href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV " target="_blank">
        <img src="images/whatsapp.png" alt="Únete al grupo de WhatsApp de Patriotas del Caribe para apoyo a migrantes cubanos" loading="lazy">
      </a>
      <a class="red-social" href="https://www.instagram.com/patriotasdelcaribe?igsh=NjM2ZjE0ZmZtOGxi" target="_blank">
        <img src="images/instagram.png" alt="Síguenos en Instagram para actualizaciones de Patriotas del Caribe" loading="lazy">
      </a>
      
    </div>
  </div>

<br><br>
<section id="compartir" style="text-align:center; padding: 2rem;">
  <h2>📣 ¡Comparte la iniciativa!</h2>
  <p>Ayudemos a otros </p>

  <div class="botones-compartir">
    <a href="https://api.whatsapp.com/send?text=Revisa esta página: https://patriotasdelcaribe.com/" target="_blank" class="btn red-whatsapp">WhatsApp</a> 
    <a href="https://www.facebook.com/sharer/sharer.php?u=https://patriotasdelcaribe.com/" target="_blank" class="btn red-facebook">Facebook</a>
    <a href="https://twitter.com/intent/tweet?url=https://patriotasdelcaribe.com/&text=Revisa esta página" target="_blank" class="btn red-twitter">X </a>
  </div>

</section>

<br><br>
</main>

<footer>
    <div class="footer-links">
         <a href="historia.php">Historia Fraternal</a> |
         <a href="plan_trabajo.php">Plan de trabajo</a> |
         <a href="valores.php">Valores</a> |
         <a href="sobre_cuba.php">Cuba Hoy</a> |
          <a href="mision_patriotica.php">Misión Patriótica</a> |
        <a href="faq.php">Preguntas Frecuentes</a> |
        <a href="privacidad.php">Políticas de Privacidad</a> |
        <a href="terminos.php">Términos y Condiciones</a>
        <!-- <a href="estatutos.php">Estatutos</a> |
        <a href="acta-constitutiva.php">Acta Constitutiva</a> |
        <a href="registro-legal.php">Registro Legal</a> |
        <a href="transparencia.php">Transparencia</a> -->

    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

<?php include 'includes/footer.php'; ?><!-- Deploy test Sun Sep 28 13:24:07 AST 2025 -->
<!-- Deploy test SSH Sun Sep 28 13:43:52 AST 2025 -->
<!-- Deploy test con DEPLOY_SSH_KEY Sun Sep 28 13:49:49 AST 2025 -->
<!-- Test con clave correcta Sun Sep 28 14:04:22 AST 2025 -->
