<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Valores y principios de Patriotas del Caribe';
$page_description = 'Los valores que guían nuestro trabajo: patriotismo, respeto, solidaridad y compromiso con la comunidad migrante cubana en República Dominicana.';

include 'includes/head.php';
?>
<body>
    

<header>
    <div class="header-container">
        <div class="logo-eslogan">
            <h1>Valores y principios de Patriotas del Caribe</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Patriotas del Caribe - Fundación de apoyo a migrantes cubanos en República Dominicana" class="logo" loading="eager">
        </div>
    </div>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="plan.php">Plan de Trabajo</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="info-proceso">
        <h2>Principios y Valores Fundamentales de Patriotas del Caribe</h2>
        <br><br>

        <h3>✅ Promovemos</h3><br>

        <h4>1. Patriotismo dominicano y cubano</h4>
        <p>Creemos en el derecho de cada nación a amar, preservar y fortalecer su identidad histórica, cultural y espiritual. El patriotismo que promovemos no es excluyente ni chauvinista, sino integrador: honramos la herencia de Duarte, Mella, Luperón, Martí y Máximo Gómez. Reivindicamos la necesidad de que tanto dominicanos como cubanos exiliados mantengan un amor genuino por su país, sin renunciar al respeto y al compromiso con la tierra que los acoge.</p>

        <h4>2. Respeto a la soberanía y leyes de la República Dominicana</h4>
        <p>El principio de soberanía nacional es el cimiento de todo orden liberal. Nadie puede abogar por justicia o libertad si no respeta el marco jurídico e institucional del país que lo protege. Rechazamos toda forma de injerencia externa o interna que intente vulnerar las decisiones democráticas del Estado dominicano. Quien reside aquí debe hacerlo en armonía con las leyes y autoridades legítimas.</p>

        <h4>3. Respeto a la cultura, religión y tradiciones dominicanas</h4>
        <p>Entendemos que la cultura dominicana es un tesoro colectivo que merece ser conservado. Desde la música hasta las creencias religiosas, desde la familia tradicional hasta las costumbres locales, todo esto constituye el tejido moral que mantiene unida a la sociedad. Promovemos una convivencia respetuosa y enriquecedora, donde los cubanos exiliados no sean un cuerpo extraño, sino una comunidad aliada en el respeto y la gratitud.</p>

        <h4>4. Igualdad de mujeres y hombres ante la ley</h4>
        <p>Desde el pensamiento liberal clásico hasta las más modernas democracias, la igualdad jurídica ha sido una piedra angular de la justicia. Rechazamos tanto la discriminación por sexo como las imposiciones ideológicas que pretenden borrar las diferencias naturales entre hombres y mujeres. Defendemos la dignidad humana sin sesgos ideológicos, dentro del marco de la ley.</p>

        <h4>5. Respeto a la vida de los individuos sin distinciones físicas o cognitivas</h4>
        <p>Inspirados en el humanismo cristiano y liberal, afirmamos el valor de cada vida humana, independientemente de su estado físico o mental. La dignidad no es negociable ni selectiva. Esto nos posiciona en contra de prácticas como el aborto o la eutanasia impuesta, y a favor de una cultura de vida, protección y acompañamiento de los más vulnerables.</p>

        <h4>6. Activismo pacífico por la libertad de Cuba</h4>
        <p>Nuestra lucha no es violenta ni partidista. Nos declaramos herederos de la tradición de lucha moral y civil de los grandes exiliados cubanos y dominicanos. Promovemos un cambio pacífico, ordenado y respetuoso de los derechos humanos en Cuba, apostando por el diálogo, la denuncia pública, el testimonio ético y la solidaridad internacional.</p>

        <h4>7. Unidad y solidaridad caribeña</h4>
        <p>Sabemos que el destino de nuestros pueblos está entrelazado. La historia nos une —como en la Guerra de Independencia cubana o en la solidaridad mutua en tiempos de crisis— y el presente nos exige fraternidad. Apostamos por una comunidad de naciones soberanas pero hermanadas, donde la cooperación se base en el respeto mutuo, no en la imposición ideológica.</p>

        <h4>8. Integridad, trabajo honesto y gratitud al país anfitrión</h4>
        <p>Cada exiliado o migrante debe actuar con ética y honestidad. No se trata solo de cumplir la ley, sino de vivir con decencia y respeto hacia quienes nos han acogido. República Dominicana no es un refugio para abusar de la hospitalidad, sino una oportunidad para contribuir con esfuerzo y compromiso al bien común.</p>

        <br><br>
        <h3>🚫 No apoyamos</h3><br>

        <h4>1. Violación de las leyes dominicanas</h4>
        <p>Toda acción que viole el marco legal nacional pone en riesgo no solo al infractor, sino a toda la comunidad exiliada. Rechazamos el irrespeto a las normas migratorias, laborales, penales o administrativas. La legalidad es el único camino para la integración verdadera.</p>

        <h4>2. Migración descontrolada o desordenada</h4>
        <p>La migración debe ser regulada, ordenada y basada en criterios objetivos. Una llegada masiva y sin regulación perjudica tanto al país receptor como a los propios migrantes. Por eso proponemos soluciones humanitarias viables, pero rechazamos las estrategias caóticas que ponen en crisis la institucionalidad dominicana.</p>

        <h4>3. Abuso de los recursos públicos del país</h4>
        <p>La solidaridad estatal tiene límites y debe ser cuidada. Rechazamos a quienes buscan beneficiarse ilícitamente de programas sociales, suplantar identidades o manipular sistemas de salud o educación. La corrupción, venga de donde venga, es enemiga del bien común.</p>

        <h4>4. Intervención en la política interna de la RD</h4>
        <p>Nuestro compromiso con la libertad no implica participar o incidir en la política partidista dominicana. No es nuestra misión tomar posición sobre asuntos internos, sino más bien cooperar desde el respeto y la neutralidad institucional.</p>

        <h4>5. Explotación laboral de exiliados vulnerables</h4>
        <p>No toleramos que empleadores (dominicanos o cubanos) abusen de la condición migratoria de otros para pagar salarios miserables, negar derechos o mantener condiciones indignas. Quien trabaja merece justicia, dignidad y legalidad.</p>

        <h4>6. Campañas ideológicas racistas, feministas, pro aborto o similares</h4>
        <p>No nos alineamos con ninguna corriente ideológica radical que promueva división, imposición cultural o relativismo moral. Rechazamos el feminismo de género como instrumento político, así como las campañas pro aborto o racistas, que atentan contra la familia, la vida y la unidad social.</p>

        <br><br><br>
    </section>
</main>

<footer>
    <div class="footer-links">
        <a href="index.php">Inicio</a> |
        <a href="cubanos-en-rd-guia.php">Guía Completa</a> |
        <a href="quienes-somos.php">Quiénes Somos</a> |
        <a href="faq.php">FAQ</a> |
        <a href="transparencia.php">Transparencia</a>
    </div>
    <div class="footer-links footer-section">
        <strong>Guías para Migrantes:</strong>
        <a href="regularizacion-rd.php">Regularización</a> |
        <a href="trabajo-derechos-rd.php">Trabajo y Derechos</a> |
        <a href="salud-educacion-migrantes.php">Salud y Educación</a> |
        <a href="vivienda-costo-vida-rd.php">Vivienda</a> |
        <a href="comunidades-apoyo-rd.php">Comunidades</a> |
        <a href="tramites-frecuentes-rd.php">Trámites</a> |
        <a href="errores-comunes-migrantes.php">Errores Comunes</a> |
        <a href="enlaces-utiles.php">Enlaces Útiles</a>
    </div>
    <div class="footer-links footer-section text-sm">
        <a href="privacidad.php">Privacidad</a> |
        <a href="terminos.php">Términos</a>

    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

<?php include 'includes/footer.php'; ?>

