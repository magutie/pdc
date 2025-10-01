<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Trabajo formal e informal para cubanos en República Dominicana: derechos y consejos';
$page_description = 'Guía completa sobre derechos laborales, trabajo formal e informal para migrantes cubanos en República Dominicana. Consejos prácticos y orientación legal.';
$canonical_path = '/trabajo-derechos-rd.php';

require_once 'includes/head.php';

// Generar schema Article
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-01-27",
    "images/trabajo-rd-preview.jpg"
);

// Agregar schema Article
echo '<script type="application/ld+json">' . "\n";
echo json_encode($articleSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo "\n" . '</script>' . "\n";
?>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site_config['gtm_id']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header-container">
    <div class="header">
        <div class="logo-eslogan">
            <h1>Trabajo formal e informal para cubanos en República Dominicana</h1>
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
            <span>Trabajo y Derechos</span>
        </nav>

        <section class="intro-section">
            <p class="lead">
                El acceso al trabajo digno es fundamental para la integración exitosa en República Dominicana. Esta guía te ayudará a entender tus derechos laborales, las opciones disponibles y cómo protegerte en el ámbito laboral dominicano.
            </p>
        </section>

        <section class="table-contents">
            <h2>Contenido de esta guía</h2>
            <ul>
                <li><a href="#derechos-laborales">Derechos laborales fundamentales</a></li>
                <li><a href="#trabajo-formal">Trabajo formal: requisitos y beneficios</a></li>
                <li><a href="#trabajo-informal">Trabajo informal: riesgos y protecciones</a></li>
                <li><a href="#sectores-empleadores">Sectores que más emplean migrantes</a></li>
                <li><a href="#buscar-empleo">Cómo buscar empleo efectivamente</a></li>
                <li><a href="#contratos-salarios">Contratos y salarios justos</a></li>
                <li><a href="#proteccion-legal">Protección ante abusos laborales</a></li>
                <li><a href="#emprendimiento">Emprendimiento y autoempleo</a></li>
            </ul>
        </section>

        <section id="derechos-laborales" class="content-section">
            <h2>Derechos laborales fundamentales en República Dominicana</h2>

            <div class="highlight-box">
                <h3>🏛️ Marco legal aplicable</h3>
                <p><strong>Todos los trabajadores en República Dominicana, independientemente de su estatus migratorio, tienen derechos laborales básicos protegidos por:</strong></p>
                <ul>
                    <li>Código de Trabajo Dominicano (Ley 16-92)</li>
                    <li>Constitución de República Dominicana</li>
                    <li>Convenios internacionales de la OIT ratificados por RD</li>
                </ul>
            </div>

            <h3>Derechos básicos que NO pueden negarte</h3>
            <ul class="rights-list">
                <li><strong>Salario justo:</strong> No menor al salario mínimo establecido por sector</li>
                <li><strong>Pago puntual:</strong> Máximo cada 15 días para trabajadores por hora</li>
                <li><strong>Jornada laboral:</strong> Máximo 8 horas diarias, 44 horas semanales</li>
                <li><strong>Descanso dominical:</strong> 36 horas continuas de descanso</li>
                <li><strong>Vacaciones:</strong> 14 días calendario después de un año trabajado</li>
                <li><strong>Regalía pascual:</strong> Equivalente a un mes de salario</li>
                <li><strong>Ambiente seguro:</strong> Condiciones laborales que no pongan en riesgo tu salud</li>
                <li><strong>No discriminación:</strong> Por nacionalidad, raza, género o condición migratoria</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Importante</h4>
                <p>Estos derechos aplican incluso si no tienes permiso de trabajo formal. La irregularidad migratoria NO anula tus derechos laborales básicos.</p>
            </div>
        </section>

        <section id="trabajo-formal" class="content-section">
            <h2>Trabajo formal: requisitos y beneficios</h2>

            <h3>Requisitos para trabajar formalmente</h3>
            <div class="requirements-grid">
                <div class="requirement-card">
                    <h4>📄 Documentos básicos</h4>
                    <ul>
                        <li>Cédula de identidad o pasaporte</li>
                        <li>Permiso de trabajo (si aplica)</li>
                        <li>Certificados académicos apostillados</li>
                        <li>Antecedentes penales apostillados</li>
                    </ul>
                </div>
                <div class="requirement-card">
                    <h4>🏥 Salud</h4>
                    <ul>
                        <li>Certificado médico general</li>
                        <li>Exámenes específicos por sector</li>
                        <li>Vacunas requeridas</li>
                    </ul>
                </div>
                <div class="requirement-card">
                    <h4>💼 Profesionales</h4>
                    <ul>
                        <li>Revalidación de títulos</li>
                        <li>Incorporación a colegios profesionales</li>
                        <li>Experiencia comprobable</li>
                    </ul>
                </div>
            </div>

            <h3>Beneficios del trabajo formal</h3>
            <div class="benefits-list">
                <div class="benefit-item">
                    <h4>🛡️ Seguridad Social</h4>
                    <p>Acceso al sistema de salud dominicano (SENASA) y pensiones</p>
                </div>
                <div class="benefit-item">
                    <h4>💰 Protección económica</h4>
                    <p>Regalía pascual, vacaciones pagadas, liquidación por despido</p>
                </div>
                <div class="benefit-item">
                    <h4>📋 Historial crediticio</h4>
                    <p>Posibilidad de acceder a créditos bancarios y financiamiento</p>
                </div>
                <div class="benefit-item">
                    <h4>🏠 Estabilidad migratoria</h4>
                    <p>Contrato de trabajo facilita renovación de residencia</p>
                </div>
            </div>
        </section>

        <section id="trabajo-informal" class="content-section">
            <h2>Trabajo informal: riesgos y protecciones</h2>

            <p>Muchos migrantes cubanos inician en el sector informal. Es importante conocer los riesgos y cómo protegerte.</p>

            <div class="warning-box">
                <h3>⚠️ Riesgos del trabajo informal</h3>
                <ul>
                    <li><strong>Sin protección legal:</strong> Difícil reclamar derechos laborales</li>
                    <li><strong>Inestabilidad económica:</strong> Sin garantía de ingresos regulares</li>
                    <li><strong>Sin beneficios:</strong> No hay vacaciones, regalía ni seguro médico</li>
                    <li><strong>Explotación:</strong> Salarios por debajo del mínimo, horarios excesivos</li>
                    <li><strong>Problemas migratorios:</strong> No ayuda con regularización</li>
                </ul>
            </div>

            <h3>Cómo protegerte en el trabajo informal</h3>
            <div class="protection-tips">
                <div class="tip-card">
                    <h4>📝 Documenta todo</h4>
                    <ul>
                        <li>Guarda mensajes sobre horarios y pagos</li>
                        <li>Toma fotos de tu lugar de trabajo</li>
                        <li>Anota fechas y montos pagados</li>
                    </ul>
                </div>
                <div class="tip-card">
                    <h4>🤝 Busca testigos</h4>
                    <ul>
                        <li>Conecta con otros trabajadores</li>
                        <li>Mantén contacto con compañeros</li>
                        <li>Comparte experiencias con la comunidad</li>
                    </ul>
                </div>
                <div class="tip-card">
                    <h4>⚖️ Conoce tus opciones</h4>
                    <ul>
                        <li>Contacta ONGs de derechos laborales</li>
                        <li>Asesórate sobre reclamos legales</li>
                        <li>Busca formalización progresiva</li>
                    </ul>
                </div>
            </div>

            <h3>Sectores informales comunes para migrantes</h3>
            <div class="sectors-grid">
                <div class="sector-card">
                    <h4>🏗️ Construcción</h4>
                    <p><strong>Pros:</strong> Buenos ingresos, demanda constante</p>
                    <p><strong>Contras:</strong> Riesgo físico, inestabilidad</p>
                    <p><strong>Consejo:</strong> Exige equipo de protección</p>
                </div>
                <div class="sector-card">
                    <h4>🏠 Servicios domésticos</h4>
                    <p><strong>Pros:</strong> Horarios flexibles, trato personal</p>
                    <p><strong>Contras:</strong> Aislamiento, riesgo de abuso</p>
                    <p><strong>Consejo:</strong> Establece límites claros</p>
                </div>
                <div class="sector-card">
                    <h4>🛒 Comercio</h4>
                    <p><strong>Pros:</strong> Aprendizaje del mercado local</p>
                    <p><strong>Contras:</strong> Horarios extensos, ingresos variables</p>
                    <p><strong>Consejo:</strong> Planifica transición a formal</p>
                </div>
            </div>
        </section>

        <section id="sectores-empleadores" class="content-section">
            <h2>Sectores que más emplean migrantes cubanos</h2>

            <div class="sectors-formal">
                <h3>Sectores formales con oportunidades</h3>

                <div class="sector-detail">
                    <h4>🏥 Salud</h4>
                    <p><strong>Oportunidades:</strong> Médicos, enfermeras, técnicos</p>
                    <p><strong>Requisitos:</strong> Revalidación de títulos, exámenes de competencia</p>
                    <p><strong>Salario promedio:</strong> RD$40,000 - RD$120,000</p>
                    <p><strong>Ventajas:</strong> Alta demanda, prestigio social, contribución importante</p>
                </div>

                <div class="sector-detail">
                    <h4>🎓 Educación</h4>
                    <p><strong>Oportunidades:</strong> Profesores, tutores privados, coordinadores</p>
                    <p><strong>Requisitos:</strong> Títulos revalidados, certificaciones pedagógicas</p>
                    <p><strong>Salario promedio:</strong> RD$25,000 - RD$60,000</p>
                    <p><strong>Ventajas:</strong> Estabilidad, horarios regulares, impacto social</p>
                </div>

                <div class="sector-detail">
                    <h4>🏨 Turismo y hostelería</h4>
                    <p><strong>Oportunidades:</strong> Guías, recepcionistas, administración</p>
                    <p><strong>Requisitos:</strong> Idiomas, experiencia en servicio al cliente</p>
                    <p><strong>Salario promedio:</strong> RD$20,000 - RD$45,000</p>
                    <p><strong>Ventajas:</strong> Propinas, desarrollo de idiomas, networking</p>
                </div>

                <div class="sector-detail">
                    <h4>💻 Tecnología</h4>
                    <p><strong>Oportunidades:</strong> Desarrolladores, diseñadores, analistas</p>
                    <p><strong>Requisitos:</strong> Habilidades técnicas comprobables, portafolio</p>
                    <p><strong>Salario promedio:</strong> RD$35,000 - RD$80,000</p>
                    <p><strong>Ventajas:</strong> Trabajo remoto, crecimiento rápido, buena remuneración</p>
                </div>
            </div>
        </section>

        <section id="buscar-empleo" class="content-section">
            <h2>Cómo buscar empleo efectivamente</h2>

            <h3>Estrategias de búsqueda</h3>
            <div class="search-strategies">
                <div class="strategy-card">
                    <h4>🌐 Portales de empleo online</h4>
                    <ul>
                        <li>Computrabajo.com.do</li>
                        <li>EmpleoRD.com</li>
                        <li>Indeed República Dominicana</li>
                        <li>LinkedIn (perfil profesional)</li>
                    </ul>
                </div>
                <div class="strategy-card">
                    <h4>🤝 Networking y contactos</h4>
                    <ul>
                        <li>Comunidad cubana establecida</li>
                        <li>Grupos profesionales en redes sociales</li>
                        <li>Eventos de networking</li>
                        <li>Referencias de empleadores anteriores</li>
                    </ul>
                </div>
                <div class="strategy-card">
                    <h4>🏢 Visitas directas</h4>
                    <ul>
                        <li>Empresas en tu área de expertise</li>
                        <li>Centros comerciales y oficinas</li>
                        <li>Hospitales y clínicas</li>
                        <li>Instituciones educativas</li>
                    </ul>
                </div>
            </div>

            <h3>Preparación para entrevistas</h3>
            <div class="interview-tips">
                <h4>📋 Antes de la entrevista</h4>
                <ul>
                    <li>Investiga la empresa y el puesto</li>
                    <li>Prepara preguntas sobre la posición</li>
                    <li>Practica respuestas sobre tu experiencia</li>
                    <li>Lleva copias de tu currículum y documentos</li>
                </ul>

                <h4>💼 Durante la entrevista</h4>
                <ul>
                    <li>Llega 10 minutos antes</li>
                    <li>Viste de manera profesional</li>
                    <li>Mantén contacto visual y postura segura</li>
                    <li>Haz preguntas inteligentes sobre el trabajo</li>
                </ul>

                <h4>✉️ Después de la entrevista</h4>
                <ul>
                    <li>Envía un email de agradecimiento</li>
                    <li>Reitera tu interés en la posición</li>
                    <li>Mantén contacto profesional</li>
                    <li>Sigue aplicando a otras oportunidades</li>
                </ul>
            </div>
        </section>

        <section id="contratos-salarios" class="content-section">
            <h2>Contratos y salarios justos</h2>

            <h3>Elementos esenciales de un contrato justo</h3>
            <div class="contract-checklist">
                <h4>✅ Información básica que debe incluir</h4>
                <ul>
                    <li>Datos completos del empleador y empleado</li>
                    <li>Descripción clara del puesto y responsabilidades</li>
                    <li>Salario exacto y forma de pago</li>
                    <li>Horario de trabajo y días libres</li>
                    <li>Duración del contrato</li>
                    <li>Beneficios incluidos (seguro, vacaciones, etc.)</li>
                    <li>Condiciones de terminación</li>
                </ul>
            </div>

            <h3>Salarios mínimos por sector (2025)</h3>
            <div class="salary-table">
                <div class="salary-row">
                    <span class="sector">Sector público:</span>
                    <span class="amount">RD$21,000/mes</span>
                </div>
                <div class="salary-row">
                    <span class="sector">Empresas grandes:</span>
                    <span class="amount">RD$20,000/mes</span>
                </div>
                <div class="salary-row">
                    <span class="sector">Empresas medianas:</span>
                    <span class="amount">RD$18,000/mes</span>
                </div>
                <div class="salary-row">
                    <span class="sector">Pequeñas empresas:</span>
                    <span class="amount">RD$16,000/mes</span>
                </div>
                <div class="salary-row">
                    <span class="sector">Zonas francas:</span>
                    <span class="amount">RD$16,000/mes</span>
                </div>
                <div class="salary-row">
                    <span class="sector">Trabajo doméstico:</span>
                    <span class="amount">RD$13,500/mes</span>
                </div>
            </div>

            <div class="warning-box">
                <h4>🚨 Señales de alerta en ofertas laborales</h4>
                <ul>
                    <li>Salario por debajo del mínimo legal</li>
                    <li>No quieren firmar contrato escrito</li>
                    <li>Piden dinero por adelantado</li>
                    <li>Horarios excesivos sin compensación</li>
                    <li>Retención de documentos personales</li>
                    <li>Amenazas relacionadas con estatus migratorio</li>
                </ul>
            </div>
        </section>

        <section id="proteccion-legal" class="content-section">
            <h2>Protección ante abusos laborales</h2>

            <h3>¿Qué hacer si sufres abuso laboral?</h3>
            <div class="protection-steps">
                <div class="step-card">
                    <h4>1️⃣ Documenta el abuso</h4>
                    <ul>
                        <li>Registra fechas, horarios y testigos</li>
                        <li>Guarda mensajes y comunicaciones</li>
                        <li>Toma fotos si es seguro hacerlo</li>
                        <li>Anota detalles específicos del incidente</li>
                    </ul>
                </div>
                <div class="step-card">
                    <h4>2️⃣ Busca apoyo</h4>
                    <ul>
                        <li>Contacta organizaciones de derechos laborales</li>
                        <li>Habla con otros trabajadores afectados</li>
                        <li>Busca asesoría legal gratuita</li>
                        <li>Informa a tu familia y red de apoyo</li>
                    </ul>
                </div>
                <div class="step-card">
                    <h4>3️⃣ Denuncia formal</h4>
                    <ul>
                        <li>Ministerio de Trabajo (MIT)</li>
                        <li>Defensoría del Pueblo</li>
                        <li>Sindicatos del sector</li>
                        <li>ONGs especializadas</li>
                    </ul>
                </div>
            </div>

            <h3>Organizaciones de apoyo</h3>
            <div class="support-orgs">
                <div class="org-card">
                    <h4>🏛️ Ministerio de Trabajo</h4>
                    <p><strong>Teléfono:</strong> 809-535-4404</p>
                    <p><strong>Servicios:</strong> Inspecciones laborales, mediación de conflictos</p>
                </div>
                <div class="org-card">
                    <h4>⚖️ Defensoría del Pueblo</h4>
                    <p><strong>Teléfono:</strong> (809) 381-4777</p>
                    <p><strong>Dirección:</strong> Ave. 27 de Febrero 526, Renacimiento, Santo Domingo</p>
                    <p><strong>Servicios:</strong> Protección de derechos fundamentales</p>
                </div>
                <div class="org-card">
                    <h4>🤝 Centro Bonó</h4>
                    <p><strong>Teléfono:</strong> (809) 682-4448 / (809) 682-2121</p>
                    <p><strong>Servicios:</strong> Derechos humanos y migración</p>
                </div>
                <div class="org-card">
                    <h4>🏠 MUDHA</h4>
                    <p><strong>Teléfono:</strong> (809) 688-7430</p>
                    <p><strong>Servicios:</strong> Derechos de migrantes y mujeres</p>
                </div>
            </div>
        </section>

        <section id="emprendimiento" class="content-section">
            <h2>Emprendimiento y autoempleo</h2>

            <p>Muchos migrantes cubanos encuentran en el emprendimiento una vía para la independencia económica y el crecimiento profesional.</p>

            <h3>Ventajas del emprendimiento</h3>
            <div class="entrepreneurship-benefits">
                <div class="benefit-card">
                    <h4>💰 Independencia económica</h4>
                    <p>Control total sobre tus ingresos y crecimiento financiero</p>
                </div>
                <div class="benefit-card">
                    <h4>⏰ Flexibilidad</h4>
                    <p>Manejo de tu propio tiempo y horarios de trabajo</p>
                </div>
                <div class="benefit-card">
                    <h4>🎯 Especialización</h4>
                    <p>Aprovecha tus habilidades y conocimientos únicos</p>
                </div>
                <div class="benefit-card">
                    <h4>📈 Crecimiento</h4>
                    <p>Potencial ilimitado de expansion y desarrollo</p>
                </div>
            </div>

            <h3>Sectores populares para emprendedores cubanos</h3>
            <div class="business-sectors">
                <div class="business-card">
                    <h4>🍽️ Gastronomía</h4>
                    <p>Restaurantes, food trucks, catering, repostería cubana</p>
                    <p><strong>Inversión inicial:</strong> RD$100,000 - RD$500,000</p>
                </div>
                <div class="business-card">
                    <h4>💄 Belleza y cuidado personal</h4>
                    <p>Salones, barberías, spas, tratamientos estéticos</p>
                    <p><strong>Inversión inicial:</strong> RD$50,000 - RD$300,000</p>
                </div>
                <div class="business-card">
                    <h4>🏗️ Servicios de construcción</h4>
                    <p>Reparaciones, remodelaciones, mantenimiento</p>
                    <p><strong>Inversión inicial:</strong> RD$30,000 - RD$200,000</p>
                </div>
                <div class="business-card">
                    <h4>📚 Educación y consultoría</h4>
                    <p>Tutorías, cursos especializados, asesorías</p>
                    <p><strong>Inversión inicial:</strong> RD$10,000 - RD$100,000</p>
                </div>
            </div>

            <h3>Pasos para formalizar tu negocio</h3>
            <div class="formalization-steps">
                <div class="step">
                    <h4>1. Registro Mercantil</h4>
                    <p>Cámara de Comercio de tu provincia</p>
                    <p><strong>Costo:</strong> RD$3,000 - RD$8,000</p>
                </div>
                <div class="step">
                    <h4>2. RNC empresarial</h4>
                    <p>Dirección General de Impuestos Internos (DGII)</p>
                    <p><strong>Costo:</strong> Gratuito</p>
                </div>
                <div class="step">
                    <h4>3. Licencia municipal</h4>
                    <p>Ayuntamiento de tu localidad</p>
                    <p><strong>Costo:</strong> Variable por municipio</p>
                </div>
                <div class="step">
                    <h4>4. Seguridad Social</h4>
                    <p>Inscripción como empleador</p>
                    <p><strong>Obligatorio:</strong> Al contratar empleados</p>
                </div>
            </div>
        </section>

        <section class="call-to-action-section">
            <h2>¿Necesitas orientación sobre trabajo y derechos laborales?</h2>
            <p>
                Nuestro equipo puede ayudarte a entender mejor tus opciones laborales, derechos y cómo protegerte en el mercado laboral dominicano.
            </p>

            <?php
            require_once 'includes/cta-templates.php';
            echo generateArticleCTA(
                "¿Necesitas orientación laboral?",
                "Contacta con nuestros asesores para recibir información personalizada sobre trabajo y derechos en República Dominicana",
                ['type' => 'laboral']
            );
            ?>
        </section>

        <section class="related-content">
            <h2>Contenido relacionado</h2>
            <div class="related-links">
                <a href="/regularizacion-rd.php" class="related-card">
                    <h3>📄 Regularización migratoria</h3>
                    <p>Guía completa sobre documentos y procesos de regularización</p>
                </a>
                <a href="/cubanos-en-rd-guia.php" class="related-card">
                    <h3>🇨🇺🇩🇴 Guía principal</h3>
                    <p>Información integral para cubanos en República Dominicana</p>
                </a>
                <a href="/faq.php" class="related-card">
                    <h3>❓ Preguntas frecuentes</h3>
                    <p>Respuestas a las dudas más comunes de la comunidad</p>
                </a>
            </div>
        </section>
    </article>
</main>

<style>
.content-article {
    max-width: 1000px;
    margin: 0 auto;
    padding: 2rem;
    line-height: 1.6;
}

.breadcrumb {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 2rem;
}

.breadcrumb a {
    color: #003366;
    text-decoration: none;
}

.breadcrumb a:hover {
    text-decoration: underline;
}

.table-contents {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 2rem 0;
}

.table-contents ul {
    list-style: none;
    padding: 0;
}

.table-contents li {
    margin: 0.5rem 0;
}

.table-contents a {
    color: #003366;
    text-decoration: none;
    font-weight: 500;
}

.table-contents a:hover {
    text-decoration: underline;
}

.highlight-box, .warning-box {
    padding: 1.5rem;
    border-radius: 8px;
    margin: 1.5rem 0;
}

.highlight-box {
    background: #e3f2fd;
    border-left: 4px solid #2196f3;
}

.warning-box {
    background: #fff3e0;
    border-left: 4px solid #ff9800;
}

.requirements-grid, .sectors-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.requirement-card, .sector-card, .tip-card, .strategy-card, .benefit-card, .business-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}

.benefits-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.benefit-item {
    background: linear-gradient(135deg, #003366, #004d99);
    color: white;
    padding: 1.5rem;
    border-radius: 8px;
}

.salary-table {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    margin: 1.5rem 0;
}

.salary-row {
    display: flex;
    justify-content: space-between;
    padding: 0.75rem 0;
    border-bottom: 1px solid #e9ecef;
}

.salary-row:last-child {
    border-bottom: none;
}

.sector {
    font-weight: bold;
}

.amount {
    color: #28a745;
    font-weight: bold;
}

.protection-steps, .entrepreneurship-benefits {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.step-card {
    background: #fff;
    border: 2px solid #e9ecef;
    padding: 1.5rem;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

.step-card:hover {
    border-color: #003366;
}

.support-orgs {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.org-card {
    background: #e8f5e8;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid #28a745;
}

.formalization-steps {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.step {
    background: #fff;
    border: 1px solid #ddd;
    padding: 1.5rem;
    border-radius: 8px;
    text-align: center;
}

.related-links {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
    margin: 2rem 0;
}

.related-card {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    text-decoration: none;
    color: inherit;
    border: 1px solid #e9ecef;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.related-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    text-decoration: none;
}

.related-card h3 {
    color: #003366;
    margin-bottom: 0.5rem;
}

@media (max-width: 768px) {
    .content-article {
        padding: 1rem;
    }

    .requirements-grid, .sectors-grid {
        grid-template-columns: 1fr;
    }

    .salary-row {
        flex-direction: column;
        gap: 0.25rem;
    }
}
</style>

<?php require_once 'includes/footer-content.php'; ?>
<?php require_once 'includes/footer.php'; ?>

</body>
</html>