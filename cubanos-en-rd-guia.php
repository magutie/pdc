<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Cubanos en República Dominicana: Guía Completa 2025';
$page_description = 'Guía completa para migrantes cubanos en República Dominicana: regularización, derechos, trabajo, salud, educación, vivienda y comunidades de apoyo. Todo lo que necesitas saber.';

include 'includes/head.php';

// Generar schema Article para el hub principal
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-01-27",
    "images/preview.jpg"
);

// Agregar schema Article
echo '<script type="application/ld+json">' . "\n";
echo json_encode($articleSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
echo "\n" . '</script>' . "\n";
?>
<body>

<header>
    <div class="header-container">
        <div class="logo-eslogan">
            <h1>Cubanos en República Dominicana: Guía Completa 2025</h1>
            <p class="eslogan">Después de Dios, la Patria y su Libertad</p>
        </div>
        <div class="logo-container">
            <img src="images/logo.png" alt="Logo Patriotas del Caribe - Fundación de apoyo a migrantes cubanos en República Dominicana" class="logo" loading="eager">
        </div>
    </div>
    <nav class="navbar">
        <ul class="nav-list">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="cubanos-en-rd-guia.php">Guía Completa</a></li>
            <li><a href="faq.php">FAQ</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" style="padding: 1rem 2rem; background-color: #f8f9fa;">
        <ol style="list-style: none; padding: 0; margin: 0; display: flex; gap: 0.5rem;">
            <li><a href="index.php">Inicio</a></li>
            <li>→</li>
            <li><strong>Guía Completa</strong></li>
        </ol>
    </nav>

    <article class="info-proceso" style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <h2>📋 Tabla de Contenidos</h2>
        <nav style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px; margin: 2rem 0;">
            <ol style="columns: 2; column-gap: 2rem;">
                <li><a href="#regularizacion">1. Regularización Migratoria</a></li>
                <li><a href="#trabajo-derechos">2. Trabajo y Derechos Laborales</a></li>
                <li><a href="#salud-educacion">3. Salud y Educación</a></li>
                <li><a href="#vivienda-costo">4. Vivienda y Costo de Vida</a></li>
                <li><a href="#comunidades-apoyo">5. Comunidades y Redes de Apoyo</a></li>
                <li><a href="#tramites-frecuentes">6. Trámites Frecuentes</a></li>
                <li><a href="#errores-comunes">7. Errores Comunes</a></li>
                <li><a href="#directorio-util">8. Directorio Útil</a></li>
            </ol>
        </nav>

        <section id="introduccion">
            <h2>🇨🇺🇩🇴 Introducción: La Comunidad Cubana en República Dominicana</h2>
            <p>La migración cubana hacia República Dominicana ha crecido significativamente en los últimos años, creando una comunidad vibrante y trabajadora que busca integrarse respetuosamente en la sociedad dominicana. Esta guía completa te proporciona toda la información necesaria para navegar exitosamente tu vida como migrante cubano en República Dominicana.</p>
            
            <div style="background-color: #e3f2fd; padding: 1.5rem; border-left: 4px solid #1976d2; margin: 2rem 0;">
                <h3>🎯 ¿Por qué esta guía?</h3>
                <p>Esta guía ha sido creada por <strong>Patriotas del Caribe</strong> basándose en años de experiencia trabajando con la comunidad migrante cubana. Nuestro objetivo es facilitar tu integración exitosa y respetuosa en la sociedad dominicana, proporcionándote información actualizada y práctica.</p>
            </div>
        </section>

        <section id="regularizacion">
            <h2>⚖️ 1. Regularización Migratoria en República Dominicana</h2>

            <div style="background-color: #e8f5e8; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                <p><strong>📖 Guía detallada:</strong> <a href="/regularizacion-rd.php" style="color: #28a745; text-decoration: none; font-weight: bold;">Regularización migratoria en República Dominicana - Guía completa</a></p>
            </div>

            <h3>📋 Requisitos Básicos para Regularización</h3>
            <ul>
                <li><strong>Pasaporte válido</strong> o documento de identidad cubano</li>
                <li><strong>Certificado de antecedentes penales</strong> (apostillado)</li>
                <li><strong>Certificado de nacimiento</strong> (apostillado)</li>
                <li><strong>Certificado médico</strong> emitido por autoridad competente</li>
                <li><strong>Comprobante de ingresos</strong> o carta de trabajo</li>
                <li><strong>Fotografías</strong> tamaño pasaporte (4x4 cm)</li>
            </ul>

            <h3>🛣️ Vías de Regularización Disponibles</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; margin: 2rem 0;">
                <div style="border: 1px solid #ddd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏢 Residencia Temporal</h4>
                    <p>Para trabajadores contratados por empresas dominicanas. Duración: 1-2 años renovable.</p>
                </div>
                <div style="border: 1px solid #ddd; padding: 1.5rem; border-radius: 8px;">
                    <h4>💼 Residencia por Inversión</h4>
                    <p>Para quienes invierten en el país. Mínimo: $200,000 USD en bienes raíces o negocios.</p>
                </div>
                <div style="border: 1px solid #ddd; padding: 1.5rem; border-radius: 8px;">
                    <h4>👨‍👩‍👧‍👦 Reagrupación Familiar</h4>
                    <p>Para familiares de residentes legales. Requiere demostrar parentesco y solvencia económica.</p>
                </div>
            </div>

            <div style="background-color: #fff3e0; padding: 1.5rem; border-left: 4px solid #f57c00; margin: 2rem 0;">
                <h4>📞 Plan de Regularización Humanitaria (PRHEC)</h4>
                <p><strong>Patriotas del Caribe</strong> está trabajando en un Plan de Regularización Humanitaria para Exiliados Cubanos basado en el artículo 151 de la Ley 285-04. <a href="plan_trabajo.php">Conoce más sobre nuestro plan</a> y <a href="index.php#formulario">regístrate</a> para recibir actualizaciones.</p>
            </div>

            <p><a href="regularizacion-rd.php" class="btn-primary">📖 Leer Guía Completa de Regularización</a></p>
        </section>

        <section id="trabajo-derechos">
            <h2>💼 2. Trabajo y Derechos Laborales</h2>

            <div style="background-color: #e8f5e8; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                <p><strong>📖 Guía detallada:</strong> <a href="/trabajo-derechos-rd.php" style="color: #28a745; text-decoration: none; font-weight: bold;">Trabajo formal e informal para cubanos en RD - Guía completa</a></p>
            </div>

            <h3>🔍 Búsqueda de Empleo</h3>
            <ul>
                <li><strong>Portales de empleo:</strong> Computrabajo, Búsqueda Trabajo RD, Indeed</li>
                <li><strong>Redes sociales:</strong> Grupos de Facebook especializados</li>
                <li><strong>Contactos directos:</strong> Redes de la comunidad cubana</li>
                <li><strong>Ferias de empleo:</strong> Eventos regulares en Santo Domingo y Santiago</li>
            </ul>

            <h3>⚖️ Derechos Laborales Básicos</h3>
            <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                <h4>✅ Derechos que tienes:</h4>
                <ul>
                    <li>Salario mínimo establecido por ley</li>
                    <li>Jornada laboral máxima de 8 horas diarias</li>
                    <li>Día de descanso semanal obligatorio</li>
                    <li>Vacaciones anuales pagadas</li>
                    <li>Seguridad social (si estás regularizado)</li>
                </ul>
            </div>

            <h3>⚠️ Sectores con Mayor Demanda</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="background-color: #f3e5f5; padding: 1rem; border-radius: 6px;">
                    <h4>🏥 Salud</h4>
                    <p>Médicos, enfermeros, técnicos sanitarios</p>
                </div>
                <div style="background-color: #f3e5f5; padding: 1rem; border-radius: 6px;">
                    <h4>🎓 Educación</h4>
                    <p>Profesores, tutores, traductores</p>
                </div>
                <div style="background-color: #f3e5f5; padding: 1rem; border-radius: 6px;">
                    <h4>🏗️ Construcción</h4>
                    <p>Ingenieros, arquitectos, obreros especializados</p>
                </div>
                <div style="background-color: #f3e5f5; padding: 1rem; border-radius: 6px;">
                    <h4>💻 Tecnología</h4>
                    <p>Programadores, diseñadores, especialistas IT</p>
                </div>
            </div>

            <p><a href="trabajo-derechos-rd.php" class="btn-primary">📖 Leer Guía Completa de Trabajo y Derechos</a></p>
        </section>

        <section id="salud-educacion">
            <h2>🏥 3. Salud y Educación</h2>
            
            <h3>🏥 Sistema de Salud</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="border: 1px solid #4caf50; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏛️ Sector Público</h4>
                    <p><strong>Hospitales públicos:</strong> Atención gratuita o de bajo costo</p>
                    <p><strong>Requisitos:</strong> Cédula de identidad (si estás regularizado)</p>
                    <p><strong>Espera:</strong> Puede ser prolongada</p>
                </div>
                <div style="border: 1px solid #2196f3; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏥 Sector Privado</h4>
                    <p><strong>Clínicas privadas:</strong> Atención más rápida</p>
                    <p><strong>Costo:</strong> Más elevado</p>
                    <p><strong>Seguros:</strong> Disponibles para residentes</p>
                </div>
            </div>

            <h3>🎓 Sistema Educativo</h3>
            <ul>
                <li><strong>Educación básica:</strong> Gratuita en escuelas públicas</li>
                <li><strong>Educación superior:</strong> Universidades públicas y privadas</li>
                <li><strong>Validación de títulos:</strong> Proceso de homologación disponible</li>
                <li><strong>Cursos técnicos:</strong> INFOTEP ofrece capacitación gratuita</li>
            </ul>

            <p><a href="salud-educacion-migrantes.php" class="btn-primary">📖 Leer Guía Completa de Salud y Educación</a></p>
        </section>

        <section id="vivienda-costo">
            <h2>🏠 4. Vivienda y Costo de Vida</h2>
            
            <h3>💰 Costo de Vida Promedio (2025)</h3>
            <div style="background-color: #fff9c4; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                <h4>💵 Gastos Mensuales Estimados (Santo Domingo)</h4>
                <ul style="columns: 2; column-gap: 2rem;">
                    <li><strong>Alquiler (1 habitación):</strong> $300-500 USD</li>
                    <li><strong>Alquiler (2 habitaciones):</strong> $500-800 USD</li>
                    <li><strong>Alimentación:</strong> $200-400 USD</li>
                    <li><strong>Transporte:</strong> $50-100 USD</li>
                    <li><strong>Servicios básicos:</strong> $80-150 USD</li>
                    <li><strong>Internet:</strong> $30-50 USD</li>
                </ul>
            </div>

            <h3>🏘️ Zonas Recomendadas para Vivir</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="background-color: #e1f5fe; padding: 1rem; border-radius: 6px;">
                    <h4>🏙️ Santo Domingo</h4>
                    <p><strong>Zonas:</strong> Naco, Piantini, Los Cacicazgos</p>
                    <p><strong>Ventajas:</strong> Oportunidades laborales, servicios</p>
                    <p><strong>Costo:</strong> Elevado</p>
                </div>
                <div style="background-color: #e1f5fe; padding: 1rem; border-radius: 6px;">
                    <h4>🏔️ Santiago</h4>
                    <p><strong>Zonas:</strong> La Trinitaria, Los Jardines</p>
                    <p><strong>Ventajas:</strong> Menor costo, comunidad cubana</p>
                    <p><strong>Costo:</strong> Moderado</p>
                </div>
                <div style="background-color: #e1f5fe; padding: 1rem; border-radius: 6px;">
                    <h4>🏖️ Punta Cana</h4>
                    <p><strong>Zonas:</strong> Bavaro, Verón</p>
                    <p><strong>Ventajas:</strong> Turismo, empleo en hoteles</p>
                    <p><strong>Costo:</strong> Variable</p>
                </div>
            </div>

            <p><a href="vivienda-costo-vida-rd.php" class="btn-primary">📖 Leer Guía Completa de Vivienda</a></p>
        </section>

        <section id="comunidades-apoyo">
            <h2>🤝 5. Comunidades y Redes de Apoyo</h2>
            
            <h3>👥 Redes de la Comunidad Cubana</h3>
            <ul>
                <li><strong>Grupos de Facebook:</strong> Comunidades activas de apoyo mutuo</li>
                <li><strong>WhatsApp:</strong> Grupos por ciudades y profesiones</li>
                <li><strong>Eventos culturales:</strong> Encuentros regulares en Santo Domingo</li>
                <li><strong>Iglesias:</strong> Varias congregaciones con programas de apoyo</li>
            </ul>

            <h3>🏛️ Organizaciones de Apoyo</h3>
            <div style="background-color: #f3e5f5; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                <h4>🤝 Patriotas del Caribe</h4>
                <p><strong>Servicios:</strong> Asesoría legal, orientación migratoria, apoyo comunitario</p>
                <p><strong>Contacto:</strong> <a href="mailto:contacto@patriotasdelcaribe.com">contacto@patriotasdelcaribe.com</a></p>
                <p><strong>Redes:</strong> <a href="https://www.facebook.com/groups/1672337816821354">Facebook</a> | <a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV">WhatsApp</a></p>
            </div>

            <h3>⛪ Recursos Religiosos</h3>
            <ul>
                <li><strong>Iglesias católicas:</strong> Programas de asistencia social</li>
                <li><strong>Iglesias protestantes:</strong> Redes de apoyo comunitario</li>
                <li><strong>Centros comunitarios:</strong> Actividades y servicios</li>
            </ul>

            <p><a href="comunidades-redes-apoyo.php" class="btn-primary">📖 Leer Guía Completa de Comunidades</a></p>
        </section>

        <section id="tramites-frecuentes">
            <h2>📋 6. Trámites Frecuentes</h2>
            
            <h3>📄 Apostillas y Legalizaciones</h3>
            <ul>
                <li><strong>Documentos cubanos:</strong> Deben apostillarse en Cuba</li>
                <li><strong>Traducciones:</strong> Requeridas para documentos oficiales</li>
                <li><strong>Tiempo:</strong> 2-4 semanas para apostillas</li>
                <li><strong>Costo:</strong> Variable según documento</li>
            </ul>

            <h3>🆔 Documentos de Identidad</h3>
            <ul>
                <li><strong>Cédula de identidad:</strong> Para residentes legales</li>
                <li><strong>Licencia de conducir:</strong> Requiere cédula válida</li>
                <li><strong>Número de identificación:</strong> Necesario para trámites</li>
            </ul>

            <p><a href="tramites-frecuentes-rd.php" class="btn-primary">📖 Leer Guía Completa de Trámites</a></p>
        </section>

        <section id="errores-comunes">
            <h2>⚠️ 7. Errores Comunes y Cómo Evitarlos</h2>
            
            <div style="background-color: #ffebee; padding: 1.5rem; border-left: 4px solid #f44336; margin: 1rem 0;">
                <h4>❌ Errores que debes evitar:</h4>
                <ul>
                    <li><strong>No regularizar documentos:</strong> Siempre mantén tus papeles en orden</li>
                    <li><strong>Ignorar leyes locales:</strong> Infórmate sobre regulaciones dominicanas</li>
                    <li><strong>No integrarse:</strong> Participa en la comunidad local</li>
                    <li><strong>No ahorrar:</strong> Mantén un fondo de emergencia</li>
                    <li><strong>No aprender español dominicano:</strong> Aprende las particularidades locales</li>
                </ul>
            </div>

            <h3>✅ Consejos para el Éxito</h3>
            <ul>
                <li><strong>Mantén documentación actualizada</strong></li>
                <li><strong>Construye redes de apoyo</strong></li>
                <li><strong>Respeta las leyes y cultura dominicana</strong></li>
                <li><strong>Busca oportunidades de crecimiento profesional</strong></li>
                <li><strong>Contribuye positivamente a la comunidad</strong></li>
            </ul>

            <p><a href="errores-comunes-migrantes.php" class="btn-primary">📖 Leer Guía Completa de Errores Comunes</a></p>
        </section>

        <section id="testimonios-comunidad" style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
            <h2>💬 Testimonios de nuestra comunidad</h2>
            <p>Lee experiencias reales de migrantes cubanos que han encontrado éxito en República Dominicana con el apoyo de Patriotas del Caribe.</p>

            <div style="background-color: white; padding: 1.5rem; border-radius: 6px; margin: 1rem 0; border-left: 4px solid #28a745;">
                <blockquote style="font-style: italic; margin: 0;">
                    "Patriotas del Caribe me ayudó a entender mis derechos como migrante en República Dominicana. Su orientación fue fundamental para regularizar mi situación migratoria."
                </blockquote>
                <footer style="margin-top: 0.5rem; font-size: 0.9rem; color: #666;">
                    - María Elena R., Santo Domingo
                </footer>
            </div>

            <p style="text-align: center; margin-top: 1.5rem;">
                <a href="/testimonios.php" class="btn-primary" style="background-color: #28a745; color: white; padding: 12px 24px; text-decoration: none; border-radius: 6px; font-weight: bold;">
                    📖 Leer todos los testimonios
                </a>
            </p>
        </section>

        <section id="directorio-util">
            <h2>📞 8. Directorio Útil</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏛️ Instituciones Gubernamentales</h4>
                    <ul>
                        <li><strong>Dirección General de Migración:</strong> (809) 508-2555</li>
                        <li><strong>Ministerio de Trabajo:</strong> (809) 535-4404</li>
                        <li><strong>Registro Civil (JCE):</strong> (809) 732-0133</li>
                        <li><strong>Defensoría del Pueblo:</strong> (809) 381-4777</li>
                    </ul>
                </div>
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏥 Servicios de Salud</h4>
                    <ul>
                        <li><strong>Cruz Roja Dominicana:</strong> (809) 682-4545</li>
                        <li><strong>Emergencias:</strong> 911</li>
                        <li><strong>Consulta guías específicas</strong> para más información</li>
                    </ul>
                </div>
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px;">
                    <h4>🎓 Educación</h4>
                    <ul>
                        <li><strong>INFOTEP:</strong> (809) 566-4161</li>
                        <li><strong>MINERD:</strong> (809) 688-9700</li>
                        <li><strong>MESCyT:</strong> (809) 731-1100</li>
                    </ul>
                </div>
            </div>

            <p><a href="directorio-util-rd.php" class="btn-primary">📖 Ver Directorio Completo</a></p>
        </section>

        <!-- CTA Section -->
        <?php 
        require_once 'includes/cta-templates.php';
        includeCTA('main', 
            '🤝 ¿Necesitas Ayuda Personalizada?',
            'Patriotas del Caribe está aquí para apoyarte en tu proceso de integración en República Dominicana.',
            [
                'custom_buttons' => [
                    [
                        'text' => '📖 Ver Plan de Trabajo',
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
