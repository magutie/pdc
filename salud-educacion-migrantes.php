<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Salud y Educación para Migrantes Cubanos en República Dominicana';
$page_description = 'Guía completa sobre acceso a servicios de salud y educación para migrantes cubanos en RD. Hospitales, clínicas, escuelas y derechos educativos.';
$canonical_path = '/salud-educacion-migrantes.php';

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
    ['name' => 'Salud y Educación', 'url' => '/salud-educacion-migrantes.php']
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
            <h1>Salud y Educación para Migrantes Cubanos en República Dominicana</h1>
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
            <span>Salud y Educación</span>
        </nav>

        <section class="intro-section">
            <p class="lead">
                El acceso a servicios de salud y educación es fundamental para el bienestar y la integración exitosa de las familias migrantes. Esta guía te orienta sobre tus derechos, servicios disponibles y cómo acceder al sistema de salud y educación en República Dominicana.
            </p>
        </section>

        <section class="table-contents">
            <h2>Contenido de esta guía</h2>
            <ul>
                <li><a href="#sistema-salud">Sistema de salud dominicano</a></li>
                <li><a href="#servicios-publicos">Servicios públicos de salud</a></li>
                <li><a href="#seguro-salud">Seguro de salud y afiliación</a></li>
                <li><a href="#emergencias">Atención de emergencias</a></li>
                <li><a href="#sistema-educativo">Sistema educativo dominicano</a></li>
                <li><a href="#inscripcion-escolar">Inscripción escolar para migrantes</a></li>
                <li><a href="#educacion-superior">Educación superior y técnica</a></li>
                <li><a href="#convalidacion">Convalidación de estudios</a></li>
            </ul>
        </section>

        <section id="sistema-salud" class="content-section">
            <h2>Sistema de salud en República Dominicana</h2>

            <div class="highlight-box">
                <h3>🏥 Estructura del sistema</h3>
                <p>El sistema de salud dominicano tiene tres componentes principales:</p>
                <ul>
                    <li><strong>Sector público:</strong> Hospitales y centros de salud del Ministerio de Salud Pública</li>
                    <li><strong>Seguridad Social:</strong> Sistema Nacional de Salud (SNS) con régimen contributivo y subsidiado</li>
                    <li><strong>Sector privado:</strong> Clínicas, hospitales y centros médicos privados</li>
                </ul>
            </div>

            <h3>Derechos de salud para migrantes</h3>
            <p>Según la Constitución dominicana y convenios internacionales:</p>
            <ul class="rights-list">
                <li><strong>Atención de emergencias:</strong> Ningún hospital puede negarte atención en caso de emergencia, independientemente de tu estatus migratorio</li>
                <li><strong>Salud materno-infantil:</strong> Acceso a servicios prenatales y pediátricos básicos</li>
                <li><strong>Vacunación:</strong> Programas gratuitos de vacunación para niños</li>
                <li><strong>No discriminación:</strong> Derecho a ser atendido sin discriminación por nacionalidad</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Importante</h4>
                <p>Aunque las emergencias deben atenderse, tener documentación migratoria en regla facilita enormemente el acceso a servicios de salud preventiva y especializada.</p>
            </div>
        </section>

        <section id="servicios-publicos" class="content-section">
            <h2>Servicios públicos de salud disponibles</h2>

            <h3>Centros de Atención Primaria</h3>
            <p><strong>Unidades de Atención Primaria (UNAP):</strong> Ofrecen consultas básicas, medicamentos esenciales y referimientos.</p>
            <ul>
                <li>Horario: Lunes a viernes, 8:00 AM - 4:00 PM</li>
                <li>Costo: Gratuito o bajo costo</li>
                <li>Servicios: Medicina general, pediatría básica, control prenatal</li>
            </ul>

            <h3>Hospitales públicos principales</h3>
            <div class="info-box">
                <h4>Santo Domingo (Distrito Nacional)</h4>
                <ul>
                    <li><strong>Hospital Dr. Darío Contreras:</strong> Av. Máximo Gómez - Emergencias 24h</li>
                    <li><strong>Hospital Materno Infantil San Lorenzo de Los Mina:</strong> Maternidad y pediatría</li>
                    <li><strong>Hospital Docente Padre Billini:</strong> Centro Histórico - Servicios generales</li>
                    <li><strong>Hospital General de la Plaza de la Salud:</strong> Av. Ortega y Gasset</li>
                </ul>

                <h4>Santiago de los Caballeros</h4>
                <ul>
                    <li><strong>Hospital Regional Universitario José María Cabral y Báez:</strong> Principal hospital público</li>
                    <li><strong>Hospital Materno Infantil San Lorenzo de Los Mina (Santiago):</strong> Maternidad</li>
                </ul>

                <h4>Otras ciudades importantes</h4>
                <ul>
                    <li><strong>La Romana:</strong> Hospital Provincial Universitario</li>
                    <li><strong>San Cristóbal:</strong> Hospital Dr. Antonio Musa</li>
                    <li><strong>San Francisco de Macorís:</strong> Hospital Provincial</li>
                </ul>
            </div>

            <h3>Servicios especializados gratuitos</h3>
            <ul>
                <li><strong>Programa Ampliado de Inmunización (PAI):</strong> Vacunación gratuita para niños</li>
                <li><strong>Control prenatal:</strong> En UNAP y hospitales públicos</li>
                <li><strong>Planificación familiar:</strong> Servicios de salud reproductiva</li>
                <li><strong>Prevención VIH/SIDA:</strong> Pruebas y tratamiento gratuito</li>
                <li><strong>Tuberculosis:</strong> Diagnóstico y tratamiento sin costo</li>
            </ul>
        </section>

        <section id="seguro-salud" class="content-section">
            <h2>Seguro de salud y afiliación al SNS</h2>

            <h3>Régimen Contributivo (para trabajadores formales)</h3>
            <p>Si trabajas formalmente con contrato, tu empleador debe afiliarte:</p>
            <ul>
                <li><strong>Requisitos:</strong> Cédula dominicana o carné de residente</li>
                <li><strong>Cobertura:</strong> Tú y hasta 3 dependientes</li>
                <li><strong>Descuento:</strong> Aproximadamente 3% de tu salario</li>
                <li><strong>ARS principales:</strong> SeNaSa, Humano, ARS Palic, Universal, Meta Salud</li>
            </ul>

            <h3>Régimen Subsidiado (para personas de bajos recursos)</h3>
            <p><strong>Requisitos para acceder:</strong></p>
            <ul>
                <li>Estar en situación de pobreza o vulnerabilidad (verificado por SIUBEN)</li>
                <li>No tener empleo formal</li>
                <li>Residir en República Dominicana</li>
            </ul>
            <p class="note"><em>Nota: El acceso al régimen subsidiado puede ser más limitado para migrantes sin residencia permanente.</em></p>

            <h3>Seguros privados</h3>
            <p>Opciones de seguros médicos privados disponibles:</p>
            <ul>
                <li><strong>Seguros internacionales:</strong> Recomendados si viajas frecuentemente</li>
                <li><strong>Planes locales:</strong> Humano Seguros, ARS Palic, Universal Salud</li>
                <li><strong>Costo promedio:</strong> RD$2,000 - RD$8,000 mensuales según cobertura</li>
            </ul>
        </section>

        <section id="emergencias" class="content-section">
            <h2>Atención de emergencias médicas</h2>

            <div class="emergency-box">
                <h3>🚨 Números de emergencia</h3>
                <ul class="emergency-numbers">
                    <li><strong>911:</strong> Emergencias generales (policía, bomberos, ambulancia)</li>
                    <li><strong>Sistema Nacional de Atención a Emergencias y Seguridad 9-1-1</strong></li>
                    <li><strong>Cruz Roja Dominicana:</strong> 809-682-4545</li>
                </ul>
            </div>

            <h3>Qué hacer en una emergencia médica</h3>
            <ol>
                <li><strong>Llama al 911:</strong> Describe la emergencia con calma</li>
                <li><strong>Ve al hospital más cercano:</strong> No esperes ambulancia si es crítico</li>
                <li><strong>Lleva identificación:</strong> Cualquier documento que tengas</li>
                <li><strong>Informa tu situación:</strong> Las emergencias deben atenderse sin importar tu estatus</li>
            </ol>

            <div class="info-box">
                <h4>Farmacias 24 horas</h4>
                <p>En caso de necesitar medicamentos fuera de horario:</p>
                <ul>
                    <li><strong>Farmacia Carol:</strong> Múltiples sucursales 24h en Santo Domingo</li>
                    <li><strong>Farmacia San Judas:</strong> Av. Independencia</li>
                    <li><strong>Farmacias del Pueblo:</strong> Precios reducidos (horario limitado)</li>
                </ul>
            </div>
        </section>

        <section id="sistema-educativo" class="content-section">
            <h2>Sistema educativo dominicano</h2>

            <h3>Estructura del sistema educativo</h3>
            <div class="highlight-box">
                <p><strong>Niveles educativos en República Dominicana:</strong></p>
                <ul>
                    <li><strong>Nivel Inicial:</strong> 3-5 años (pre-primario)</li>
                    <li><strong>Nivel Básico:</strong> 6-14 años (1° a 8° grado)</li>
                    <li><strong>Nivel Medio:</strong> 14-18 años (1° a 4° de secundaria)</li>
                    <li><strong>Nivel Superior:</strong> Universidades e institutos técnicos</li>
                </ul>
            </div>

            <h3>Derecho a la educación para hijos de migrantes</h3>
            <p><strong>Según la Constitución dominicana (Art. 63):</strong></p>
            <ul class="rights-list">
                <li>Todo niño y niña tiene derecho a la educación integral</li>
                <li>La educación básica es obligatoria y gratuita</li>
                <li>Ningún niño puede ser excluido del sistema educativo por nacionalidad</li>
                <li>El Estado debe garantizar educación de calidad sin discriminación</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Realidad práctica</h4>
                <p>Aunque la educación es un derecho, algunas escuelas pueden solicitar documentación migratoria. Si enfrentas rechazo, contacta al Ministerio de Educación o a Patriotas del Caribe para orientación.</p>
            </div>
        </section>

        <section id="inscripcion-escolar" class="content-section">
            <h2>Cómo inscribir a tus hijos en escuelas dominicanas</h2>

            <h3>Documentos necesarios</h3>
            <p><strong>Documentación ideal:</strong></p>
            <ul>
                <li>Acta de nacimiento apostillada y traducida (si está en otro idioma)</li>
                <li>Récord de notas o certificado de estudios del país de origen</li>
                <li>Certificado de vacunación</li>
                <li>Copia de cédula o pasaporte de los padres</li>
                <li>Comprobante de domicilio</li>
                <li>Fotos 2x2</li>
            </ul>

            <p><strong>Si no tienes todos los documentos:</strong></p>
            <ul>
                <li>Explica tu situación al director de la escuela</li>
                <li>Solicita inscripción provisional mientras gestionas documentos</li>
                <li>Contacta al Ministerio de Educación (MINERD) para asesoría</li>
                <li>Busca apoyo de organizaciones como Patriotas del Caribe</li>
            </ul>

            <h3>Proceso de inscripción</h3>
            <ol>
                <li><strong>Identifica escuelas cercanas:</strong> Públicas o privadas según tu presupuesto</li>
                <li><strong>Visita la escuela:</strong> Pregunta por el proceso de admisión</li>
                <li><strong>Presenta documentos:</strong> O explica tu situación si están incompletos</li>
                <li><strong>Evaluación de nivel:</strong> Pueden hacer una prueba para determinar el grado apropiado</li>
                <li><strong>Matrícula:</strong> Escuelas públicas son gratuitas, privadas tienen costos variables</li>
            </ol>

            <h3>Escuelas públicas vs privadas</h3>
            <table class="comparison-table">
                <tr>
                    <th>Aspecto</th>
                    <th>Escuelas Públicas</th>
                    <th>Escuelas Privadas</th>
                </tr>
                <tr>
                    <td><strong>Costo</strong></td>
                    <td>Gratuitas</td>
                    <td>RD$3,000 - RD$30,000+ mensuales</td>
                </tr>
                <tr>
                    <td><strong>Requisitos</strong></td>
                    <td>Más flexibles</td>
                    <td>Pueden ser más estrictos con documentación</td>
                </tr>
                <tr>
                    <td><strong>Calidad</strong></td>
                    <td>Variable según ubicación</td>
                    <td>Generalmente mejor infraestructura</td>
                </tr>
                <tr>
                    <td><strong>Horario</strong></td>
                    <td>Jornada extendida o tandas</td>
                    <td>Jornada completa usualmente</td>
                </tr>
            </table>
        </section>

        <section id="educacion-superior" class="content-section">
            <h2>Educación superior y técnica</h2>

            <h3>Universidades públicas principales</h3>
            <ul>
                <li><strong>Universidad Autónoma de Santo Domingo (UASD):</strong> La más grande y antigua, bajo costo</li>
                <li><strong>Universidad Tecnológica de Santiago (UTESA):</strong> Enfoque técnico</li>
                <li><strong>Universidad del Caribe (UNICARIBE):</strong> Varias sedes</li>
            </ul>

            <h3>Institutos técnicos (INFOTEP)</h3>
            <p><strong>Instituto Nacional de Formación Técnico Profesional:</strong></p>
            <ul>
                <li>Cursos técnicos gratuitos o de bajo costo</li>
                <li>Áreas: gastronomía, electricidad, belleza, construcción, informática</li>
                <li>Duración: 3-12 meses según programa</li>
                <li>Requisitos: Generalmente solo bachillerato</li>
            </ul>
            <p><strong>Sitio web:</strong> <a href="https://www.infotep.gob.do" target="_blank">www.infotep.gob.do</a></p>

            <h3>Requisitos para estudiar en universidades</h3>
            <p>Como migrante cubano necesitarás:</p>
            <ul>
                <li>Bachillerato convalidado (ver sección siguiente)</li>
                <li>Pasaporte vigente</li>
                <li>Visa de estudiante o residencia</li>
                <li>Certificado de notas apostillado</li>
                <li>Prueba de admisión (según universidad)</li>
            </ul>

            <div class="info-box">
                <h4>💡 Becas y ayudas</h4>
                <p>Algunas opciones de apoyo financiero:</p>
                <ul>
                    <li>Becas del MESCYT (Ministerio de Educación Superior)</li>
                    <li>Programas de trabajo-estudio en universidades privadas</li>
                    <li>Becas de organizaciones internacionales</li>
                    <li>Planes de pago flexibles en universidades privadas</li>
                </ul>
            </div>
        </section>

        <section id="convalidacion" class="content-section">
            <h2>Convalidación de estudios cubanos</h2>

            <h3>¿Qué es la convalidación?</h3>
            <p>Es el proceso de reconocimiento oficial de tus estudios realizados en Cuba por parte del sistema educativo dominicano.</p>

            <h3>Convalidación de bachillerato (secundaria)</h3>
            <p><strong>Proceso en el Ministerio de Educación (MINERD):</strong></p>
            <ol>
                <li><strong>Reúne documentos:</strong>
                    <ul>
                        <li>Título de bachiller apostillado</li>
                        <li>Récord de notas apostillado</li>
                        <li>Pasaporte o cédula</li>
                        <li>Solicitud de convalidación (formulario del MINERD)</li>
                    </ul>
                </li>
                <li><strong>Presenta en MINERD:</strong> Dirección de Convalidaciones, Av. Máximo Gómez, Santo Domingo</li>
                <li><strong>Pago de tasas:</strong> Aproximadamente RD$500-1,000</li>
                <li><strong>Tiempo de espera:</strong> 1-3 meses</li>
            </ol>

            <h3>Convalidación de títulos universitarios</h3>
            <p><strong>Proceso en el MESCYT (Ministerio de Educación Superior):</strong></p>
            <ol>
                <li><strong>Documentos necesarios:</strong>
                    <ul>
                        <li>Título universitario apostillado</li>
                        <li>Récord de notas completo apostillado</li>
                        <li>Pensum de estudios (plan de estudios de la carrera)</li>
                        <li>Pasaporte y visa/residencia</li>
                        <li>Solicitud oficial del MESCYT</li>
                    </ul>
                </li>
                <li><strong>Ubicación:</strong> MESCYT, Av. Máximo Gómez esq. Santiago, Santo Domingo</li>
                <li><strong>Costo:</strong> Variable según nivel (grado, maestría, etc.)</li>
                <li><strong>Tiempo:</strong> 3-6 meses o más</li>
            </ol>

            <div class="warning-box">
                <h4>⚠️ Importante sobre apostillas</h4>
                <p>Los documentos cubanos deben estar apostillados en Cuba antes de salir del país. Si ya estás en RD sin apostillas, el proceso será más complejo y puede requerir gestiones consulares.</p>
            </div>

            <h3>Alternativas si no tienes documentos</h3>
            <ul>
                <li><strong>Pruebas de suficiencia:</strong> El MINERD puede evaluar tus conocimientos mediante exámenes</li>
                <li><strong>Bachillerato acelerado:</strong> Programas para adultos que permiten obtener bachillerato dominicano en 1-2 años</li>
                <li><strong>Educación a distancia:</strong> Opciones para completar secundaria mientras trabajas</li>
            </ul>

            <h3>Contactos útiles</h3>
            <ul>
                <li><strong>MINERD (Educación Básica y Media):</strong> 809-688-9700</li>
                <li><strong>MESCYT (Educación Superior):</strong> 809-731-1100</li>
                <li><strong>INFOTEP:</strong> 809-566-4161</li>
            </ul>
        </section>

        <section class="related-content">
            <h2>Contenido relacionado</h2>
            <div class="related-links">
                <a href="/cubanos-en-rd-guia.php" class="related-card">
                    <h3>📚 Guía Completa para Cubanos en RD</h3>
                    <p>Toda la información esencial en un solo lugar</p>
                </a>
                <a href="/trabajo-derechos-rd.php" class="related-card">
                    <h3>💼 Trabajo y Derechos Laborales</h3>
                    <p>Guía sobre empleo formal e informal en RD</p>
                </a>
                <a href="/regularizacion-rd.php" class="related-card">
                    <h3>📋 Regularización Migratoria</h3>
                    <p>Pasos para legalizar tu situación en RD</p>
                </a>
            </div>
        </section>

        <?php require_once 'includes/cta-templates.php'; includeCTA('registro'); ?>

    </article>
</main>

<?php require_once 'includes/footer-content.php'; ?>
<?php require_once 'includes/footer.php'; ?>

</body>
</html>