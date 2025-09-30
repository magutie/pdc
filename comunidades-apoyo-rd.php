<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Comunidades y Redes de Apoyo para Migrantes Cubanos en República Dominicana';
$page_description = 'Directorio completo de ONGs, iglesias, grupos comunitarios y redes de apoyo para cubanos en RD. Conecta con tu comunidad y encuentra ayuda.';
$canonical_path = '/comunidades-apoyo-rd.php';

require_once 'includes/head.php';

// Generar schema Article
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-09-30",
    "images/preview.jpg"
);

// Generar breadcrumb schema
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Inicio', 'url' => '/'],
    ['name' => 'Guía para Cubanos en RD', 'url' => '/cubanos-en-rd-guia.php'],
    ['name' => 'Comunidades y Redes de Apoyo', 'url' => '/comunidades-apoyo-rd.php']
]);

// Imprimir schemas
printSchemas([$articleSchema, $breadcrumbSchema]);
?>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site_config['gtm_id']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header-container">
    <div class="header">
        <div class="logo-eslogan">
            <h1>Comunidades y Redes de Apoyo para Migrantes Cubanos</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo Patriotas del Caribe - Fundación de apoyo a migrantes cubanos en República Dominicana" class="logo" loading="eager">
        </div>
    </div>

    <?php require_once 'includes/navigation-system.php'; ?>
</div>

<main class="main-content">
    <article class="content-article">
        <nav class="breadcrumb">
            <a href="/">Inicio</a> >
            <a href="/cubanos-en-rd-guia.php">Guía para Cubanos en RD</a> >
            <span>Comunidades y Redes de Apoyo</span>
        </nav>

        <section class="intro-section">
            <p class="lead">
                La migración es más llevadera cuando cuentas con una comunidad que te apoya. En República Dominicana existen numerosas organizaciones, iglesias, grupos comunitarios y redes de cubanos que ofrecen ayuda, orientación y solidaridad. Esta guía te conectará con los recursos disponibles.
            </p>
        </section>

        <section class="table-contents">
            <h2>Contenido de esta guía</h2>
            <ul>
                <li><a href="#patriotas-caribe">Patriotas del Caribe</a></li>
                <li><a href="#organizaciones-cubanas">Organizaciones de cubanos en RD</a></li>
                <li><a href="#ongs-migracion">ONGs de apoyo a migrantes</a></li>
                <li><a href="#iglesias-apoyo">Iglesias y grupos religiosos</a></li>
                <li><a href="#grupos-facebook">Grupos de Facebook y WhatsApp</a></li>
                <li><a href="#asistencia-legal">Asistencia legal gratuita</a></li>
                <li><a href="#ayuda-humanitaria">Ayuda humanitaria y emergencias</a></li>
                <li><a href="#como-conectar">Cómo conectar con la comunidad</a></li>
            </ul>
        </section>

        <section id="patriotas-caribe" class="content-section">
            <h2>Fundación Patriotas del Caribe</h2>

            <div class="highlight-box organization-main">
                <h3>🇨🇺 Nuestra Misión</h3>
                <p><strong>Patriotas del Caribe</strong> es una organización sin fines de lucro dedicada exclusivamente a apoyar a la comunidad cubana en República Dominicana mediante:</p>
                <ul>
                    <li>Asesoría en regularización migratoria</li>
                    <li>Orientación laboral y de derechos</li>
                    <li>Registro y seguimiento de casos</li>
                    <li>Red de apoyo comunitario</li>
                    <li>Defensa de derechos humanos</li>
                    <li>Educación cívica y cultural</li>
                </ul>
            </div>

            <h3>Servicios que ofrecemos</h3>
            <ul class="services-list">
                <li><strong>Registro gratuito:</strong> Sistema de registro para migrantes cubanos</li>
                <li><strong>Orientación migratoria:</strong> Información sobre procesos de regularización</li>
                <li><strong>Asesoría laboral:</strong> Guía sobre derechos laborales y búsqueda de empleo</li>
                <li><strong>Referimientos:</strong> Conexión con abogados, médicos y otros profesionales</li>
                <li><strong>Red de contactos:</strong> Conectamos cubanos en diferentes ciudades</li>
                <li><strong>Información actualizada:</strong> Sobre cambios en leyes y procedimientos</li>
            </ul>

            <h3>Cómo contactarnos</h3>
            <div class="contact-box">
                <ul>
                    <li><strong>🌐 Sitio web:</strong> <a href="https://www.patriotasdelcaribe.com">www.patriotasdelcaribe.com</a></li>
                    <li><strong>📧 Email:</strong> contacto@patriotasdelcaribe.com</li>
                    <li><strong>📱 WhatsApp:</strong> <a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" target="_blank">Grupo WhatsApp</a></li>
                    <li><strong>📘 Facebook:</strong> <a href="https://www.facebook.com/groups/1672337816821354" target="_blank">Grupo Patriotas del Caribe</a></li>
                    <li><strong>📷 Instagram:</strong> <a href="https://www.instagram.com/patriotasdelcaribe" target="_blank">@patriotasdelcaribe</a></li>
                </ul>
                <p class="note"><strong>Horario de atención:</strong> Respondemos mensajes de lunes a viernes, 9:00 AM - 6:00 PM (hora RD)</p>
            </div>
        </section>

        <section id="organizaciones-cubanas" class="content-section">
            <h2>Organizaciones de la comunidad cubana en RD</h2>

            <h3>Asociaciones y grupos establecidos</h3>

            <div class="organization-card">
                <h4>Asociación de Cubanos Residentes en República Dominicana</h4>
                <p><strong>Ubicación:</strong> Santo Domingo</p>
                <p><strong>Servicios:</strong> Eventos culturales, networking, apoyo mutuo entre cubanos</p>
                <p><strong>Contacto:</strong> A través de grupos de Facebook</p>
            </div>

            <div class="organization-card">
                <h4>Comunidad Cubana en Santiago</h4>
                <p><strong>Ubicación:</strong> Santiago de los Caballeros</p>
                <p><strong>Servicios:</strong> Reuniones comunitarias, información sobre trabajo en zonas francas</p>
                <p><strong>Contacto:</strong> Grupos de WhatsApp y Facebook</p>
            </div>

            <div class="info-box">
                <h4>💡 Nota sobre organizaciones informales</h4>
                <p>Muchas comunidades cubanas se organizan de manera informal a través de redes sociales. Busca "Cubanos en [tu ciudad]" en Facebook para encontrar el grupo local.</p>
            </div>
        </section>

        <section id="ongs-migracion" class="content-section">
            <h2>ONGs internacionales de apoyo a migrantes</h2>

            <div class="organization-card">
                <h4>ACNUR - Alto Comisionado de las Naciones Unidas para los Refugiados</h4>
                <p><strong>Servicios:</strong> Protección a refugiados y solicitantes de asilo</p>
                <p><strong>Ubicación:</strong> Av. Lope de Vega #29, Santo Domingo</p>
                <p><strong>WhatsApp:</strong> +1 (849) 451-1490</p>
                <p><strong>Email:</strong> domsasug@unhcr.org</p>
                <p><strong>Web:</strong> <a href="https://www.acnur.org/republica-dominicana" target="_blank">www.acnur.org/republica-dominicana</a></p>
                <p><strong>Nota:</strong> Atienden principalmente casos de refugio y asilo</p>
            </div>

            <div class="organization-card">
                <h4>OIM - Organización Internacional para las Migraciones</h4>
                <p><strong>Servicios:</strong> Asistencia a migrantes, retorno voluntario, integración</p>
                <p><strong>Ubicación:</strong> Calle Socorro Sánchez 152, Gazcue, Santo Domingo</p>
                <p><strong>Teléfono:</strong> (809) 688-8174</p>
                <p><strong>Web:</strong> <a href="https://www.iom.int/es/republica-dominicana" target="_blank">www.iom.int/es/republica-dominicana</a></p>
            </div>

            <div class="organization-card">
                <h4>Servicio Jesuita a Refugiados y Migrantes (SJRM)</h4>
                <p><strong>Servicios:</strong> Asistencia legal, apoyo psicosocial, educación</p>
                <p><strong>Ubicación:</strong> Santo Domingo</p>
                <p><strong>Contacto:</strong> A través de la Red Jesuita con Migrantes</p>
                <p><strong>Enfoque:</strong> Acompañamiento integral a migrantes y refugiados</p>
            </div>

            <div class="organization-card">
                <h4>OBMICA - Observatorio Migrantes del Caribe</h4>
                <p><strong>Servicios:</strong> Investigación, incidencia, capacitación en derechos de migrantes</p>
                <p><strong>Ubicación:</strong> Calle Santiago #352, Gazcue, Santo Domingo</p>
                <p><strong>Teléfono:</strong> (809) 221-6993</p>
                <p><strong>Email:</strong> obmicard@gmail.com</p>
                <p><strong>Web:</strong> <a href="http://obmica.org" target="_blank">obmica.org</a></p>
            </div>

            <div class="organization-card">
                <h4>Jesuit Refugee Service / JRS</h4>
                <p><strong>Servicios:</strong> Educación, asistencia legal, apoyo a refugiados</p>
                <p><strong>Ubicación:</strong> Haina, San Cristóbal y Santo Domingo</p>
                <p><strong>Enfoque:</strong> Personas en situación de refugio</p>
            </div>
        </section>

        <section id="iglesias-apoyo" class="content-section">
            <h2>Iglesias y grupos religiosos de apoyo</h2>

            <div class="highlight-box">
                <h3>⛪ Importancia de las iglesias</h3>
                <p>Las iglesias en República Dominicana han sido tradicionalmente un espacio de acogida para migrantes. Muchas ofrecen:</p>
                <ul>
                    <li>Ayuda alimentaria y de emergencia</li>
                    <li>Orientación y consejería</li>
                    <li>Conexión con redes de apoyo</li>
                    <li>Espacios de comunidad y socialización</li>
                    <li>Asistencia en trámites y documentación</li>
                </ul>
            </div>

            <h3>Red de iglesias con ministerio migrante</h3>

            <div class="church-card">
                <h4>Cáritas Dominicana</h4>
                <p><strong>Afiliación:</strong> Iglesia Católica</p>
                <p><strong>Servicios:</strong> Asistencia humanitaria, alimentos, asesoría legal</p>
                <p><strong>Ubicación:</strong> Calle Coronel Rafael Fdez. Domínguez Esq. 51, Santo Domingo</p>
                <p><strong>Teléfono:</strong> (809) 565-7746</p>
                <p><strong>Email:</strong> directornacional@caritas.org.do</p>
                <p><strong>Enfoque:</strong> Apoyo integral a personas vulnerables incluyendo migrantes</p>
            </div>

            <div class="church-card">
                <h4>Red Jesuita con Migrantes (RJM)</h4>
                <p><strong>Servicios:</strong> Acompañamiento legal, educación, defensa de derechos</p>
                <p><strong>Ubicación:</strong> Santo Domingo y zonas fronterizas</p>
                <p><strong>Enfoque:</strong> Derechos humanos de migrantes y refugiados</p>
            </div>

            <div class="church-card">
                <h4>Iglesia Evangélica Dominicana</h4>
                <p><strong>Servicios:</strong> Grupos de apoyo, asistencia social</p>
                <p><strong>Ubicaciones:</strong> Múltiples congregaciones en ciudades principales</p>
                <p><strong>Nota:</strong> Contacta iglesias locales en tu barrio</p>
            </div>

            <h3>Cómo buscar iglesias en tu zona</h3>
            <ol>
                <li>Pregunta a vecinos por iglesias cercanas con servicios para migrantes</li>
                <li>Busca en Google Maps: "iglesia católica [tu barrio]" o "iglesia evangélica [tu barrio]"</li>
                <li>Visita en horarios de misa/culto y pregunta por programas de ayuda social</li>
                <li>Contacta directamente al párroco o pastor explicando tu situación</li>
            </ol>
        </section>

        <section id="grupos-facebook" class="content-section">
            <h2>Grupos de Facebook y WhatsApp</h2>

            <h3>Grupos de Facebook más activos</h3>
            <div class="facebook-groups">
                <div class="group-card">
                    <h4>📘 Patriotas del Caribe</h4>
                    <p><strong>Miembros:</strong> Creciente comunidad</p>
                    <p><strong>Enfoque:</strong> Apoyo integral a cubanos en RD</p>
                    <p><strong>Link:</strong> <a href="https://www.facebook.com/groups/1672337816821354" target="_blank">Unirse al grupo</a></p>
                    <p><strong>Contenido:</strong> Orientación migratoria, ofertas de trabajo, consultas legales</p>
                </div>

                <div class="group-card">
                    <h4>📘 Cubanos en República Dominicana</h4>
                    <p><strong>Miembros:</strong> +10,000</p>
                    <p><strong>Enfoque:</strong> Información general, networking</p>
                    <p><strong>Búsqueda:</strong> "Cubanos en República Dominicana" en Facebook</p>
                    <p><strong>Contenido:</strong> Ofertas de empleo, vivienda, experiencias</p>
                </div>

                <div class="group-card">
                    <h4>📘 Cubanos en Santo Domingo RD</h4>
                    <p><strong>Enfoque:</strong> Específico de la capital</p>
                    <p><strong>Contenido:</strong> Alquileres, empleo local, eventos</p>
                </div>

                <div class="group-card">
                    <h4>📘 Cubanos en Santiago RD</h4>
                    <p><strong>Enfoque:</strong> Comunidad de Santiago de los Caballeros</p>
                    <p><strong>Contenido:</strong> Trabajo en zonas francas, vivienda local</p>
                </div>

                <div class="group-card">
                    <h4>📘 Compra y Venta - Cubanos en RD</h4>
                    <p><strong>Enfoque:</strong> Marketplace entre cubanos</p>
                    <p><strong>Contenido:</strong> Artículos, servicios, empleo</p>
                </div>
            </div>

            <h3>Grupos de WhatsApp</h3>
            <p><strong>Principales redes de WhatsApp:</strong></p>
            <ul>
                <li><strong>Patriotas del Caribe:</strong> <a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" target="_blank">Unirse al grupo</a></li>
                <li><strong>Grupos por ciudad:</strong> Solicita invitación en grupos de Facebook</li>
                <li><strong>Grupos por sector:</strong> Construcción, gastronomía, belleza, etc.</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Seguridad en grupos online</h4>
                <ul>
                    <li>Verifica la información antes de actuar</li>
                    <li>No compartas datos personales sensibles públicamente</li>
                    <li>Desconfía de ofertas "demasiado buenas"</li>
                    <li>Reúnete en lugares públicos si vas a hacer transacciones</li>
                    <li>Reporta estafas a los administradores</li>
                </ul>
            </div>
        </section>

        <section id="asistencia-legal" class="content-section">
            <h2>Asistencia legal gratuita o de bajo costo</h2>

            <div class="organization-card">
                <h4>Clínicas Jurídicas Universitarias</h4>
                <p><strong>UASD - Universidad Autónoma de Santo Domingo:</strong></p>
                <ul>
                    <li>Consultas legales gratuitas de estudiantes supervisados</li>
                    <li>Ubicación: Facultad de Ciencias Jurídicas, Ciudad Universitaria</li>
                    <li>Servicios: Orientación en derecho migratorio, laboral, civil</li>
                </ul>
                <p><strong>UNPHU, PUCMM:</strong> Otras universidades también ofrecen clínicas jurídicas</p>
            </div>

            <div class="organization-card">
                <h4>Defensoría Pública</h4>
                <p><strong>Servicios:</strong> Asistencia legal gratuita para personas de bajos recursos</p>
                <p><strong>Teléfono:</strong> 809-533-3191</p>
                <p><strong>Ubicación:</strong> Av. Enriquillo esquina Túnti Cáceres, Santo Domingo</p>
                <p><strong>Nota:</strong> Principalmente para casos penales, pero pueden orientar en temas migratorios</p>
            </div>

            <div class="organization-card">
                <h4>Colegio de Abogados de la República Dominicana</h4>
                <p><strong>Servicios:</strong> Referimientos a abogados, información sobre servicios pro bono</p>
                <p><strong>Teléfono:</strong> 809-685-9351</p>
                <p><strong>Web:</strong> <a href="http://card.org.do" target="_blank">card.org.do</a></p>
            </div>

            <h3>Consejos para buscar abogado</h3>
            <ul class="tips-list">
                <li>Pregunta en la comunidad cubana por referencias</li>
                <li>Verifica que el abogado tenga experiencia en migración</li>
                <li>Solicita presupuesto detallado antes de contratar</li>
                <li>Desconfía de promesas de resultados garantizados</li>
                <li>Pide recibo por cada pago realizado</li>
            </ul>
        </section>

        <section id="ayuda-humanitaria" class="content-section">
            <h2>Ayuda humanitaria y emergencias</h2>

            <div class="organization-card">
                <h4>Cruz Roja Dominicana</h4>
                <p><strong>Servicios:</strong> Ayuda en desastres, primeros auxilios, banco de sangre</p>
                <p><strong>Teléfono emergencia:</strong> 809-682-4545</p>
                <p><strong>Web:</strong> <a href="https://www.cruzrojadominicana.org" target="_blank">cruzrojadominicana.org</a></p>
            </div>

            <div class="organization-card">
                <h4>Defensa Civil</h4>
                <p><strong>Servicios:</strong> Prevención y respuesta a emergencias y desastres</p>
                <p><strong>Teléfono:</strong> 809-472-8614</p>
                <p><strong>Emergencias:</strong> 911</p>
            </div>

            <div class="organization-card">
                <h4>Comedores Económicos del Estado</h4>
                <p><strong>Servicios:</strong> Alimentación subsidiada para personas de bajos recursos</p>
                <p><strong>Costo:</strong> RD$20-50 por comida completa</p>
                <p><strong>Ubicaciones:</strong> Múltiples puntos en ciudades principales</p>
                <p><strong>Buscar:</strong> Google Maps "Comedores Económicos"</p>
            </div>

            <h3>Situaciones de emergencia</h3>
            <p><strong>Si te encuentras en situación de emergencia humanitaria:</strong></p>
            <ol>
                <li>Contacta a Patriotas del Caribe inmediatamente</li>
                <li>Comunícate con iglesias locales (Cáritas, parroquias)</li>
                <li>Acude a Cruz Roja más cercana</li>
                <li>Contacta al consulado cubano en caso necesario</li>
                <li>Usa grupos de WhatsApp para solicitar ayuda comunitaria</li>
            </ol>
        </section>

        <section id="como-conectar" class="content-section">
            <h2>Cómo conectar efectivamente con la comunidad</h2>

            <h3>Pasos para integrarte</h3>
            <ol class="integration-steps">
                <li><strong>Regístrate en Patriotas del Caribe:</strong> Primera acción al llegar</li>
                <li><strong>Únete a grupos de Facebook:</strong> Busca grupos de tu ciudad</li>
                <li><strong>Participa activamente:</strong> Pregunta, comparte, ayuda a otros</li>
                <li><strong>Asiste a eventos comunitarios:</strong> Reuniones, celebraciones cubanas</li>
                <li><strong>Visita iglesias locales:</strong> Gran fuente de red de apoyo</li>
                <li><strong>Conecta en tu trabajo:</strong> Probablemente hay otros cubanos</li>
                <li><strong>Comparte tu experiencia:</strong> Ayuda a recién llegados como te ayudaron a ti</li>
            </ol>

            <h3>Beneficios de la red comunitaria</h3>
            <ul class="benefits-list">
                <li>Información actualizada y confiable</li>
                <li>Ofertas de empleo compartidas</li>
                <li>Compartir vivienda y reducir costos</li>
                <li>Apoyo emocional en momentos difíciles</li>
                <li>Celebrar cultura y tradiciones juntos</li>
                <li>Protección ante abusos (unión hace la fuerza)</li>
                <li>Oportunidades de negocio y emprendimiento</li>
            </ul>

            <div class="info-box">
                <h4>💡 El poder de la comunidad</h4>
                <p>La experiencia de miles de cubanos muestra que quienes se conectan con su comunidad se establecen más rápido y mejor en República Dominicana. No estás solo/a - hay miles de compatriotas dispuestos a ayudar.</p>
            </div>
        </section>

        <section class="related-content">
            <h2>Contenido relacionado</h2>
            <div class="related-links">
                <a href="/cubanos-en-rd-guia.php" class="related-card">
                    <h3>📚 Guía Completa para Cubanos en RD</h3>
                    <p>Toda la información esencial en un solo lugar</p>
                </a>
                <a href="/regularizacion-rd.php" class="related-card">
                    <h3>📋 Regularización Migratoria</h3>
                    <p>Pasos para legalizar tu situación en RD</p>
                </a>
                <a href="/trabajo-derechos-rd.php" class="related-card">
                    <h3>💼 Trabajo y Derechos Laborales</h3>
                    <p>Guía sobre empleo y derechos en RD</p>
                </a>
            </div>
        </section>

        <?php require_once 'includes/cta-templates.php'; includeCTA('registro'); ?>

    </article>
</main>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>