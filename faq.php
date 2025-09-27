<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Preguntas frecuentes: cubanos en República Dominicana';
$page_description = 'Respuestas a las preguntas más comunes sobre migración, derechos y procesos para cubanos en República Dominicana.';

include 'includes/head.php';
?>
<body>
    

<header>
  <div class="header-container">
    <div class="logo-eslogan">
      <h1>Preguntas frecuentes: cubanos en República Dominicana</h1>
      <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
    </div>
    <div class="logo-container">
      <img src="images/logo.png" alt="Logo Patriotas" class="logo" />
    </div>
  </div>
</header>

<main>
  <section class="info-proceso">
    <h2>📌 Preguntas Frecuentes (FAQ)</h2>
    <p><strong>Fundación Patriotas del Caribe</strong><br>
    <em>Asesoría legal y transparencia institucional para ciudadanos y aliados</em></p>
  </section>

  <section class="info-proceso">
    <h3>1. ¿Qué es Patriotas del Caribe?</h3>
    <p>
      Es una <strong>iniciativa sin fines de lucro</strong> en proceso de registro legal en República Dominicana bajo la Ley No. 122-05. Su propósito es defender la libertad, la dignidad humana y proveer asistencia jurídica y humanitaria a migrantes cubanos en situación de vulnerabilidad.
    </p>

    <h3>2. ¿Está la Fundación legalmente registrada?</h3>
    <p>
      No. La Fundación está <strong>en proceso de incorporación a las entidades públicas pertinentes</strong> como una organización sin fines de lucro, conforme a la Ley 122-05.
    </p>

    <h3>3. ¿Qué es el formulario de registro?</h3>
    <p>
      Es una herramienta <strong>voluntaria y confidencial</strong> que permite recolectar información sobre cubanos residentes en RD, con el fin de respaldar propuestas como el <strong>Plan de Regularización Humanitaria para Exiliados Cubanos (PRHEC)</strong>, en base al artículo 151 de la Ley 285-04.
    </p>

    <h3>4. ¿Qué datos personales se solicitan?</h3>
    <p>
      Solo <strong>datos básicos de identificación</strong>:<br>
      - Nombre completo<br>
      - Correo electrónico<br>
      - Edad<br>
      - Fecha y vía de entrada a RD<br>
      - Escolaridad, profesión y ocupación<br>
      - Situación familiar<br><br>
      No se recogen datos sensibles. Se cumple la Ley 172-13 sobre Protección de Datos.
    </p>

    <h3>5. ¿Qué uso se le da a los datos?</h3>
    <p>
      - Elaborar informes estadísticos y sociales<br>
      - Sustentar solicitudes ante el Estado<br>
      - Diseñar programas de asistencia humanitaria<br><br>
      <strong>No se usan con fines comerciales, políticos ni se comparten con terceros</strong> sin autorización legal.
    </p>

    <h3>6. ¿Dónde se almacenan los datos?</h3>
    <p>
      En <strong>servidores seguros</strong>. Solo personal autorizado tiene acceso. Se aplican medidas conforme a la Ley 172-13, incluyendo protocolos de seudonimización y control de acceso.
    </p>

    <h3>7. ¿Puedo eliminar mis datos?</h3>
    <p>
      Sí. Puedes ejercer tu derecho de acceso, rectificación o supresión escribiendo a:<br>
      📧 <a href="mailto:contacto@patriotasdelcaribe.com">contacto@patriotasdelcaribe.com</a><br>
      Responderemos en un plazo de <strong>10 días hábiles</strong>.
    </p>

    <h3>8. ¿Esto tiene efectos migratorios?</h3>
    <p>
      <strong>No.</strong> El registro no sustituye procesos ante Migración ni tiene efectos legales automáticos. Es una herramienta de incidencia social y técnica de la sociedad civil.
    </p>

    <h3>9. ¿Quiénes pueden registrarse?</h3>
    <p>
      <strong>Cualquier ciudadano cubano</strong> residente en RD, sin importar su estatus migratorio. La participación es <strong>voluntaria, gratuita y sin restricciones</strong>.
    </p>

    <h3>10. ¿Cómo puedo contactar a la Fundación?</h3>
    <p>
      📧 <a href="mailto:contacto@patriotasdelcaribe.com">contacto@patriotasdelcaribe.com</a><br>
     
     <!-- Redes sociales oficiales -->
  <div class="siguenos-redes">
    <p>Grupos Sociales:</p>
    <div class="redes-sociales">
      <a class="red-social" href="https://www.facebook.com/groups/1672337816821354/?ref=share&mibextid=NSMWBT " target="_blank">
        <img src="images/facebook.png" alt="Facebook">
      </a>
       <a class="red-social" href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV " target="_blank">
        <img src="images/whatsapp.png" alt="Whatsapp">
      </a>
      <a class="red-social" href="https://www.instagram.com/patriotasdelcaribe?igsh=NjM2ZjE0ZmZtOGxi" target="_blank">
        <img src="images/instagram.png" alt="Instagram">
      </a>
      
    </div>
  </div>
  
<br><br>
    </p>

    <h3>11. ¿Tiene algún costo?</h3>
    <p>
      <strong>No.</strong> Todos los servicios son <strong>gratuitos</strong>. La Fundación actúa sin fines de lucro conforme a la Ley 122-05, operando con apoyo de donantes y voluntarios.
    </p>
  </section>
  
  <br><br><br><br><br>
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

<?php include 'includes/footer.php'; ?>
