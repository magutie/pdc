<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Trámites Frecuentes para Migrantes Cubanos en República Dominicana';
$page_description = 'Guía práctica de trámites migratorios, documentación, apostillas, antecedentes penales y gestiones habituales para cubanos en RD.';
$canonical_path = '/tramites-frecuentes-rd.php';

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
    ['name' => 'Trámites Frecuentes', 'url' => '/tramites-frecuentes-rd.php']
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
            <h1>Trámites Frecuentes para Migrantes Cubanos en RD</h1>
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
            <span>Trámites Frecuentes</span>
        </nav>

        <section class="intro-section">
            <p class="lead">
                Navegar el sistema de trámites dominicano puede ser confuso al principio. Esta guía te explica paso a paso los trámites más comunes que necesitarás realizar como migrante cubano en República Dominicana, desde apostillas hasta renovaciones de documentos.
            </p>
        </section>

        <section class="table-contents">
            <h2>Contenido de esta guía</h2>
            <ul>
                <li><a href="#apostillas">Apostillas y legalizaciones</a></li>
                <li><a href="#antecedentes-penales">Certificados de antecedentes penales</a></li>
                <li><a href="#licencia-conducir">Licencia de conducir</a></li>
                <li><a href="#cedula-identidad">Cédula de identidad y electoral</a></li>
                <li><a href="#pasaporte-renovacion">Renovación de pasaporte cubano</a></li>
                <li><a href="#prorroga-estancia">Prórroga de estancia turística</a></li>
                <li><a href="#certificaciones-documentos">Certificaciones y copias</a></li>
                <li><a href="#errores-evitar">Errores comunes a evitar</a></li>
            </ul>
        </section>

        <section id="apostillas" class="content-section">
            <h2>Apostillas y legalizaciones de documentos</h2>

            <div class="highlight-box">
                <h3>📋 ¿Qué es una apostilla?</h3>
                <p>La apostilla es una certificación que valida la autenticidad de un documento emitido en un país para ser usado en otro país. Ambos países deben ser parte del Convenio de La Haya.</p>
                <p><strong>Importante:</strong> Cuba SÍ forma parte del Convenio de La Haya desde 2000, por lo que los documentos cubanos pueden apostillarse.</p>
            </div>

            <h3>Documentos cubanos que necesitan apostilla</h3>
            <ul class="documents-list">
                <li><strong>Actas de nacimiento:</strong> Para trámites migratorios, escolares, matrimonio</li>
                <li><strong>Títulos académicos:</strong> Para convalidación de estudios</li>
                <li><strong>Certificados de notas:</strong> Para educación superior</li>
                <li><strong>Actas de matrimonio/divorcio:</strong> Para trámites civiles</li>
                <li><strong>Certificados de antecedentes penales:</strong> Para residencia</li>
                <li><strong>Poderes notariales:</strong> Para gestiones desde RD</li>
            </ul>

            <h3>¿Dónde apostillar documentos cubanos?</h3>
            <div class="process-box">
                <h4>📍 En Cuba (antes de salir)</h4>
                <p><strong>Ministerio de Relaciones Exteriores de Cuba (MINREX)</strong></p>
                <ul>
                    <li><strong>Ubicación:</strong> Calzada #360 entre G y H, Vedado, La Habana</li>
                    <li><strong>Proceso:</strong> Presentar documento original + solicitud</li>
                    <li><strong>Costo:</strong> Variable según documento</li>
                    <li><strong>Tiempo:</strong> 5-15 días hábiles</li>
                </ul>
                <p class="warning"><strong>⚠️ Recomendación crítica:</strong> Apostilla TODOS los documentos importantes antes de salir de Cuba. Es mucho más difícil y costoso hacerlo después.</p>

                <h4>📍 Desde República Dominicana</h4>
                <p><strong>Consulado de Cuba en República Dominicana</strong></p>
                <ul>
                    <li><strong>Ubicación:</strong> C/ Manuel Rodríguez Objío #14, Gazcue, Santo Domingo</li>
                    <li><strong>Teléfono:</strong> 809-537-3915</li>
                    <li><strong>Horario:</strong> Lunes a viernes 9:00 AM - 12:00 PM</li>
                    <li><strong>Proceso:</strong> Solicitar duplicados en Cuba + tramitar apostilla</li>
                    <li><strong>Costo:</strong> Más elevado que hacerlo directamente en Cuba</li>
                    <li><strong>Tiempo:</strong> Variable, puede tomar meses</li>
                </ul>
            </div>

            <h3>Apostillar documentos dominicanos</h3>
            <p><strong>Procuraduría General de la República</strong></p>
            <ul>
                <li><strong>Ubicación:</strong> Av. México esquina Leopoldo Navarro, Santo Domingo</li>
                <li><strong>Teléfono:</strong> 809-533-3522</li>
                <li><strong>Horario:</strong> Lunes a viernes 8:00 AM - 4:00 PM</li>
                <li><strong>Documentos:</strong> Original del documento + cédula</li>
                <li><strong>Costo:</strong> RD$500-1,000 aproximadamente</li>
                <li><strong>Tiempo:</strong> Mismo día o 1-2 días hábiles</li>
            </ul>
        </section>

        <section id="antecedentes-penales" class="content-section">
            <h2>Certificados de antecedentes penales</h2>

            <h3>Antecedentes penales cubanos</h3>
            <div class="process-box">
                <h4>En Cuba</h4>
                <p><strong>Oficina Nacional de Antecedentes Penales (ONAP)</strong></p>
                <ul>
                    <li><strong>Ubicación:</strong> Varias oficinas en provincias cubanas</li>
                    <li><strong>Requisitos:</strong> Carné de identidad, solicitud</li>
                    <li><strong>Tiempo:</strong> 3-5 días hábiles</li>
                    <li><strong>Validez:</strong> 3-6 meses</li>
                </ul>
                <p><strong>⚠️ Importante:</strong> Este documento DEBE ser apostillado para usar en RD</p>

                <h4>Desde RD (vía Consulado cubano)</h4>
                <ul>
                    <li>Solicitar en Consulado de Cuba en Santo Domingo</li>
                    <li>Llenar formulario y entregar documentación</li>
                    <li>Pagar tasas consulares</li>
                    <li>Tiempo de espera: 2-4 meses (puede variar)</li>
                </ul>
            </div>

            <h3>Antecedentes penales dominicanos</h3>
            <p><strong>Procuraduría General de la República</strong></p>
            <div class="step-by-step">
                <ol>
                    <li><strong>Ubicación:</strong> Av. México esq. Leopoldo Navarro, Santo Domingo</li>
                    <li><strong>Requisitos:</strong>
                        <ul>
                            <li>Cédula dominicana o pasaporte</li>
                            <li>Formulario de solicitud (se obtiene allí)</li>
                        </ul>
                    </li>
                    <li><strong>Costo:</strong> Gratuito o bajo costo (RD$100-200)</li>
                    <li><strong>Tiempo:</strong> Entrega inmediata o mismo día</li>
                    <li><strong>Validez:</strong> 3-6 meses según el uso</li>
                </ol>
            </div>

            <div class="info-box">
                <h4>💡 Consejo práctico</h4>
                <p>Si necesitas antecedentes penales dominicanos pero aún no tienes cédula, puedes solicitarlos con tu pasaporte. Sin embargo, para algunos trámites oficiales pueden solicitar que sea con cédula dominicana.</p>
            </div>
        </section>

        <section id="licencia-conducir" class="content-section">
            <h2>Licencia de conducir en República Dominicana</h2>

            <h3>Uso de licencia cubana</h3>
            <p><strong>Según la ley dominicana:</strong></p>
            <ul>
                <li>Puedes usar tu licencia cubana como turista por tiempo limitado</li>
                <li>Si resides en RD, debes obtener licencia dominicana</li>
                <li>Plazo recomendado: dentro de los primeros 3-6 meses</li>
            </ul>

            <h3>Obtener licencia de conducir dominicana</h3>
            <div class="process-box">
                <h4>Proceso en DGII/INTRANT</h4>
                <ol>
                    <li><strong>Requisitos:</strong>
                        <ul>
                            <li>Cédula dominicana o carné de residente</li>
                            <li>Certificado médico (clínicas autorizadas)</li>
                            <li>Certificado de tipo de sangre</li>
                            <li>2 fotos 2x2</li>
                            <li>Licencia cubana (opcional, puede eximir examen práctico)</li>
                        </ul>
                    </li>
                    <li><strong>Examen teórico:</strong>
                        <ul>
                            <li>Prueba de conocimiento de señales y leyes de tránsito</li>
                            <li>Se puede estudiar con manual disponible en INTRANT</li>
                        </ul>
                    </li>
                    <li><strong>Examen práctico:</strong>
                        <ul>
                            <li>Prueba de manejo (puede ser eximida si tienes licencia anterior)</li>
                        </ul>
                    </li>
                    <li><strong>Costo total:</strong> RD$1,500-3,000 (incluye certificados médicos + tasas)</li>
                    <li><strong>Validez:</strong> 4 años renovables</li>
                </ol>
            </div>

            <h3>Centros para tramitar licencia</h3>
            <ul>
                <li><strong>Santo Domingo:</strong> Centro de Servicios INTRANT, múltiples ubicaciones</li>
                <li><strong>Santiago:</strong> Oficinas INTRANT Santiago</li>
                <li><strong>Otras ciudades:</strong> Oficinas regionales INTRANT</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Importante sobre seguro</h4>
                <p>Para conducir legalmente también necesitas seguro de vehículo obligatorio. No es solo recomendación, es requisito legal. Multa por no tenerlo puede ser de RD$5,000-10,000.</p>
            </div>
        </section>

        <section id="cedula-identidad" class="content-section">
            <h2>Cédula de identidad y electoral</h2>

            <h3>¿Quién puede obtener cédula dominicana?</h3>
            <p><strong>Cédula de Identidad y Electoral (para ciudadanos dominicanos):</strong></p>
            <ul>
                <li>Solo para quienes tienen nacionalidad dominicana</li>
                <li>Por nacimiento en RD o naturalización</li>
            </ul>

            <p><strong>Carné de Residente (para extranjeros residentes):</strong></p>
            <ul>
                <li>Emitido por Dirección General de Migración</li>
                <li>Para extranjeros con residencia aprobada</li>
                <li>Equivale a identificación oficial</li>
            </ul>

            <h3>Obtener carné de residente</h3>
            <div class="process-box">
                <p><strong>Requisitos previos:</strong></p>
                <ul>
                    <li>Haber obtenido aprobación de residencia por Migración</li>
                    <li>Completar proceso de regularización migratoria</li>
                </ul>

                <p><strong>Proceso:</strong></p>
                <ol>
                    <li>Acudir a Dirección General de Migración</li>
                    <li>Llevar documentación de residencia aprobada</li>
                    <li>Toma de foto y huellas dactilares</li>
                    <li>Pago de tasas (aprox. RD$3,000-5,000)</li>
                    <li>Esperar emisión (15-30 días)</li>
                </ol>
            </div>

            <h3>Uso del carné de residente</h3>
            <p><strong>Con este documento puedes:</strong></p>
            <ul>
                <li>Identificarte oficialmente</li>
                <li>Trabajar formalmente</li>
                <li>Abrir cuentas bancarias</li>
                <li>Contratar servicios (luz, agua, teléfono)</li>
                <li>Firmar contratos de alquiler</li>
                <li>Afiliarte al seguro de salud</li>
            </ul>
        </section>

        <section id="pasaporte-renovacion" class="content-section">
            <h2>Renovación de pasaporte cubano</h2>

            <h3>Proceso en Consulado de Cuba en RD</h3>
            <div class="process-box">
                <p><strong>Consulado de Cuba en República Dominicana</strong></p>
                <ul>
                    <li><strong>Ubicación:</strong> C/ Manuel Rodríguez Objío #14, Gazcue, Santo Domingo</li>
                    <li><strong>Teléfono:</strong> 809-537-3915</li>
                    <li><strong>Horario de atención:</strong> Lunes a viernes 9:00 AM - 12:00 PM</li>
                </ul>

                <h4>Requisitos:</h4>
                <ul>
                    <li>Pasaporte anterior (vencido o por vencer)</li>
                    <li>2 fotos tipo pasaporte (recientes, fondo blanco)</li>
                    <li>Comprobante de pago de tasas consulares</li>
                    <li>Formulario de solicitud (se obtiene en consulado)</li>
                </ul>

                <h4>Costos (2025):</h4>
                <ul>
                    <li><strong>Renovación normal:</strong> USD $200-250</li>
                    <li><strong>Prórroga (extensión):</strong> USD $80-100</li>
                </ul>

                <h4>Tiempo de espera:</h4>
                <ul>
                    <li>3-6 meses en promedio</li>
                    <li>Puede variar según disponibilidad</li>
                    <li>Es procesado en Cuba y enviado a RD</li>
                </ul>
            </div>

            <h3>Prórroga de pasaporte (extensión)</h3>
            <p><strong>Alternativa más rápida:</strong></p>
            <ul>
                <li>Extensión de vigencia por 2 años adicionales</li>
                <li>Más económica que renovación completa</li>
                <li>Tiempo de espera menor (1-3 meses)</li>
                <li>Útil mientras esperas renovación definitiva</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Planifica con tiempo</h4>
                <p>No esperes a que tu pasaporte esté vencido. Inicia el trámite 6 meses antes del vencimiento para evitar quedarte sin documento válido.</p>
            </div>
        </section>

        <section id="prorroga-estancia" class="content-section">
            <h2>Prórroga de estancia turística</h2>

            <h3>Tarjeta de turista</h3>
            <p><strong>Los cubanos al entrar a RD reciben:</strong></p>
            <ul>
                <li>Tarjeta de turista válida por 30 días</li>
                <li>Puede prorrogarse hasta 120 días adicionales</li>
                <li>Se tramita en Dirección General de Migración</li>
            </ul>

            <h3>Proceso de prórroga</h3>
            <div class="process-box">
                <p><strong>Dirección General de Migración</strong></p>
                <ul>
                    <li><strong>Ubicación:</strong> Av. 30 de Marzo, Santo Domingo (edificio principal)</li>
                    <li><strong>Horario:</strong> Lunes a viernes 8:00 AM - 3:00 PM</li>
                </ul>

                <h4>Requisitos:</h4>
                <ol>
                    <li>Pasaporte vigente</li>
                    <li>Tarjeta de turista original</li>
                    <li>Formulario de solicitud de prórroga</li>
                    <li>Comprobante de solvencia económica (opcional pero recomendado)</li>
                    <li>Boleto de avión de salida (pueden solicitarlo)</li>
                </ol>

                <h4>Costos:</h4>
                <ul>
                    <li><strong>Primera prórroga (30 días):</strong> USD $30-50</li>
                    <li><strong>Prórrogas adicionales:</strong> Similar</li>
                    <li><strong>Hasta:</strong> 120 días total de estancia turística</li>
                </ul>

                <h4>Tiempo:</h4>
                <ul>
                    <li>Mismo día o 1-2 días hábiles</li>
                </ul>
            </div>

            <div class="info-box">
                <h4>💡 Alternativa: Salir y regresar</h4>
                <p>Algunos migrantes optan por viajar brevemente a Haití u otro país cercano y regresar para renovar los 30 días de turista. <strong>Advertencia:</strong> Esto no es una solución permanente y Migración puede cuestionar múltiples entradas/salidas frecuentes.</p>
            </div>

            <h3>¿Qué pasa si se vence tu estancia?</h3>
            <p><strong>Multas por sobre-estadía:</strong></p>
            <ul>
                <li>Multa proporcional a días de sobre-estadía</li>
                <li>Aproximadamente RD$1,000-3,000 por mes vencido</li>
                <li>Debe pagarse al salir del país</li>
                <li>Puede generar antecedentes negativos para futuros ingresos</li>
            </ul>

            <p class="warning"><strong>⚠️ Recomendación:</strong> Si planeas quedarte más de 4 meses, es mejor iniciar proceso de regularización en lugar de prorrogar indefinidamente.</p>
        </section>

        <section id="certificaciones-documentos" class="content-section">
            <h2>Certificaciones y copias de documentos</h2>

            <h3>Notarías públicas</h3>
            <p><strong>Servicios que ofrecen:</strong></p>
            <ul>
                <li>Certificación de copias</li>
                <li>Declaraciones juradas</li>
                <li>Poderes notariales</li>
                <li>Contratos</li>
                <li>Autenticación de firmas</li>
            </ul>

            <p><strong>Costos aproximados:</strong></p>
            <ul>
                <li>Certificación de copia: RD$200-500</li>
                <li>Declaración jurada: RD$500-1,000</li>
                <li>Poder notarial: RD$1,500-3,000</li>
            </ul>

            <h3>Traducción de documentos</h3>
            <p><strong>Cuándo necesitas traducción:</strong></p>
            <ul>
                <li>Documentos en inglés u otro idioma para usar en RD</li>
                <li>Debe ser hecha por traductor oficial certificado</li>
            </ul>

            <p><strong>Cómo encontrar traductor oficial:</strong></p>
            <ul>
                <li>Colegio Dominicano de Traductores e Intérpretes</li>
                <li>Ministerio de Relaciones Exteriores (lista de traductores)</li>
                <li>Costos: RD$500-1,500 por página según complejidad</li>
            </ul>

            <h3>Certificaciones de la JCE</h3>
            <p><strong>Junta Central Electoral (para ciudadanos dominicanos):</strong></p>
            <ul>
                <li>Actas de nacimiento certificadas</li>
                <li>Actas de matrimonio</li>
                <li>Declaraciones juradas de nombres</li>
            </ul>
        </section>

        <section id="errores-evitar" class="content-section">
            <h2>Errores comunes que debes evitar</h2>

            <div class="errors-list">
                <div class="error-card">
                    <h3>❌ Error #1: No apostillar documentos antes de salir de Cuba</h3>
                    <p><strong>Consecuencia:</strong> Proceso mucho más costoso y lento desde RD</p>
                    <p><strong>Solución:</strong> Apostilla acta de nacimiento, títulos académicos y certificados antes de viajar</p>
                </div>

                <div class="error-card">
                    <h3>❌ Error #2: Dejar vencer el pasaporte sin iniciar renovación</h3>
                    <p><strong>Consecuencia:</strong> Quedarse sin documento de identidad válido durante meses</p>
                    <p><strong>Solución:</strong> Iniciar trámite 6 meses antes del vencimiento</p>
                </div>

                <div class="error-card">
                    <h3>❌ Error #3: No tramitar prórroga de turista a tiempo</h3>
                    <p><strong>Consecuencia:</strong> Multas por sobre-estadía, problemas con Migración</p>
                    <p><strong>Solución:</strong> Prorrogar antes de que venzan los 30 días iniciales</p>
                </div>

                <div class="error-card">
                    <h3>❌ Error #4: Pagar a "gestores" sin verificar</h3>
                    <p><strong>Consecuencia:</strong> Estafas, pérdida de dinero, documentos falsos</p>
                    <p><strong>Solución:</strong> Usa solo abogados certificados o ve personalmente a oficinas oficiales</p>
                </div>

                <div class="error-card">
                    <h3>❌ Error #5: No guardar copias de documentos</h3>
                    <p><strong>Consecuencia:</strong> Pérdida total de documentación en caso de robo o extravío</p>
                    <p><strong>Solución:</strong> Mantén copias digitales (fotos, PDF) en email y nube</p>
                </div>

                <div class="error-card">
                    <h3>❌ Error #6: No verificar requisitos actualizados</h3>
                    <p><strong>Consecuencia:</strong> Viajes innecesarios, rechazos de trámites</p>
                    <p><strong>Solución:</strong> Llama antes de ir, verifica en grupos de cubanos experiencias recientes</p>
                </div>
            </div>

            <h3>Consejos finales para trámites exitosos</h3>
            <ul class="tips-list">
                <li>Siempre llega temprano a oficinas gubernamentales (formarse desde las 6-7 AM)</li>
                <li>Lleva más documentos de los que piden "por si acaso"</li>
                <li>Ten efectivo (muchas oficinas no aceptan tarjetas)</li>
                <li>Sé paciente - los trámites en RD suelen tomar tiempo</li>
                <li>Pregunta en grupos de cubanos sobre experiencias recientes</li>
                <li>Guarda todos los recibos y comprobantes</li>
                <li>Toma fotos de todos tus documentos importantes</li>
            </ul>
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
                    <p>Proceso completo de regularización paso a paso</p>
                </a>
                <a href="/comunidades-apoyo-rd.php" class="related-card">
                    <h3>🤝 Comunidades y Redes de Apoyo</h3>
                    <p>Conecta con organizaciones y grupos de ayuda</p>
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