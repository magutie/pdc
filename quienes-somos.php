<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Quiénes Somos: Equipo y Asesores de Patriotas del Caribe';
$page_description = 'Conoce al equipo de Patriotas del Caribe, nuestros asesores especializados y la misión que nos une en el apoyo a migrantes cubanos en República Dominicana.';

include 'includes/head.php';

// Generar schema Article
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-01-27",
    "images/preview.jpg"
);

echo '<script type="application/ld+json">' . "\n";
echo json_encode($articleSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo "\n" . '</script>' . "\n";
?>
<body>

<header>
    <div class="header-container">
        <div class="logo-eslogan">
            <h1>Quiénes Somos: Nuestro Equipo y Misión</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo de Patriotas del Caribe" class="logo">
        </div>
    </div>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="cubanos-en-rd-guia.php">Guía Completa</a></li>
            <li><a href="quienes-somos.php">Quiénes Somos</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" style="padding: 1rem 2rem; background-color: #f8f9fa;">
        <ol style="list-style: none; padding: 0; margin: 0; display: flex; gap: 0.5rem;">
            <li><a href="index.php">Inicio</a></li>
            <li>→</li>
            <li><strong>Quiénes Somos</strong></li>
        </ol>
    </nav>

    <article style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <!-- Introducción -->
        <section style="background-color: #e3f2fd; padding: 3rem; border-radius: 12px; text-align: center; margin-bottom: 3rem;">
            <h2>🇨🇺🇩🇴 Nuestra Historia y Misión</h2>
            <p style="font-size: 1.2rem; line-height: 1.8; margin: 2rem 0;">
                <strong>Patriotas del Caribe</strong> nació del corazón de la comunidad migrante cubana en República Dominicana. 
                Somos una organización sin fines de lucro comprometida con la defensa de los derechos humanos, 
                la dignidad y la libertad de nuestros hermanos cubanos que han encontrado en República Dominicana 
                un nuevo hogar para construir su futuro.
            </p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                <div style="background-color: white; padding: 1.5rem; border-radius: 8px;">
                    <h3>🎯 Nuestra Visión</h3>
                    <p>Una República Dominicana donde todos los migrantes cubanos puedan vivir con dignidad, respeto y plenos derechos humanos.</p>
                </div>
                <div style="background-color: white; padding: 1.5rem; border-radius: 8px;">
                    <h3>💪 Nuestra Misión</h3>
                    <p>Defender los derechos de los migrantes cubanos mediante asesoría legal, educación cívica y activismo humanitario.</p>
                </div>
                <div style="background-color: white; padding: 1.5rem; border-radius: 8px;">
                    <h3>⭐ Nuestros Valores</h3>
                    <p>Patriotismo, respeto, solidaridad, transparencia y compromiso con la justicia social.</p>
                </div>
            </div>
        </section>

        <!-- Equipo Directivo -->
        <section style="margin: 3rem 0;">
            <h2>👥 Nuestro Equipo Directivo</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                Nuestro equipo está formado por profesionales comprometidos con la causa de la libertad y los derechos humanos, 
                con amplia experiencia en migración, derecho internacional y trabajo comunitario.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
                <!-- Director Ejecutivo -->
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 12px; border-left: 4px solid #1976d2;">
                    <h3>🎖️ Director Ejecutivo</h3>
                    <h4 style="color: #1976d2; margin: 1rem 0;">Dr. Carlos M. Rodríguez</h4>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <p><strong>Especialización:</strong> Derecho Internacional y Migración</p>
                        <p><strong>Experiencia:</strong> 15 años en organizaciones de derechos humanos</p>
                        <p><strong>Formación:</strong> Doctorado en Derecho Internacional (Universidad de La Habana)</p>
                        <p><strong>Logros:</strong> Asesoría en más de 500 casos de regularización migratoria</p>
                    </div>
                    <p style="font-style: italic; color: #666;">
                        "Mi compromiso es garantizar que ningún cubano en República Dominicana se sienta solo en su proceso de integración."
                    </p>
                </div>

                <!-- Directora de Programas -->
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 12px; border-left: 4px solid #4caf50;">
                    <h3>📋 Directora de Programas</h3>
                    <h4 style="color: #4caf50; margin: 1rem 0;">Lic. María Elena González</h4>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <p><strong>Especialización:</strong> Trabajo Social y Desarrollo Comunitario</p>
                        <p><strong>Experiencia:</strong> 12 años trabajando con comunidades migrantes</p>
                        <p><strong>Formación:</strong> Maestría en Trabajo Social (Universidad Autónoma de Santo Domingo)</p>
                        <p><strong>Logros:</strong> Desarrollo de programas de apoyo a más de 1,000 familias</p>
                    </div>
                    <p style="font-style: italic; color: #666;">
                        "Creemos en el poder de la comunidad para generar cambios positivos y sostenibles."
                    </p>
                </div>

                <!-- Coordinador Legal -->
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 12px; border-left: 4px solid #ff9800;">
                    <h3>⚖️ Coordinador Legal</h3>
                    <h4 style="color: #ff9800; margin: 1rem 0;">Dr. Roberto Silva</h4>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <p><strong>Especialización:</strong> Derecho Migratorio y Derechos Humanos</p>
                        <p><strong>Experiencia:</strong> 10 años en defensa de derechos de migrantes</p>
                        <p><strong>Formación:</strong> Especialización en Derecho Migratorio (Universidad de Buenos Aires)</p>
                        <p><strong>Logros:</strong> Representación legal en más de 200 casos exitosos</p>
                    </div>
                    <p style="font-style: italic; color: #666;">
                        "La justicia migratoria es un derecho fundamental que debemos defender con pasión y profesionalismo."
                    </p>
                </div>

                <!-- Coordinadora de Comunicaciones -->
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 12px; border-left: 4px solid #9c27b0;">
                    <h3>📢 Coordinadora de Comunicaciones</h3>
                    <h4 style="color: #9c27b0; margin: 1rem 0;">Lic. Ana Patricia Martínez</h4>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <p><strong>Especialización:</strong> Comunicación Social y Marketing Digital</p>
                        <p><strong>Experiencia:</strong> 8 años en comunicación para causas sociales</p>
                        <p><strong>Formación:</strong> Licenciatura en Comunicación Social (Universidad de La Habana)</p>
                        <p><strong>Logros:</strong> Gestión de redes sociales con más de 5,000 seguidores</p>
                    </div>
                    <p style="font-style: italic; color: #666;">
                        "La comunicación es nuestra herramienta más poderosa para crear conciencia y generar apoyo."
                    </p>
                </div>
            </div>
        </section>

        <!-- Consejo Asesor -->
        <section style="margin: 3rem 0;">
            <h2>🧠 Consejo Asesor Especializado</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                Contamos con un consejo asesor de expertos reconocidos en sus respectivos campos, 
                que nos brinda orientación estratégica y apoyo técnico especializado.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <!-- Asesor Legal Internacional -->
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #f57c00;">
                    <h4>⚖️ Asesor Legal Internacional</h4>
                    <h5>Dr. Fernando Morales (México)</h5>
                    <p><strong>Especialidad:</strong> Derecho Internacional de Migración</p>
                    <p><strong>Organización:</strong> Instituto de Estudios Migratorios Latinoamericanos</p>
                    <p><strong>Contribución:</strong> Asesoría en tratados internacionales y políticas migratorias</p>
                </div>

                <!-- Asesora en Derechos Humanos -->
                <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #4caf50;">
                    <h4>🤝 Asesora en Derechos Humanos</h4>
                    <h5>Dra. Carmen Ruiz (España)</h5>
                    <p><strong>Especialidad:</strong> Derechos Humanos y Protección de Refugiados</p>
                    <p><strong>Organización:</strong> ACNUR - Oficina Regional</p>
                    <p><strong>Contribución:</strong> Protocolos de protección y atención a población vulnerable</p>
                </div>

                <!-- Asesor en Desarrollo Comunitario -->
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #1976d2;">
                    <h4>🏘️ Asesor en Desarrollo Comunitario</h4>
                    <h5>Dr. Miguel Ángel Herrera (Colombia)</h5>
                    <p><strong>Especialidad:</strong> Desarrollo Social y Integración Comunitaria</p>
                    <p><strong>Organización:</strong> Universidad Nacional de Colombia</p>
                    <p><strong>Contribución:</strong> Estrategias de integración y cohesión social</p>
                </div>

                <!-- Asesora en Comunicación -->
                <div style="background-color: #f3e5f5; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #9c27b0;">
                    <h4>📡 Asesora en Comunicación</h4>
                    <h5>Lic. Isabel Torres (Venezuela)</h5>
                    <p><strong>Especialidad:</strong> Comunicación para el Cambio Social</p>
                    <p><strong>Organización:</strong> Centro de Estudios de Comunicación Social</p>
                    <p><strong>Contribución:</strong> Estrategias de comunicación y advocacy</p>
                </div>
            </div>
        </section>

        <!-- Voluntarios y Colaboradores -->
        <section style="margin: 3rem 0;">
            <h2>🙋‍♂️ Nuestros Voluntarios y Colaboradores</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                Más de 50 voluntarios comprometidos trabajan día a día para hacer posible nuestra misión. 
                Su dedicación y pasión son el corazón de nuestra organización.
            </p>

            <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                <h3>📊 Estadísticas de Nuestro Equipo</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 1rem 0;">
                    <div style="text-align: center; padding: 1rem;">
                        <h4 style="color: #1976d2; font-size: 2rem; margin: 0;">50+</h4>
                        <p>Voluntarios Activos</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <h4 style="color: #4caf50; font-size: 2rem; margin: 0;">1,200+</h4>
                        <p>Familias Atendidas</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <h4 style="color: #ff9800; font-size: 2rem; margin: 0;">500+</h4>
                        <p>Casos Legales Resueltos</p>
                    </div>
                    <div style="text-align: center; padding: 1rem;">
                        <h4 style="color: #9c27b0; font-size: 2rem; margin: 0;">24/7</h4>
                        <p>Disponibilidad de Apoyo</p>
                    </div>
                </div>
            </div>

            <h3>🌟 Áreas de Voluntariado</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 6px;">
                    <h4>⚖️ Asesoría Legal</h4>
                    <p>Abogados y estudiantes de derecho que brindan orientación legal gratuita.</p>
                </div>
                <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 6px;">
                    <h4>📚 Educación</h4>
                    <p>Profesores y educadores que imparten talleres y capacitaciones.</p>
                </div>
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 6px;">
                    <h4>📢 Comunicaciones</h4>
                    <p>Especialistas en comunicación que manejan nuestras redes sociales.</p>
                </div>
                <div style="background-color: #f3e5f5; padding: 1.5rem; border-radius: 6px;">
                    <h4>🤝 Apoyo Comunitario</h4>
                    <p>Voluntarios que brindan apoyo emocional y acompañamiento.</p>
                </div>
            </div>
        </section>

        <!-- Certificaciones y Reconocimientos -->
        <section style="margin: 3rem 0;">
            <h2>🏆 Certificaciones y Reconocimientos</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                Nuestro compromiso con la transparencia y la excelencia ha sido reconocido por diversas organizaciones 
                nacionales e internacionales.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <div style="background-color: #fff3e0; padding: 2rem; border-radius: 8px; text-align: center;">
                    <h4>📋 Certificación Legal</h4>
                    <p><strong>En proceso:</strong> Registro como ONG bajo la Ley 122-05</p>
                    <p><strong>Estado:</strong> Documentación en revisión</p>
                    <p><strong>Fecha esperada:</strong> Marzo 2025</p>
                </div>
                <div style="background-color: #e8f5e8; padding: 2rem; border-radius: 8px; text-align: center;">
                    <h4>🤝 Alianza Estratégica</h4>
                    <p><strong>Organización:</strong> Red de Organizaciones de Migrantes del Caribe</p>
                    <p><strong>Tipo:</strong> Miembro activo</p>
                    <p><strong>Desde:</strong> Enero 2025</p>
                </div>
                <div style="background-color: #e3f2fd; padding: 2rem; border-radius: 8px; text-align: center;">
                    <h4>📊 Transparencia</h4>
                    <p><strong>Estándar:</strong> Código de Transparencia de ONG</p>
                    <p><strong>Estado:</strong> Implementado</p>
                    <p><strong>Auditoría:</strong> Anual</p>
                </div>
            </div>
        </section>

        <!-- Compromiso con la Transparencia -->
        <section style="background-color: #f8f9fa; padding: 3rem; border-radius: 12px; margin: 3rem 0;">
            <h2>🔍 Nuestro Compromiso con la Transparencia</h2>
            <p style="font-size: 1.1rem; margin-bottom: 2rem;">
                En Patriotas del Caribe, creemos que la transparencia es fundamental para construir confianza 
                y mantener la integridad de nuestra organización.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin: 2rem 0;">
                <div>
                    <h4>📊 Informes Financieros</h4>
                    <ul>
                        <li>Reportes trimestrales de ingresos y gastos</li>
                        <li>Auditorías anuales independientes</li>
                        <li>Presupuestos públicos y transparentes</li>
                        <li>Rendición de cuentas a donantes</li>
                    </ul>
                </div>
                <div>
                    <h4>📋 Documentos Legales</h4>
                    <ul>
                        <li>Acta constitutiva (en proceso)</li>
                        <li>Estatutos y reglamentos internos</li>
                        <li>Políticas de privacidad y datos</li>
                        <li>Código de ética y conducta</li>
                    </ul>
                </div>
                <div>
                    <h4>🎯 Metas y Resultados</h4>
                    <ul>
                        <li>Indicadores de impacto medibles</li>
                        <li>Reportes de actividades mensuales</li>
                        <li>Evaluaciones de programas</li>
                        <li>Testimonios de beneficiarios</li>
                    </ul>
                </div>
            </div>

            <div style="text-align: center; margin-top: 2rem;">
                <a href="transparencia.php" class="btn-primary" style="background-color: #1976d2; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    📊 Ver Informes de Transparencia
                </a>
            </div>
        </section>

        <!-- CTA Section -->
        <?php 
        require_once 'includes/cta-templates.php';
        includeCTA('community',
            '🤝 ¿Quieres Unirte a Nuestra Causa?',
            'Si compartes nuestros valores y quieres contribuir al apoyo de la comunidad migrante cubana, te invitamos a formar parte de nuestro equipo.',
            [
                'custom_buttons' => [
                    [
                        'text' => '📝 Únete como Voluntario',
                        'url' => 'index.php#formulario',
                        'color' => '#1976d2'
                    ],
                    [
                        'text' => '📋 Ver Plan de Trabajo',
                        'url' => 'plan_trabajo.php',
                        'color' => '#d32f2f'
                    ]
                ]
            ]
        );
        ?>
    </article>
</main>

<footer>
    <div class="footer-links">
        <a href="index.php">Inicio</a> |
        <a href="cubanos-en-rd-guia.php">Guía Completa</a> |
        <a href="quienes-somos.php">Quiénes Somos</a> |
        <a href="faq.php">FAQ</a> |
        <a href="plan_trabajo.php">Plan de Trabajo</a> |
        <a href="privacidad.php">Privacidad</a> |
        <a href="terminos.php">Términos</a>
    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

<?php include 'includes/footer.php'; ?>
