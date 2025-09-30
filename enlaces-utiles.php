<?php 
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Directorio Completo de Enlaces Útiles para Migrantes Cubanos en RD';
$page_description = 'Directorio completo de enlaces útiles, organizaciones gubernamentales, ONGs internacionales, recursos legales, servicios de salud y apoyo para migrantes cubanos en República Dominicana.';
$canonical_path = '/enlaces-utiles.php';

require_once 'includes/schemas.php';

// Breadcrumb schema
$breadcrumbSchema = generateBreadcrumbSchema([
    ['name' => 'Inicio', 'url' => '/'],
    ['name' => 'Guía para Cubanos en RD', 'url' => '/cubanos-en-rd-guia.php'],
    ['name' => 'Directorio de Enlaces', 'url' => '/enlaces-utiles.php']
]);

require_once 'includes/head.php';

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
            <h1>Enlaces Útiles y Directorios</h1>
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
            <li><a href="enlaces-utiles.php">Enlaces Útiles</a></li>
        </ul>
    </nav>
</header>

<main>
    <!-- Breadcrumb -->
    <nav aria-label="Breadcrumb" style="padding: 1rem 2rem; background-color: #f8f9fa;">
        <ol style="list-style: none; padding: 0; margin: 0; display: flex; gap: 0.5rem;">
            <li><a href="index.php">Inicio</a></li>
            <li>→</li>
            <li><strong>Enlaces Útiles</strong></li>
        </ol>
    </nav>

    <article style="max-width: 1200px; margin: 0 auto; padding: 2rem;">
        <!-- Introducción -->
        <section style="background-color: #e3f2fd; padding: 3rem; border-radius: 12px; text-align: center; margin-bottom: 3rem;">
            <h2>🔗 Recursos y Enlaces Útiles</h2>
            <p style="font-size: 1.2rem; line-height: 1.8; margin: 2rem 0;">
                Hemos recopilado una lista completa de enlaces útiles, organizaciones aliadas y recursos 
                que pueden ayudarte en tu proceso de integración en República Dominicana. 
                Todos estos recursos han sido verificados y recomendados por nuestro equipo.
            </p>
        </section>

        <!-- Organizaciones Gubernamentales -->
        <section style="margin: 3rem 0;">
            <h2>🏛️ Organizaciones Gubernamentales</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
                
                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; border-left: 4px solid #1976d2;">
                    <h3>📋 Dirección General de Migración</h3>
                    <p><strong>Función:</strong> Regularización migratoria, visas, residencias</p>
                    <p><strong>Dirección:</strong> Av. 30 de Marzo, Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Sitio web:</strong> <a href="https://migracion.gob.do" target="_blank" rel="noopener">migracion.gob.do</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📝 Servicios Disponibles</h4>
                        <ul>
                            <li>Regularización migratoria</li>
                            <li>Renovación de documentos</li>
                            <li>Consultas de estatus</li>
                            <li>Certificaciones</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; border-left: 4px solid #4caf50;">
                    <h3>⚖️ Defensoría del Pueblo</h3>
                    <p><strong>Función:</strong> Protección de derechos humanos</p>
                    <p><strong>Dirección:</strong> Av. Jiménez Moya, Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 535-4400</p>
                    <p><strong>Sitio web:</strong> <a href="https://defensoria.gob.do" target="_blank" rel="noopener">defensoria.gob.do</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>🤝 Servicios Disponibles</h4>
                        <ul>
                            <li>Defensa de derechos humanos</li>
                            <li>Asesoría legal gratuita</li>
                            <li>Mediación de conflictos</li>
                            <li>Denuncias por abusos</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; border-left: 4px solid #ff9800;">
                    <h3>💼 Ministerio de Trabajo</h3>
                    <p><strong>Función:</strong> Derechos laborales y empleo</p>
                    <p><strong>Dirección:</strong> Av. México, Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 535-4400</p>
                    <p><strong>Sitio web:</strong> <a href="https://trabajo.gob.do" target="_blank" rel="noopener">trabajo.gob.do</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>💼 Servicios Disponibles</h4>
                        <ul>
                            <li>Inspección laboral</li>
                            <li>Conciliación de conflictos</li>
                            <li>Información sobre derechos</li>
                            <li>Registro de contratos</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #f8f9fa; padding: 2rem; border-radius: 8px; border-left: 4px solid #9c27b0;">
                    <h3>🏥 Ministerio de Salud Pública</h3>
                    <p><strong>Función:</strong> Servicios de salud pública</p>
                    <p><strong>Dirección:</strong> Av. San Cristóbal, Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Sitio web:</strong> <a href="https://salud.gob.do" target="_blank" rel="noopener">salud.gob.do</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>🏥 Servicios Disponibles</h4>
                        <ul>
                            <li>Atención médica básica</li>
                            <li>Programas de vacunación</li>
                            <li>Salud materno-infantil</li>
                            <li>Emergencias médicas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organizaciones Internacionales -->
        <section style="margin: 3rem 0;">
            <h2>🌍 Organizaciones Internacionales</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
                
                <div style="background-color: #fff3e0; padding: 2rem; border-radius: 8px; border-left: 4px solid #f57c00;">
                    <h3>🤝 ACNUR - Alto Comisionado de las Naciones Unidas</h3>
                    <p><strong>Función:</strong> Protección de refugiados y desplazados</p>
                    <p><strong>Oficina RD:</strong> Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Sitio web:</strong> <a href="https://www.acnur.org" target="_blank" rel="noopener">acnur.org</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>🛡️ Servicios Disponibles</h4>
                        <ul>
                            <li>Protección internacional</li>
                            <li>Asistencia legal</li>
                            <li>Programas de integración</li>
                            <li>Asistencia humanitaria</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #e8f5e8; padding: 2rem; border-radius: 8px; border-left: 4px solid #4caf50;">
                    <h3>🌐 OIM - Organización Internacional para las Migraciones</h3>
                    <p><strong>Función:</strong> Gestión de migración ordenada</p>
                    <p><strong>Oficina RD:</strong> Santo Domingo</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Sitio web:</strong> <a href="https://www.iom.int" target="_blank" rel="noopener">iom.int</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📋 Servicios Disponibles</h4>
                        <ul>
                            <li>Información sobre migración</li>
                            <li>Programas de retorno voluntario</li>
                            <li>Capacitación laboral</li>
                            <li>Asistencia técnica</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #e3f2fd; padding: 2rem; border-radius: 8px; border-left: 4px solid #1976d2;">
                    <h3>🏛️ Cruz Roja Dominicana</h3>
                    <p><strong>Función:</strong> Asistencia humanitaria</p>
                    <p><strong>Oficinas:</strong> Múltiples ubicaciones</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Sitio web:</strong> <a href="https://www.cruzroja.org.do" target="_blank" rel="noopener">cruzroja.org.do</a></p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>🚑 Servicios Disponibles</h4>
                        <ul>
                            <li>Emergencias médicas</li>
                            <li>Primeros auxilios</li>
                            <li>Asistencia social</li>
                            <li>Capacitación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Organizaciones de Apoyo -->
        <section style="margin: 3rem 0;">
            <h2>🤝 Organizaciones de Apoyo</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin: 2rem 0;">
                
                <div style="background-color: #f3e5f5; padding: 2rem; border-radius: 8px; border-left: 4px solid #9c27b0;">
                    <h3>🇨🇺 Casa Cuba República Dominicana</h3>
                    <p><strong>Función:</strong> Representación de la comunidad cubana</p>
                    <p><strong>Ubicación:</strong> Santo Domingo</p>
                    <p><strong>Contacto:</strong> Redes sociales</p>
                    <p><strong>Redes:</strong> Facebook, Instagram</p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>🤝 Servicios Disponibles</h4>
                        <ul>
                            <li>Eventos culturales</li>
                            <li>Red de contactos</li>
                            <li>Información comunitaria</li>
                            <li>Actividades sociales</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #fff3e0; padding: 2rem; border-radius: 8px; border-left: 4px solid #f57c00;">
                    <h3>🏘️ Centro de Apoyo al Migrante</h3>
                    <p><strong>Función:</strong> Servicios integrales para migrantes</p>
                    <p><strong>Ubicación:</strong> Santiago de los Caballeros</p>
                    <p><strong>Teléfono:</strong> (809) 221-4300</p>
                    <p><strong>Servicios:</strong> Orientación legal y social</p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>📋 Servicios Disponibles</h4>
                        <ul>
                            <li>Asesoría legal</li>
                            <li>Orientación social</li>
                            <li>Capacitación laboral</li>
                            <li>Apoyo psicológico</li>
                        </ul>
                    </div>
                </div>

                <div style="background-color: #e8f5e8; padding: 2rem; border-radius: 8px; border-left: 4px solid #4caf50;">
                    <h3>⛪ Servicios Religiosos</h3>
                    <p><strong>Función:</strong> Apoyo espiritual y comunitario</p>
                    <p><strong>Ubicaciones:</strong> Múltiples iglesias</p>
                    <p><strong>Contacto:</strong> Iglesias locales</p>
                    <p><strong>Servicios:</strong> Apoyo espiritual y social</p>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px; margin: 1rem 0;">
                        <h4>⛪ Servicios Disponibles</h4>
                        <ul>
                            <li>Servicios religiosos</li>
                            <li>Programas de asistencia</li>
                            <li>Grupos de apoyo</li>
                            <li>Actividades comunitarias</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recursos Digitales -->
        <section style="margin: 3rem 0;">
            <h2>💻 Recursos Digitales y Aplicaciones</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>📱 Aplicaciones Útiles</h4>
                    <ul>
                        <li><strong>Google Translate:</strong> Traducción instantánea</li>
                        <li><strong>Maps:</strong> Navegación y ubicaciones</li>
                        <li><strong>WhatsApp:</strong> Comunicación gratuita</li>
                        <li><strong>Banco Popular:</strong> Banca móvil</li>
                        <li><strong>Uber:</strong> Transporte seguro</li>
                    </ul>
                </div>

                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>🌐 Sitios Web Útiles</h4>
                    <ul>
                        <li><strong>Ministerio de Relaciones Exteriores:</strong> <a href="https://mirex.gob.do" target="_blank">mirex.gob.do</a></li>
                        <li><strong>Banco Central:</strong> <a href="https://www.bancentral.gov.do" target="_blank">bancentral.gov.do</a></li>
                        <li><strong>Superintendencia de Bancos:</strong> <a href="https://www.sib.gob.do" target="_blank">sib.gob.do</a></li>
                        <li><strong>Oficina Nacional de Estadística:</strong> <a href="https://www.one.gob.do" target="_blank">one.gob.do</a></li>
                    </ul>
                </div>

                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>📺 Medios de Comunicación</h4>
                    <ul>
                        <li><strong>Listín Diario:</strong> <a href="https://listindiario.com" target="_blank">listindiario.com</a></li>
                        <li><strong>Diario Libre:</strong> <a href="https://diariolibre.com" target="_blank">diariolibre.com</a></li>
                        <li><strong>El Día:</strong> <a href="https://eldia.com.do" target="_blank">eldia.com.do</a></li>
                        <li><strong>CDN:</strong> <a href="https://cdn.com.do" target="_blank">cdn.com.do</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Servicios Financieros -->
        <section style="margin: 3rem 0;">
            <h2>💰 Servicios Financieros y Bancarios</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #1976d2;">
                    <h4>🏦 Bancos que Aceptan Pasaporte</h4>
                    <ul>
                        <li><strong>Banco Popular:</strong> Apertura con pasaporte</li>
                        <li><strong>BHD León:</strong> Cuenta de ahorros</li>
                        <li><strong>Banreservas:</strong> Servicios básicos</li>
                        <li><strong>Banco BDI:</strong> Productos para migrantes</li>
                    </ul>
                </div>
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #4caf50;">
                    <h4>💸 Remesadoras Oficiales</h4>
                    <ul>
                        <li><strong>Western Union:</strong> <a href="https://www.westernunion.com.do" target="_blank">westernunion.com.do</a></li>
                        <li><strong>MoneyGram:</strong> Múltiples puntos</li>
                        <li><strong>Quisqueya Envíos:</strong> Especializada en RD</li>
                        <li><strong>Remesas Dominicanas:</strong> Local</li>
                    </ul>
                </div>
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px; border-left: 4px solid #ff9800;">
                    <h4>📱 Billeteras Digitales</h4>
                    <ul>
                        <li><strong>Banco Popular App:</strong> Banca móvil</li>
                        <li><strong>BHD León Móvil:</strong> Pagos y transferencias</li>
                        <li><strong>AZUL Móvil:</strong> Recarga y servicios</li>
                        <li><strong>Transferencias 24/7:</strong> Sistema nacional</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Servicios de Traducción y Convalidación -->
        <section style="margin: 3rem 0;">
            <h2>📜 Traducción, Apostillas y Convalidación</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <div style="background-color: #e3f2fd; padding: 1.5rem; border-radius: 8px;">
                    <h4>🌐 Traductores Oficiales</h4>
                    <p><strong>Colegio Dominicano de Traductores e Intérpretes (CDTI)</strong></p>
                    <p>Teléfono: (809) 685-7539</p>
                    <p>Lista de traductores certificados para documentos legales</p>
                </div>
                <div style="background-color: #fff3e0; padding: 1.5rem; border-radius: 8px;">
                    <h4>📋 MESCYT - Convalidación de Títulos</h4>
                    <p><strong>Ministerio de Educación Superior</strong></p>
                    <p>Teléfono: (809) 731-1100</p>
                    <p>Web: <a href="https://www.mescyt.gob.do" target="_blank">mescyt.gob.do</a></p>
                    <p>Proceso de reconocimiento de títulos extranjeros</p>
                </div>
                <div style="background-color: #e8f5e8; padding: 1.5rem; border-radius: 8px;">
                    <h4>⚖️ Procuraduría General - Legalización</h4>
                    <p><strong>Autenticación de documentos</strong></p>
                    <p>Teléfono: (809) 533-3522</p>
                    <p>Web: <a href="https://pgr.gob.do" target="_blank">pgr.gob.do</a></p>
                </div>
            </div>
        </section>

        <!-- Transporte y Movilidad -->
        <section style="margin: 3rem 0;">
            <h2>🚗 Transporte y Movilidad</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>🚕 Apps de Transporte</h4>
                    <ul>
                        <li><strong>Uber:</strong> Transporte seguro</li>
                        <li><strong>Cabify:</strong> Alternativa confiable</li>
                        <li><strong>OMSA:</strong> Transporte público oficial</li>
                        <li><strong>Metro de Santo Domingo:</strong> Líneas 1 y 2</li>
                    </ul>
                </div>
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>🚌 Transporte Interurbano</h4>
                    <ul>
                        <li><strong>Caribe Tours:</strong> Principales rutas</li>
                        <li><strong>Metro Tours:</strong> Servicio ejecutivo</li>
                        <li><strong>Expreso Bávaro:</strong> Santo Domingo-Punta Cana</li>
                        <li><strong>Línea Cibao:</strong> Ruta norte</li>
                    </ul>
                </div>
                <div style="background-color: #f8f9fa; padding: 1.5rem; border-radius: 8px;">
                    <h4>🚗 Licencias de Conducir</h4>
                    <p><strong>INTRANT</strong></p>
                    <p>Teléfono: (809) 563-5353</p>
                    <p>Web: <a href="https://www.intrant.gob.do" target="_blank">intrant.gob.do</a></p>
                    <p>Solicitud y renovación de licencias</p>
                </div>
            </div>
        </section>

        <!-- Directorios Especializados -->
        <section style="margin: 3rem 0;">
            <h2>📋 Directorios Especializados</h2>
            <div style="background-color: #e3f2fd; padding: 2rem; border-radius: 8px;">
                <h3>🎯 Directorios de ONG y Organizaciones Sociales</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin: 1rem 0;">
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>🌍 ACNUR - Directorio de Organizaciones</h4>
                        <p><a href="https://www.acnur.org/directorio-organizaciones" target="_blank" rel="noopener">Ver directorio</a></p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>🇩🇴 ADONG - Asociación de ONG Dominicanas</h4>
                        <p><a href="https://adong.org.do" target="_blank" rel="noopener">Ver directorio</a></p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>🌐 NGO Advisor</h4>
                        <p><a href="https://www.ngoadvisor.net" target="_blank" rel="noopener">Ver directorio</a></p>
                    </div>
                    <div style="background-color: white; padding: 1rem; border-radius: 6px;">
                        <h4>⭐ GuideStar</h4>
                        <p><a href="https://www.guidestar.org" target="_blank" rel="noopener">Ver directorio</a></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Enlaces Relacionados -->
        <section class="related-links" style="margin: 3rem 0; background-color: #f8f9fa; padding: 2rem; border-radius: 8px;">
            <h2>📚 Guías Relacionadas</h2>
            <ul style="list-style: none; padding: 0;">
                <li style="margin: 1rem 0;"><a href="cubanos-en-rd-guia.php" style="font-size: 1.1rem;">→ Guía completa para cubanos en República Dominicana</a></li>
                <li style="margin: 1rem 0;"><a href="regularizacion-rd.php" style="font-size: 1.1rem;">→ Proceso de regularización migratoria</a></li>
                <li style="margin: 1rem 0;"><a href="trabajo-derechos-rd.php" style="font-size: 1.1rem;">→ Derechos laborales y búsqueda de empleo</a></li>
                <li style="margin: 1rem 0;"><a href="tramites-frecuentes-rd.php" style="font-size: 1.1rem;">→ Trámites administrativos frecuentes</a></li>
                <li style="margin: 1rem 0;"><a href="comunidades-apoyo-rd.php" style="font-size: 1.1rem;">→ Comunidades y redes de apoyo</a></li>
                <li style="margin: 1rem 0;"><a href="errores-comunes-migrantes.php" style="font-size: 1.1rem;">→ Errores comunes que debes evitar</a></li>
            </ul>
        </section>

        <!-- CTA Section -->
        <?php 
        require_once 'includes/cta-templates.php';
        includeCTA('support',
            '🤝 ¿Conoces Otros Recursos Útiles?',
            'Si conoces otros enlaces útiles, organizaciones o recursos que deberíamos incluir en esta lista, compártelos con nosotros.',
            [
                'custom_buttons' => [
                    [
                        'text' => '📧 Enviar Sugerencia',
                        'url' => 'mailto:contacto@patriotasdelcaribe.com',
                        'color' => '#1976d2'
                    ],
                    [
                        'text' => '💬 Compartir en WhatsApp',
                        'url' => 'https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV',
                        'color' => '#25D366'
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
