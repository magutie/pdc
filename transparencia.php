<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Transparencia y Rendición de Cuentas - Patriotas del Caribe';
$page_description = 'Información transparente sobre nuestras finanzas, actividades, impacto y gobernanza. Conoce cómo utilizamos los recursos para apoyar a la comunidad migrante cubana.';

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
            <h1>Transparencia y Rendición de Cuentas</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo Patriotas del Caribe - Fundación de apoyo a migrantes cubanos en República Dominicana" class="logo" loading="eager">
        </div>
    </div>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="quienes-somos.php">Quiénes Somos</a></li>
            <li><a href="transparencia.php">Transparencia</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" style="padding: 1rem 2rem; background-color: #f8f9fa;">
        <ol style="list-style: none; padding: 0; margin: 0; display: flex; gap: 0.5rem;">
            <li><a href="index.php">Inicio</a></li>
            <li>→</li>
            <li><a href="quienes-somos.php">Quiénes Somos</a></li>
            <li>→</li>
            <li><strong>Transparencia</strong></li>
        </ol>
    </nav>

    <article style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <!-- Introducción -->
        <section style="background-color: #e8f5e8; padding: 3rem; border-radius: 12px; text-align: center; margin-bottom: 3rem;">
            <h2>🔍 Nuestro Compromiso con la Transparencia</h2>
            <p style="font-size: 1.2rem; line-height: 1.8; margin: 2rem 0;">
                En <strong>Patriotas del Caribe</strong> creemos firmemente que la transparencia es la base de la confianza. 
                Por eso, ponemos a disposición del público toda la información relevante sobre nuestras actividades, 
                finanzas y resultados.
            </p>
            <div style="background-color: white; padding: 2rem; border-radius: 8px; margin-top: 2rem;">
                <h3>📊 Última Actualización: Enero 2025</h3>
                <p>Esta información se actualiza trimestralmente para mantener la transparencia en tiempo real.</p>
            </div>
        </section>

        <!-- Estado Legal -->
        <section style="margin: 3rem 0;">
            <h2>📋 Estado Legal y Registro</h2>
            <div style="background-color: #fff3e0; padding: 2rem; border-radius: 8px; border-left: 4px solid #f57c00;">
                <h3>🏛️ Proceso de Incorporación Legal</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 1rem 0;">
                    <div>
                        <h4>📄 Documentos Presentados</h4>
                        <ul>
                            <li>✅ Acta constitutiva (borrador)</li>
                            <li>✅ Estatutos internos</li>
                            <li>✅ Reglamentos de funcionamiento</li>
                            <li>✅ Políticas de transparencia</li>
                            <li>⏳ Certificado de antecedentes penales (en proceso)</li>
                        </ul>
                    </div>
                    <div>
                        <h4>📅 Cronograma de Registro</h4>
                        <ul>
                            <li><strong>Diciembre 2024:</strong> Inicio del proceso</li>
                            <li><strong>Enero 2025:</strong> Presentación de documentos</li>
                            <li><strong>Febrero 2025:</strong> Revisión administrativa</li>
                            <li><strong>Marzo 2025:</strong> Aprobación esperada</li>
                        </ul>
                    </div>
                </div>
                <div style="background-color: #f0f8ff; padding: 1rem; border-radius: 6px; margin-top: 1rem;">
                    <p><strong>Nota:</strong> Estamos trabajando bajo los principios de la Ley 122-05 sobre Asociaciones sin Fines de Lucro de República Dominicana, aunque el registro oficial aún está en proceso.</p>
                </div>
            </div>
        </section>

        <!-- Información Financiera -->
        <section style="margin: 3rem 0;">
            <h2>💰 Información Financiera</h2>
            <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
                <h3>📊 Resumen Financiero 2024-2025</h3>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 2rem 0;">
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center; border-left: 4px solid #4caf50;">
                        <h4>💵 Ingresos Totales</h4>
                        <p style="font-size: 1.5rem; font-weight: bold; color: #4caf50; margin: 0;">$0 USD</p>
                        <p style="font-size: 0.9rem; color: #666;">Aportaciones voluntarias</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center; border-left: 4px solid #ff9800;">
                        <h4>💸 Gastos Totales</h4>
                        <p style="font-size: 1.5rem; font-weight: bold; color: #ff9800; margin: 0;">$0 USD</p>
                        <p style="font-size: 0.9rem; color: #666;">Operativos y programas</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center; border-left: 4px solid #1976d2;">
                        <h4>👥 Personal Remunerado</h4>
                        <p style="font-size: 1.5rem; font-weight: bold; color: #1976d2; margin: 0;">0 personas</p>
                        <p style="font-size: 0.9rem; color: #666;">100% voluntario</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center; border-left: 4px solid #9c27b0;">
                        <h4>🎯 Porcentaje a Programas</h4>
                        <p style="font-size: 1.5rem; font-weight: bold; color: #9c27b0; margin: 0;">100%</p>
                        <p style="font-size: 0.9rem; color: #666;">Sin gastos administrativos</p>
                    </div>
                </div>

                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 6px; margin: 2rem 0;">
                    <h4>📝 Política Financiera</h4>
                    <ul>
                        <li><strong>Transparencia total:</strong> Todos los gastos son públicos y auditables</li>
                        <li><strong>Sin fines de lucro:</strong> 100% de los recursos van a programas</li>
                        <li><strong>Voluntariado:</strong> Todo el equipo trabaja de forma voluntaria</li>
                        <li><strong>Sin salarios:</strong> No hay personal remunerado</li>
                        <li><strong>Reportes trimestrales:</strong> Información financiera actualizada cada 3 meses</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Actividades y Programas -->
        <section style="margin: 3rem 0;">
            <h2>📋 Actividades y Programas</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
                
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
                    <h3>📚 Programa de Información y Orientación</h3>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📊 Resultados 2024-2025</h4>
                        <ul>
                            <li><strong>Página web:</strong> 1,000+ visitas mensuales</li>
                            <li><strong>Guías publicadas:</strong> 2 guías completas</li>
                            <li><strong>Consultas respondidas:</strong> 50+ consultas vía email</li>
                            <li><strong>Redes sociales:</strong> 100+ seguidores activos</li>
                        </ul>
                    </div>
                    <h4>🎯 Objetivos 2025</h4>
                    <ul>
                        <li>Publicar 8 guías especializadas</li>
                        <li>Atender 200+ consultas</li>
                        <li>Crear red de 500+ miembros</li>
                    </ul>
                </div>

                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
                    <h3>🤝 Programa de Apoyo Comunitario</h3>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📊 Resultados 2024-2025</h4>
                        <ul>
                            <li><strong>Grupos de WhatsApp:</strong> 2 grupos activos</li>
                            <li><strong>Miembros registrados:</strong> 50+ personas</li>
                            <li><strong>Eventos virtuales:</strong> 3 sesiones informativas</li>
                            <li><strong>Red de contactos:</strong> 20+ profesionales aliados</li>
                        </ul>
                    </div>
                    <h4>🎯 Objetivos 2025</h4>
                    <ul>
                        <li>Crear 5 grupos especializados</li>
                        <li>Organizar 12 eventos</li>
                        <li>Conectar 200+ familias</li>
                    </ul>
                </div>

                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
                    <h3>⚖️ Programa de Incidencia Legal</h3>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📊 Resultados 2024-2025</h4>
                        <ul>
                            <li><strong>Plan PRHEC:</strong> Documento técnico completo</li>
                            <li><strong>Propuestas:</strong> 1 propuesta formal presentada</li>
                            <li><strong>Alianzas:</strong> 3 organizaciones aliadas</li>
                            <li><strong>Investigación:</strong> 1 estudio de viabilidad</li>
                        </ul>
                    </div>
                    <h4>🎯 Objetivos 2025</h4>
                    <ul>
                        <li>Presentar propuesta oficial</li>
                        <li>Lograr 5 alianzas estratégicas</li>
                        <li>Influir en política pública</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Gobernanza -->
        <section style="margin: 3rem 0;">
            <h2>🏛️ Gobernanza y Estructura Organizacional</h2>
            <div style="background-color: #fff3e0; padding: 2rem; border-radius: 8px;">
                <h3>👥 Estructura de Gobierno</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin: 2rem 0;">
                    <div>
                        <h4>🎖️ Consejo Directivo</h4>
                        <ul>
                            <li><strong>Director Ejecutivo:</strong> Dr. Carlos M. Rodríguez</li>
                            <li><strong>Directora de Programas:</strong> Lic. María Elena González</li>
                            <li><strong>Coordinador Legal:</strong> Dr. Roberto Silva</li>
                            <li><strong>Coordinadora de Comunicaciones:</strong> Lic. Ana Patricia Martínez</li>
                        </ul>
                    </div>
                    <div>
                        <h4>🧠 Consejo Asesor</h4>
                        <ul>
                            <li><strong>Asesor Legal Internacional:</strong> Dr. Fernando Morales</li>
                            <li><strong>Asesora en Derechos Humanos:</strong> Dra. Carmen Ruiz</li>
                            <li><strong>Asesor en Desarrollo Comunitario:</strong> Dr. Miguel Ángel Herrera</li>
                            <li><strong>Asesora en Comunicación:</strong> Lic. Isabel Torres</li>
                        </ul>
                    </div>
                </div>

                <h3>📋 Políticas y Procedimientos</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>⚖️ Código de Ética</h4>
                        <p>Estándares de conducta profesional y ética organizacional.</p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>🔒 Política de Privacidad</h4>
                        <p>Protección de datos personales y confidencialidad.</p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>💰 Política Financiera</h4>
                        <p>Transparencia y rendición de cuentas financieras.</p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>📊 Política de Evaluación</h4>
                        <p>Medición de impacto y evaluación de programas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Indicadores de Impacto -->
        <section style="margin: 3rem 0;">
            <h2>📈 Indicadores de Impacto y Resultados</h2>
            <div style="background-color: #e8f5e8; padding: 2rem; border-radius: 8px;">
                <h3>🎯 Métricas de Impacto Social</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin: 2rem 0;">
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center;">
                        <h4 style="color: #4caf50;">1,000+</h4>
                        <p>Visitas mensuales al sitio web</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center;">
                        <h4 style="color: #1976d2;">50+</h4>
                        <p>Consultas atendidas</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center;">
                        <h4 style="color: #ff9800;">2</h4>
                        <p>Guías completas publicadas</p>
                    </div>
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; text-align: center;">
                        <h4 style="color: #9c27b0;">100+</h4>
                        <p>Miembros en redes sociales</p>
                    </div>
                </div>

                <h3>📊 Evaluación de Programas</h3>
                <div style="background-color: white; padding: 1.5rem; border-radius: 6px; margin: 1rem 0;">
                    <h4>✅ Criterios de Éxito</h4>
                    <ul>
                        <li><strong>Cobertura:</strong> Alcance a la población objetivo</li>
                        <li><strong>Calidad:</strong> Satisfacción de los beneficiarios</li>
                        <li><strong>Impacto:</strong> Cambios positivos generados</li>
                        <li><strong>Sostenibilidad:</strong> Continuidad de los programas</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Contacto para Información -->
        <section style="background-color: #f3e5f5; padding: 3rem; border-radius: 12px; text-align: center; margin: 3rem 0;">
            <h2>📞 Solicitar Información Adicional</h2>
            <p style="font-size: 1.1rem; margin: 2rem 0;">
                Si necesitas información adicional sobre nuestra organización, finanzas o programas, 
                no dudes en contactarnos. Responderemos a todas las solicitudes en un plazo máximo de 48 horas.
            </p>
            
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 2rem 0;">
                <a href="mailto:contacto@patriotasdelcaribe.com" class="btn-primary" style="background-color: #1976d2; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    📧 Solicitar Información
                </a>
                <a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" class="btn-secondary" style="background-color: #25D366; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">
                    💬 WhatsApp Directo
                </a>
            </div>
            
            <div style="background-color: white; padding: 1.5rem; border-radius: 8px; margin-top: 2rem;">
                <h4>📋 Información Disponible</h4>
                <ul style="list-style: none; padding: 0; columns: 2; column-gap: 2rem;">
                    <li>✅ Informes financieros detallados</li>
                    <li>✅ Actas de reuniones del consejo</li>
                    <li>✅ Evaluaciones de programas</li>
                    <li>✅ Políticas y procedimientos</li>
                    <li>✅ Documentos legales</li>
                    <li>✅ Reportes de actividades</li>
                </ul>
            </div>
        </section>

        <!-- CTA Section -->
        <?php 
        require_once 'includes/cta-templates.php';
        includeCTA('support',
            '🤝 ¿Quieres Conocer Más Sobre Nuestro Trabajo?',
            'Únete a nuestra comunidad y sé parte del cambio. Tu participación es fundamental para seguir ayudando a más familias migrantes.',
            [
                'custom_buttons' => [
                    [
                        'text' => '📝 Únete a Nuestra Causa',
                        'url' => 'index.php#formulario',
                        'color' => '#1976d2'
                    ],
                    [
                        'text' => '👥 Conoce Nuestro Equipo',
                        'url' => 'quienes-somos.php',
                        'color' => '#4caf50'
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
        <a href="transparencia.php">Transparencia</a>
    </div>
    <div class="footer-links" style="margin-top: 0.5rem;">
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
    <div class="footer-links" style="margin-top: 0.5rem; font-size: 0.9rem;">
        <a href="privacidad.php">Privacidad</a> |
        <a href="terminos.php">Términos</a>
    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

<?php include 'includes/footer.php'; ?>
