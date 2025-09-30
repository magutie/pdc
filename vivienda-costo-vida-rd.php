<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Vivienda y Costo de Vida en República Dominicana para Migrantes Cubanos';
$page_description = 'Guía completa sobre alquiler de vivienda, costo de vida y presupuesto para migrantes cubanos en Santo Domingo, Santiago y otras ciudades de RD.';
$canonical_path = '/vivienda-costo-vida-rd.php';

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
    ['name' => 'Vivienda y Costo de Vida', 'url' => '/vivienda-costo-vida-rd.php']
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
            <h1>Vivienda y Costo de Vida en República Dominicana</h1>
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
            <span>Vivienda y Costo de Vida</span>
        </nav>

        <section class="intro-section">
            <p class="lead">
                Encontrar vivienda adecuada y entender el costo de vida son aspectos fundamentales para establecerte exitosamente en República Dominicana. Esta guía te ayudará a tomar decisiones informadas sobre dónde vivir, cuánto presupuestar y cómo gestionar tus gastos.
            </p>
        </section>

        <section class="table-contents">
            <h2>Contenido de esta guía</h2>
            <ul>
                <li><a href="#mercado-alquiler">Mercado de alquiler en RD</a></li>
                <li><a href="#ciudades-comparacion">Santo Domingo vs Santiago: Comparación</a></li>
                <li><a href="#buscar-vivienda">Cómo buscar vivienda</a></li>
                <li><a href="#contrato-alquiler">Contratos de alquiler y derechos</a></li>
                <li><a href="#costo-vida">Costo de vida mensual</a></li>
                <li><a href="#servicios-basicos">Servicios básicos y utilidades</a></li>
                <li><a href="#transporte">Transporte y movilidad</a></li>
                <li><a href="#consejos-ahorro">Consejos para ahorrar dinero</a></li>
            </ul>
        </section>

        <section id="mercado-alquiler" class="content-section">
            <h2>Mercado de alquiler de vivienda en República Dominicana</h2>

            <div class="highlight-box">
                <h3>🏠 Tipos de vivienda disponibles</h3>
                <ul>
                    <li><strong>Apartamentos:</strong> Desde estudios hasta 3+ habitaciones</li>
                    <li><strong>Casas:</strong> Individuales o en residenciales cerrados</li>
                    <li><strong>Habitaciones compartidas:</strong> Opción económica inicial</li>
                    <li><strong>Pensiones:</strong> Habitaciones con servicios básicos incluidos</li>
                </ul>
            </div>

            <h3>Factores que afectan el precio</h3>
            <ul class="factors-list">
                <li><strong>Ubicación:</strong> Zona residencial, proximidad al centro, seguridad</li>
                <li><strong>Tamaño:</strong> Número de habitaciones y metros cuadrados</li>
                <li><strong>Amenidades:</strong> Piscina, gimnasio, seguridad 24h, parqueo</li>
                <li><strong>Condición:</strong> Apartamento nuevo vs usado, con o sin muebles</li>
                <li><strong>Servicios incluidos:</strong> Agua, luz, internet, mantenimiento</li>
            </ul>

            <div class="warning-box">
                <h4>⚠️ Realidad del mercado</h4>
                <p>Los precios de alquiler han aumentado significativamente en los últimos años, especialmente en Santo Domingo. Es importante tener expectativas realistas y considerar zonas más económicas al inicio.</p>
            </div>
        </section>

        <section id="ciudades-comparacion" class="content-section">
            <h2>Comparación: Santo Domingo vs Santiago</h2>

            <h3>Santo Domingo (Capital - Distrito Nacional)</h3>

            <div class="city-profile">
                <h4>✅ Ventajas</h4>
                <ul>
                    <li>Mayor oferta laboral y oportunidades de negocio</li>
                    <li>Mejor infraestructura de salud y educación</li>
                    <li>Más servicios y comercio</li>
                    <li>Transporte público más desarrollado (Metro)</li>
                    <li>Mayor comunidad cubana establecida</li>
                </ul>

                <h4>❌ Desventajas</h4>
                <ul>
                    <li>Costo de vida más alto</li>
                    <li>Tráfico intenso y tiempos de traslado largos</li>
                    <li>Alquileres más caros</li>
                    <li>Mayor competencia laboral</li>
                    <li>Ritmo de vida más acelerado</li>
                </ul>

                <h4>💰 Precios promedio de alquiler (2025)</h4>
                <table class="price-table">
                    <tr>
                        <th>Tipo de vivienda</th>
                        <th>Zona popular</th>
                        <th>Zona media</th>
                        <th>Zona alta</th>
                    </tr>
                    <tr>
                        <td>Habitación individual</td>
                        <td>RD$3,000-6,000</td>
                        <td>RD$6,000-10,000</td>
                        <td>RD$10,000-15,000</td>
                    </tr>
                    <tr>
                        <td>Estudio/1 habitación</td>
                        <td>RD$8,000-12,000</td>
                        <td>RD$12,000-20,000</td>
                        <td>RD$20,000-35,000</td>
                    </tr>
                    <tr>
                        <td>2 habitaciones</td>
                        <td>RD$12,000-18,000</td>
                        <td>RD$18,000-28,000</td>
                        <td>RD$28,000-50,000+</td>
                    </tr>
                    <tr>
                        <td>3 habitaciones</td>
                        <td>RD$18,000-25,000</td>
                        <td>RD$25,000-40,000</td>
                        <td>RD$40,000-80,000+</td>
                    </tr>
                </table>

                <p class="note"><strong>Zonas populares:</strong> Los Mina, Villa Mella, Cristo Rey, Capotillo, Gualey</p>
                <p class="note"><strong>Zonas medias:</strong> Naco, Gazcue, Bella Vista, Los Prados</p>
                <p class="note"><strong>Zonas altas:</strong> Piantini, Evaristo Morales, Serralles, Paraíso</p>
            </div>

            <h3>Santiago de los Caballeros (Segunda ciudad)</h3>

            <div class="city-profile">
                <h4>✅ Ventajas</h4>
                <ul>
                    <li>Costo de vida 20-30% más bajo que Santo Domingo</li>
                    <li>Menos tráfico y mejor calidad de vida</li>
                    <li>Ciudad más tranquila y ordenada</li>
                    <li>Buena oferta de empleo en zonas francas</li>
                    <li>Clima más fresco por la altura</li>
                </ul>

                <h4>❌ Desventajas</h4>
                <ul>
                    <li>Menos oportunidades laborales que la capital</li>
                    <li>Menor infraestructura de salud especializada</li>
                    <li>Comunidad cubana más pequeña</li>
                    <li>Menos opciones de entretenimiento</li>
                </ul>

                <h4>💰 Precios promedio de alquiler (2025)</h4>
                <table class="price-table">
                    <tr>
                        <th>Tipo de vivienda</th>
                        <th>Zona popular</th>
                        <th>Zona media</th>
                    </tr>
                    <tr>
                        <td>Habitación individual</td>
                        <td>RD$2,500-5,000</td>
                        <td>RD$5,000-8,000</td>
                    </tr>
                    <tr>
                        <td>Estudio/1 habitación</td>
                        <td>RD$6,000-10,000</td>
                        <td>RD$10,000-15,000</td>
                    </tr>
                    <tr>
                        <td>2 habitaciones</td>
                        <td>RD$10,000-15,000</td>
                        <td>RD$15,000-22,000</td>
                    </tr>
                    <tr>
                        <td>3 habitaciones</td>
                        <td>RD$15,000-20,000</td>
                        <td>RD$20,000-30,000</td>
                    </tr>
                </table>
            </div>

            <h3>Otras ciudades importantes</h3>
            <ul>
                <li><strong>La Romana:</strong> Similar a Santiago, opciones turísticas</li>
                <li><strong>Puerto Plata:</strong> Costa norte, enfoque turístico, precios moderados</li>
                <li><strong>San Cristóbal:</strong> Cercana a Santo Domingo, más económica</li>
                <li><strong>Moca, San Francisco de Macorís:</strong> Opciones muy económicas, menos servicios</li>
            </ul>
        </section>

        <section id="buscar-vivienda" class="content-section">
            <h2>Cómo buscar vivienda efectivamente</h2>

            <h3>Plataformas online recomendadas</h3>
            <ul class="platform-list">
                <li><strong>Corotos.com.do:</strong> Mayor sitio de clasificados en RD</li>
                <li><strong>SuperCasas.com:</strong> Especializado en bienes raíces</li>
                <li><strong>Facebook Marketplace:</strong> Muchas ofertas directas de propietarios</li>
                <li><strong>Grupos de Facebook:</strong> "Alquileres en Santo Domingo", "Cubanos en RD"</li>
                <li><strong>WhatsApp:</strong> Grupos comunitarios de cubanos</li>
            </ul>

            <h3>Métodos tradicionales efectivos</h3>
            <ul>
                <li><strong>Recorrer zonas de interés:</strong> Busca letreros "Se Alquila"</li>
                <li><strong>Boca a boca:</strong> Pregunta en la comunidad cubana</li>
                <li><strong>Inmobiliarias locales:</strong> Cobran comisión pero ofrecen opciones verificadas</li>
                <li><strong>Colmados y negocios locales:</strong> Suelen conocer opciones en el barrio</li>
            </ul>

            <h3>Qué verificar antes de alquilar</h3>
            <div class="checklist-box">
                <h4>✓ Checklist de visita</h4>
                <ul>
                    <li>Estado general del inmueble (paredes, techos, pisos)</li>
                    <li>Funcionamiento de plomería y electricidad</li>
                    <li>Ventilación y luz natural</li>
                    <li>Seguridad de puertas y ventanas</li>
                    <li>Condiciones del barrio (seguridad, limpieza, ruido)</li>
                    <li>Proximidad a transporte público</li>
                    <li>Acceso a colmados, farmacias y servicios</li>
                    <li>Costos adicionales (mantenimiento, parqueo)</li>
                </ul>
            </div>

            <div class="warning-box">
                <h4>🚨 Señales de alerta (evita estafas)</h4>
                <ul>
                    <li>Solicitan pago completo por adelantado antes de ver el lugar</li>
                    <li>Precios extremadamente bajos "demasiado buenos para ser verdad"</li>
                    <li>Negativa a mostrar documentos de propiedad</li>
                    <li>Presión para firmar inmediatamente</li>
                    <li>Solo comunicación por WhatsApp, no quieren reunirse</li>
                </ul>
            </div>
        </section>

        <section id="contrato-alquiler" class="content-section">
            <h2>Contratos de alquiler y derechos del inquilino</h2>

            <h3>Elementos de un contrato de alquiler</h3>
            <p><strong>Todo contrato debe incluir:</strong></p>
            <ul>
                <li>Datos completos del propietario y del inquilino</li>
                <li>Descripción del inmueble y dirección exacta</li>
                <li>Monto del alquiler y forma de pago</li>
                <li>Duración del contrato (usual: 1 año renovable)</li>
                <li>Monto y condiciones del depósito</li>
                <li>Responsabilidades de cada parte</li>
                <li>Condiciones de renovación y terminación</li>
                <li>Cláusula de aumento de renta</li>
            </ul>

            <h3>Depósito y pagos iniciales</h3>
            <p><strong>Gastos típicos al firmar contrato:</strong></p>
            <ul>
                <li><strong>Primer mes:</strong> Alquiler completo</li>
                <li><strong>Depósito (garantía):</strong> 1-2 meses de alquiler (reembolsable)</li>
                <li><strong>Último mes:</strong> A veces se solicita (opcional)</li>
                <li><strong>Total inicial:</strong> 2-4 meses de alquiler</li>
            </ul>

            <h3>Derechos del inquilino</h3>
            <ul class="rights-list">
                <li><strong>Privacidad:</strong> El propietario debe avisar antes de visitar</li>
                <li><strong>Reparaciones:</strong> El propietario debe mantener el inmueble habitable</li>
                <li><strong>Devolución de depósito:</strong> Al terminar contrato, si no hay daños</li>
                <li><strong>Aviso previo:</strong> Mínimo 30 días antes de desalojo</li>
                <li><strong>Recibos:</strong> Derecho a recibo por cada pago realizado</li>
            </ul>

            <div class="info-box">
                <h4>💡 Consejo importante</h4>
                <p>Aunque seas migrante, tienes los mismos derechos que cualquier inquilino dominicano. Si el propietario se niega a dar contrato escrito, es señal de alerta. Un contrato te protege legalmente.</p>
            </div>
        </section>

        <section id="costo-vida" class="content-section">
            <h2>Presupuesto mensual: Costo de vida en RD</h2>

            <h3>Presupuesto básico para una persona (Santo Domingo)</h3>
            <table class="budget-table">
                <tr>
                    <th>Categoría</th>
                    <th>Mínimo</th>
                    <th>Medio</th>
                    <th>Cómodo</th>
                </tr>
                <tr>
                    <td><strong>Alquiler</strong> (habitación/estudio)</td>
                    <td>RD$6,000</td>
                    <td>RD$12,000</td>
                    <td>RD$20,000</td>
                </tr>
                <tr>
                    <td><strong>Alimentación</strong></td>
                    <td>RD$8,000</td>
                    <td>RD$12,000</td>
                    <td>RD$18,000</td>
                </tr>
                <tr>
                    <td><strong>Transporte</strong></td>
                    <td>RD$2,000</td>
                    <td>RD$4,000</td>
                    <td>RD$8,000</td>
                </tr>
                <tr>
                    <td><strong>Servicios</strong> (luz, agua, gas)</td>
                    <td>RD$2,500</td>
                    <td>RD$4,000</td>
                    <td>RD$6,000</td>
                </tr>
                <tr>
                    <td><strong>Internet/Teléfono</strong></td>
                    <td>RD$1,000</td>
                    <td>RD$1,500</td>
                    <td>RD$2,500</td>
                </tr>
                <tr>
                    <td><strong>Gastos personales</strong></td>
                    <td>RD$2,000</td>
                    <td>RD$4,000</td>
                    <td>RD$6,000</td>
                </tr>
                <tr class="total-row">
                    <td><strong>TOTAL MENSUAL</strong></td>
                    <td><strong>RD$21,500</strong></td>
                    <td><strong>RD$37,500</strong></td>
                    <td><strong>RD$60,500</strong></td>
                </tr>
            </table>

            <h3>Presupuesto para familia (2 adultos + 2 niños)</h3>
            <table class="budget-table">
                <tr>
                    <th>Categoría</th>
                    <th>Mínimo</th>
                    <th>Medio</th>
                </tr>
                <tr>
                    <td><strong>Alquiler</strong> (2-3 habitaciones)</td>
                    <td>RD$15,000</td>
                    <td>RD$25,000</td>
                </tr>
                <tr>
                    <td><strong>Alimentación</strong></td>
                    <td>RD$18,000</td>
                    <td>RD$28,000</td>
                </tr>
                <tr>
                    <td><strong>Educación</strong> (pública/privada)</td>
                    <td>RD$2,000</td>
                    <td>RD$8,000</td>
                </tr>
                <tr>
                    <td><strong>Transporte</strong></td>
                    <td>RD$4,000</td>
                    <td>RD$8,000</td>
                </tr>
                <tr>
                    <td><strong>Servicios básicos</strong></td>
                    <td>RD$5,000</td>
                    <td>RD$8,000</td>
                </tr>
                <tr>
                    <td><strong>Internet/Teléfono</strong></td>
                    <td>RD$1,500</td>
                    <td>RD$2,500</td>
                </tr>
                <tr>
                    <td><strong>Gastos médicos</strong></td>
                    <td>RD$2,000</td>
                    <td>RD$4,000</td>
                </tr>
                <tr>
                    <td><strong>Otros gastos</strong></td>
                    <td>RD$3,000</td>
                    <td>RD$5,000</td>
                </tr>
                <tr class="total-row">
                    <td><strong>TOTAL MENSUAL</strong></td>
                    <td><strong>RD$50,500</strong></td>
                    <td><strong>RD$88,500</strong></td>
                </tr>
            </table>

            <p class="note"><em>Nota: Estos son promedios. En Santiago, reduce aproximadamente 25% estos montos.</em></p>
        </section>

        <section id="servicios-basicos" class="content-section">
            <h2>Servicios básicos y utilidades</h2>

            <h3>Electricidad (EDEESTE, EDENORTE, EDESUR)</h3>
            <ul>
                <li><strong>Costo promedio:</strong> RD$1,500-4,000 mensuales</li>
                <li><strong>Apagones:</strong> Comunes en algunas zonas</li>
                <li><strong>Inversores:</strong> Necesarios en áreas con cortes frecuentes (RD$15,000-40,000)</li>
                <li><strong>Registro:</strong> Requiere contrato de alquiler y cédula/pasaporte</li>
            </ul>

            <h3>Agua (CAASD, CORAASAN)</h3>
            <ul>
                <li><strong>Costo:</strong> RD$500-1,500 mensuales</li>
                <li><strong>Servicio:</strong> Variable según zona</li>
                <li><strong>Tanques/cisternas:</strong> Necesarios en muchas áreas</li>
                <li><strong>Agua embotellada:</strong> RD$100-150 por botellón de 5 galones</li>
            </ul>

            <h3>Gas propano (cocina)</h3>
            <ul>
                <li><strong>Tanque de 25 lbs:</strong> RD$500-700 (dura ~1 mes para 2 personas)</li>
                <li><strong>Tanque de 100 lbs:</strong> RD$2,000-2,500 (uso más prolongado)</li>
            </ul>

            <h3>Internet y televisión</h3>
            <p><strong>Proveedores principales:</strong></p>
            <ul>
                <li><strong>Claro:</strong> Planes desde RD$1,000/mes (internet básico)</li>
                <li><strong>Altice:</strong> Combos internet + TV desde RD$1,500/mes</li>
                <li><strong>Viva:</strong> Ofertas competitivas en algunas zonas</li>
                <li><strong>Internet móvil:</strong> RD$500-1,500/mes según GB</li>
            </ul>

            <h3>Teléfono móvil</h3>
            <ul>
                <li><strong>Prepago:</strong> RD$50-200 semanal según uso</li>
                <li><strong>Pospago:</strong> Planes desde RD$600/mes</li>
                <li><strong>Proveedores:</strong> Claro, Altice, Viva</li>
            </ul>
        </section>

        <section id="transporte" class="content-section">
            <h2>Transporte y movilidad</h2>

            <h3>Transporte público en Santo Domingo</h3>
            <ul>
                <li><strong>Metro:</strong> RD$30-40 por viaje (Líneas 1 y 2)</li>
                <li><strong>Guaguas (autobuses):</strong> RD$25-50 según ruta</li>
                <li><strong>Carros públicos:</strong> RD$25-60 (compartidos)</li>
                <li><strong>Motoconcho:</strong> RD$50-150 (cortas distancias)</li>
                <li><strong>Uber/Cabify:</strong> Variable, más caro pero seguro</li>
            </ul>

            <h3>Transporte en Santiago</h3>
            <ul>
                <li><strong>Carros públicos:</strong> Principal medio, RD$25-50</li>
                <li><strong>Motoconcho:</strong> Muy común, RD$30-100</li>
                <li><strong>Taxis:</strong> Más costoso, negociar tarifa</li>
            </ul>

            <h3>Comprar o alquilar vehículo</h3>
            <p><strong>Consideraciones:</strong></p>
            <ul>
                <li><strong>Motor:</strong> Opción económica, RD$50,000-150,000 usado</li>
                <li><strong>Carro usado:</strong> Desde RD$300,000 en adelante</li>
                <li><strong>Seguro:</strong> RD$1,500-5,000 mensuales</li>
                <li><strong>Gasolina:</strong> ~RD$290/galón (2025)</li>
                <li><strong>Licencia dominicana:</strong> Necesaria después de periodo inicial</li>
            </ul>
        </section>

        <section id="consejos-ahorro" class="content-section">
            <h2>Consejos prácticos para ahorrar dinero</h2>

            <h3>Alimentación</h3>
            <ul class="tips-list">
                <li>Compra en mercados públicos (más barato que supermercados)</li>
                <li>Cocina en casa (comer fuera es 3-4x más caro)</li>
                <li>Aprovecha ofertas de colmados locales</li>
                <li>Compra productos de temporada</li>
                <li>Considera compras al mayor con otros cubanos</li>
            </ul>

            <h3>Vivienda</h3>
            <ul class="tips-list">
                <li>Busca zonas populares seguras (no siempre lo caro es mejor)</li>
                <li>Comparte apartamento al inicio (divide gastos)</li>
                <li>Negocia el precio del alquiler (especialmente contratos largos)</li>
                <li>Busca lugares con algunos servicios incluidos</li>
                <li>Considera vivir lejos del centro (más barato, usa transporte)</li>
            </ul>

            <h3>Servicios</h3>
            <ul class="tips-list">
                <li>Usa aire acondicionado con moderación (consume mucha luz)</li>
                <li>Ventiladores consumen menos electricidad</li>
                <li>Apaga aparatos que no uses</li>
                <li>Considera planes prepago de teléfono (más control)</li>
                <li>Comparte internet con vecinos (divide costo)</li>
            </ul>

            <h3>Transporte</h3>
            <ul class="tips-list">
                <li>Usa transporte público siempre que sea posible</li>
                <li>Camina distancias cortas</li>
                <li>Uber/Cabify solo cuando sea realmente necesario</li>
                <li>Comparte viajes con compañeros de trabajo</li>
                <li>Evalúa bien antes de comprar vehículo (gastos ocultos)</li>
            </ul>

            <div class="info-box">
                <h4>💡 Mentalidad de ahorro</h4>
                <p>Los primeros 6 meses son los más difíciles. Prioriza establecerte económicamente antes de gastos innecesarios. La comunidad cubana suele ayudarse mutuamente - no dudes en pedir orientación.</p>
            </div>
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
                <a href="/salud-educacion-migrantes.php" class="related-card">
                    <h3>🏥 Salud y Educación</h3>
                    <p>Acceso a servicios de salud y educación en RD</p>
                </a>
            </div>
        </section>

        <?php require_once 'includes/cta-templates.php'; includeCTA('registro'); ?>

    </article>
</main>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>