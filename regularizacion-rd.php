<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Regularización Migratoria en República Dominicana: Guía Completa 2025';
$page_description = 'Guía completa para regularizar tu situación migratoria en República Dominicana. Requisitos, documentos, procesos y vías de regularización para migrantes cubanos.';

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
            <h1>Regularización Migratoria en República Dominicana</h1>
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
            <li><a href="regularizacion-rd.php">Regularización</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" style="padding: 1rem 2rem; background-color: #f8f9fa;">
        <ol style="list-style: none; padding: 0; margin: 0; display: flex; gap: 0.5rem;">
            <li><a href="index.php">Inicio</a></li>
            <li>→</li>
            <li><a href="cubanos-en-rd-guia.php">Guía Completa</a></li>
            <li>→</li>
            <li><strong>Regularización</strong></li>
        </ol>
    </nav>

    <article style="max-width: 1000px; margin: 0 auto; padding: 2rem;">
        <div style="background-color: #e3f2fd; padding: 2rem; border-radius: 12px; margin-bottom: 2rem; text-align: center;">
            <h2>⚖️ Regularización Migratoria en República Dominicana</h2>
            <p style="font-size: 1.2rem; margin: 1rem 0;">Todo lo que necesitas saber para regularizar tu situación migratoria como ciudadano cubano en República Dominicana.</p>
        </div>

        <section>
            <h2>📋 Requisitos Generales para Regularización</h2>
            
            <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                <h3>📄 Documentos Obligatorios</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem;">
                    <div>
                        <h4>✅ Documentos de Identidad</h4>
                        <ul>
                            <li>Pasaporte cubano válido</li>
                            <li>Certificado de nacimiento (apostillado)</li>
                            <li>Fotografías tamaño pasaporte (4x4 cm)</li>
                        </ul>
                    </div>
                    <div>
                        <h4>📜 Documentos Legales</h4>
                        <ul>
                            <li>Certificado de antecedentes penales (apostillado)</li>
                            <li>Certificado médico oficial</li>
                            <li>Constancia de solvencia económica</li>
                        </ul>
                    </div>
                </div>
            </div>

            <h3>💰 Costos Estimados (2025)</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px; text-align: center;">
                    <h4>💵 Residencia Temporal</h4>
                    <p style="font-size: 1.5rem; font-weight: bold; color: #f57c00;">$500-800 USD</p>
                    <p>Incluye: visas, permisos, certificados médicos</p>
                </div>
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px; text-align: center;">
                    <h4>🏢 Residencia por Trabajo</h4>
                    <p style="font-size: 1.5rem; font-weight: bold; color: #f57c00;">$300-600 USD</p>
                    <p>Depende del tipo de contrato laboral</p>
                </div>
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px; text-align: center;">
                    <h4>👨‍👩‍👧‍👦 Reagrupación Familiar</h4>
                    <p style="font-size: 1.5rem; font-weight: bold; color: #f57c00;">$400-700 USD</p>
                    <p>Para familiares de residentes legales</p>
                </div>
            </div>
        </section>

        <section>
            <h2>🛣️ Vías de Regularización Disponibles</h2>
            
            <div style="margin: 2rem 0;">
                <h3>💼 1. Residencia por Trabajo</h3>
                <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                    <h4>📋 Requisitos:</h4>
                    <ul>
                        <li>Contrato de trabajo con empresa dominicana</li>
                        <li>Empresa debe tener permiso para contratar extranjeros</li>
                        <li>Salario mínimo establecido por ley</li>
                        <li>Certificación de habilidades (si aplica)</li>
                    </ul>
                    <h4>⏱️ Duración:</h4>
                    <p>1-2 años renovable, con posibilidad de residencia permanente después de 3 años</p>
                </div>

                <h3>🏢 2. Residencia por Inversión</h3>
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                    <h4>💰 Requisitos de Inversión:</h4>
                    <ul>
                        <li><strong>Bienes raíces:</strong> Mínimo $200,000 USD</li>
                        <li><strong>Negocio:</strong> Inversión mínima de $150,000 USD</li>
                        <li><strong>Bonos gubernamentales:</strong> $200,000 USD por 5 años</li>
                    </ul>
                    <h4>✅ Ventajas:</h4>
                    <p>Residencia permanente inmediata, sin necesidad de renovación anual</p>
                </div>

                <h3>👨‍👩‍👧‍👦 3. Reagrupación Familiar</h3>
                <div style="background-color: #f3e5f5; padding: 1.5rem; border-radius: 8px; margin: 1rem 0;">
                    <h4>👥 Requisitos:</h4>
                    <ul>
                        <li>Familiar directo con residencia legal en RD</li>
                        <li>Demostrar parentesco (certificado de nacimiento apostillado)</li>
                        <li>Solvencia económica del familiar residente</li>
                        <li>Vivienda adecuada para la familia</li>
                    </ul>
                    <h4>👨‍👩‍👧‍👦 Familiares elegibles:</h4>
                    <p>Cónyuge, hijos menores de 18 años, padres mayores de 65 años</p>
                </div>
            </div>
        </section>

        <section>
            <h2>📝 Proceso Paso a Paso</h2>
            
            <div style="background-color: #fff9c4; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                <h3>🔄 Proceso General de Regularización</h3>
                <ol style="line-height: 2;">
                    <li><strong>Preparación de documentos:</strong> Apostillar y traducir documentos cubanos (2-4 semanas)</li>
                    <li><strong>Solicitud inicial:</strong> Presentar documentos en Dirección General de Migración</li>
                    <li><strong>Revisión administrativa:</strong> Verificación de documentos y requisitos (1-2 meses)</li>
                    <li><strong>Entrevista:</strong> Entrevista con oficial de migración (si es requerida)</li>
                    <li><strong>Decisión:</strong> Aprobación o rechazo de la solicitud</li>
                    <li><strong>Emisión de documentos:</strong> Cédula de identidad y permiso de residencia</li>
                </ol>
            </div>

            <h3>📞 Dónde Presentar la Solicitud</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; margin: 1rem 0;">
                <div style="border: 1px solid #ddd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏛️ Dirección General de Migración</h4>
                    <p><strong>Dirección:</strong> Av. 30 de Marzo, Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Horario:</strong> Lunes a Viernes, 8:00 AM - 4:00 PM</p>
                </div>
                <div style="border: 1px solid #ddd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🌐 Servicios Online</h4>
                    <p><strong>Portal web:</strong> <a href="https://migracion.gob.do" target="_blank">migracion.gob.do</a></p>
                    <p><strong>Cita previa:</strong> Disponible para algunos trámites</p>
                    <p><strong>Consulta de estado:</strong> Seguimiento online</p>
                </div>
            </div>
        </section>

        <section>
            <h2>⚠️ Errores Comunes a Evitar</h2>
            
            <div style="background-color: #ffebee; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                <h3>❌ Errores Frecuentes</h3>
                <ul style="line-height: 1.8;">
                    <li><strong>Documentos no apostillados:</strong> Todos los documentos cubanos deben estar apostillados</li>
                    <li><strong>Traducciones incorrectas:</strong> Usar traductores certificados por el Ministerio de Relaciones Exteriores</li>
                    <li><strong>Información inconsistente:</strong> Verificar que todos los datos coincidan en todos los documentos</li>
                    <li><strong>No renovar permisos:</strong> Mantener documentación actualizada</li>
                    <li><strong>Ignorar requisitos específicos:</strong> Cada vía tiene requisitos particulares</li>
                </ul>
            </div>

            <h3>✅ Consejos para el Éxito</h3>
            <div style="background-color: #e8f5e8; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                <ul style="line-height: 1.8;">
                    <li><strong>Prepara todo con anticipación:</strong> El proceso puede tomar varios meses</li>
                    <li><strong>Mantén copias de todo:</strong> Documentos originales y copias certificadas</li>
                    <li><strong>Busca asesoría legal:</strong> Consulta con abogados especializados en migración</li>
                    <li><strong>Mantén comunicación:</strong> Responde rápidamente a solicitudes de información</li>
                    <li><strong>Planifica financieramente:</strong> Ten fondos suficientes para todo el proceso</li>
                </ul>
            </div>
        </section>

        <section>
            <h2>📞 Recursos y Contactos Útiles</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1rem; margin: 2rem 0;">
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🏛️ Instituciones Oficiales</h4>
                    <ul>
                        <li><strong>Dirección General de Migración:</strong> (809) 221-4300</li>
                        <li><strong>Ministerio de Relaciones Exteriores:</strong> (809) 221-4300</li>
                        <li><strong>Registro Civil:</strong> (809) 221-4300</li>
                        <li><strong>Defensoría del Pueblo:</strong> (809) 221-4300</li>
                    </ul>
                </div>
                <div style="background-color: #f3e5f5; padding: 1.5rem; border-radius: 8px;">
                    <h4>🤝 Organizaciones de Apoyo</h4>
                    <ul>
                        <li><strong>Patriotas del Caribe:</strong> contacto@patriotasdelcaribe.com</li>
                        <li><strong>ACNUR República Dominicana:</strong> (809) 221-4300</li>
                        <li><strong>Organización Internacional para las Migraciones:</strong> (809) 221-4300</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <?php 
        require_once 'includes/cta-templates.php';
        echo getRegularizationCTA();
        ?>

        <!-- Enlaces relacionados -->
        <section style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
            <h3>📖 Artículos Relacionados</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-top: 1rem;">
                <a href="trabajo-derechos-rd.php" style="text-decoration: none; color: inherit;">
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; border: 1px solid #ddd; transition: box-shadow 0.3s;">
                        <h4>💼 Trabajo y Derechos Laborales</h4>
                        <p>Conoce tus derechos como trabajador en República Dominicana</p>
                    </div>
                </a>
                <a href="tramites-frecuentes-rd.php" style="text-decoration: none; color: inherit;">
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; border: 1px solid #ddd; transition: box-shadow 0.3s;">
                        <h4>📋 Trámites Frecuentes</h4>
                        <p>Guía completa de trámites administrativos</p>
                    </div>
                </a>
                <a href="cubanos-en-rd-guia.php" style="text-decoration: none; color: inherit;">
                    <div style="background-color: white; padding: 1.5rem; border-radius: 6px; border: 1px solid #ddd; transition: box-shadow 0.3s;">
                        <h4>📚 Guía Completa</h4>
                        <p>Volver a la guía principal de cubanos en RD</p>
                    </div>
                </a>
            </div>
        </section>
    </article>
</main>

<footer>
    <div class="footer-links">
        <a href="index.php">Inicio</a> |
        <a href="cubanos-en-rd-guia.php">Guía Completa</a> |
        <a href="regularizacion-rd.php">Regularización</a> |
        <a href="faq.php">FAQ</a> |
        <a href="plan_trabajo.php">Plan de Trabajo</a> |
        <a href="privacidad.php">Privacidad</a> |
        <a href="terminos.php">Términos</a>
    </div>
    <p>&copy; 2025 Patriotas del Caribe. Todos los derechos reservados.</p>
</footer>

<?php include 'includes/footer.php'; ?>
