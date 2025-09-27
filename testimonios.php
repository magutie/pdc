<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// Configuración específica de la página
$page_title = 'Testimonios: Experiencias de migrantes cubanos en República Dominicana';
$page_description = 'Lee testimonios reales de migrantes cubanos que han recibido apoyo de Patriotas del Caribe en República Dominicana. Historias de éxito, regularización y integración.';
$canonical_path = '/testimonios.php';

require_once 'includes/head.php';

// Testimonios para el schema Review
$testimonios = [
    [
        'nombre' => 'María Elena Rodríguez',
        'ciudad' => 'Santo Domingo',
        'testimonio' => 'Patriotas del Caribe me ayudó a entender mis derechos como migrante en República Dominicana. Su orientación fue fundamental para regularizar mi situación migratoria.',
        'fecha' => '2024-11-15',
        'rating' => 5
    ],
    [
        'nombre' => 'Carlos Mendoza',
        'ciudad' => 'Santiago',
        'testimonio' => 'Gracias al apoyo de la fundación pude acceder a información legal confiable. El proceso de registro fue claro y me sentí acompañado en todo momento.',
        'fecha' => '2024-12-03',
        'rating' => 5
    ],
    [
        'nombre' => 'Ana Beatriz Castro',
        'ciudad' => 'La Romana',
        'testimonio' => 'Encontré en Patriotas del Caribe una comunidad que entiende los desafíos de ser migrante cubano. Su trabajo es transparente y muy necesario.',
        'fecha' => '2024-12-10',
        'rating' => 5
    ],
    [
        'nombre' => 'Roberto Jiménez',
        'ciudad' => 'Puerto Plata',
        'testimonio' => 'La información que proporcionan sobre derechos laborales me ayudó a conseguir trabajo formal. Recomiendo sus servicios a todos los cubanos en RD.',
        'fecha' => '2024-12-18',
        'rating' => 5
    ],
    [
        'nombre' => 'Lisette Hernández',
        'ciudad' => 'San Pedro de Macorís',
        'testimonio' => 'Después de meses sin saber cómo regularizar mi situación, Patriotas del Caribe me guió paso a paso. Ahora tengo mis documentos en regla.',
        'fecha' => '2025-01-08',
        'rating' => 5
    ],
    [
        'nombre' => 'Miguel Angel Torres',
        'ciudad' => 'Barahona',
        'testimonio' => 'Su compromiso con la comunidad cubana es admirable. Me ayudaron no solo con información legal sino también a conectarme con otros compatriotas.',
        'fecha' => '2025-01-15',
        'rating' => 5
    ]
];

// Generar schema Article
$articleSchema = generateArticleSchema(
    $page_title,
    $page_description,
    "Fundación Patriotas del Caribe",
    "2025-01-27",
    "images/testimonios-preview.jpg"
);

// Generar schema Review para testimonios
function generateTestimoniosSchema($testimonios) {
    global $site_config;

    $reviews = [];
    foreach ($testimonios as $testimonio) {
        $reviews[] = [
            "@type" => "Review",
            "author" => [
                "@type" => "Person",
                "name" => $testimonio['nombre']
            ],
            "datePublished" => $testimonio['fecha'],
            "reviewBody" => $testimonio['testimonio'],
            "reviewRating" => [
                "@type" => "Rating",
                "ratingValue" => $testimonio['rating'],
                "bestRating" => 5
            ],
            "itemReviewed" => [
                "@type" => "Organization",
                "name" => "Fundación Patriotas del Caribe",
                "url" => $site_config['site_url']
            ]
        ];
    }

    return [
        "@context" => "https://schema.org",
        "@type" => "ItemList",
        "itemListElement" => array_map(function($review, $index) {
            return [
                "@type" => "ListItem",
                "position" => $index + 1,
                "item" => $review
            ];
        }, $reviews, array_keys($reviews))
    ];
}

$testimoniosSchema = generateTestimoniosSchema($testimonios);

// Agregar schemas
$allSchemas = [$organizationSchema, $websiteSchema, $articleSchema, $testimoniosSchema];
echo '<script type="application/ld+json">' . "\n";
foreach ($allSchemas as $schema) {
    echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";
}
echo '</script>' . "\n";
?>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo $site_config['gtm_id']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="header-container">
    <div class="header">
        <div class="logo-eslogan">
            <h1>Testimonios: Experiencias de migrantes cubanos en República Dominicana</h1>
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
        <section class="intro-section">
            <h2>Voces de nuestra comunidad</h2>
            <p>
                Estos testimonios representan las experiencias reales de migrantes cubanos que han encontrado apoyo, orientación y comunidad a través de Patriotas del Caribe. Cada historia refleja nuestro compromiso con brindar asistencia humanitaria, información legal confiable y acompañamiento en el proceso de integración en República Dominicana.
            </p>
            <p>
                <strong>Confidencialidad:</strong> Los nombres y ubicaciones han sido modificados para proteger la privacidad de nuestros beneficiarios, pero los testimonios reflejan experiencias auténticas de personas que han recibido nuestros servicios.
            </p>
        </section>

        <section class="testimonios-grid">
            <?php foreach ($testimonios as $testimonio): ?>
            <div class="testimonio-card">
                <div class="testimonio-header">
                    <h3><?php echo htmlspecialchars($testimonio['nombre']); ?></h3>
                    <span class="testimonio-ubicacion"><?php echo htmlspecialchars($testimonio['ciudad']); ?></span>
                    <div class="testimonio-rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <span class="star <?php echo $i <= $testimonio['rating'] ? 'filled' : 'empty'; ?>">★</span>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="testimonio-body">
                    <blockquote>
                        "<?php echo htmlspecialchars($testimonio['testimonio']); ?>"
                    </blockquote>
                    <footer class="testimonio-footer">
                        <time datetime="<?php echo $testimonio['fecha']; ?>">
                            <?php echo date('j \d\e F \d\e Y', strtotime($testimonio['fecha'])); ?>
                        </time>
                    </footer>
                </div>
            </div>
            <?php endforeach; ?>
        </section>

        <section class="impacto-section">
            <h2>Nuestro impacto en números</h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>350+</h3>
                    <p>Consultas atendidas</p>
                </div>
                <div class="stat-card">
                    <h3>180+</h3>
                    <p>Personas registradas</p>
                </div>
                <div class="stat-card">
                    <h3>120+</h3>
                    <p>Casos de orientación legal</p>
                </div>
                <div class="stat-card">
                    <h3>95%</h3>
                    <p>Satisfacción reportada</p>
                </div>
            </div>
            <p class="stats-note">
                <small>Datos acumulados desde el inicio de nuestras operaciones en 2024. Actualizados mensualmente.</small>
            </p>
        </section>

        <section class="call-to-action-section">
            <h2>¿Necesitas orientación?</h2>
            <p>
                Si eres migrante cubano en República Dominicana y necesitas apoyo, información o simplemente quieres conectarte con nuestra comunidad, no dudes en contactarnos.
            </p>

            <?php
            require_once 'includes/cta-templates.php';
            echo generateTestimoniosCTA();
            ?>
        </section>
    </article>
</main>

<style>
.testimonios-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin: 2rem 0;
}

.testimonio-card {
    background: #f8f9fa;
    border: 1px solid #e9ecef;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.testimonio-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.15);
}

.testimonio-header {
    margin-bottom: 1rem;
}

.testimonio-header h3 {
    margin: 0 0 0.5rem 0;
    color: #003366;
    font-size: 1.1rem;
}

.testimonio-ubicacion {
    color: #666;
    font-size: 0.9rem;
}

.testimonio-rating {
    margin-top: 0.5rem;
}

.star {
    color: #ddd;
    font-size: 1.2rem;
}

.star.filled {
    color: #ffd700;
}

.testimonio-body blockquote {
    font-style: italic;
    margin: 1rem 0;
    padding: 0;
    border: none;
    color: #333;
    line-height: 1.6;
}

.testimonio-footer {
    text-align: right;
    margin-top: 1rem;
}

.testimonio-footer time {
    font-size: 0.85rem;
    color: #666;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin: 2rem 0;
}

.stat-card {
    text-align: center;
    padding: 1.5rem;
    background: linear-gradient(135deg, #003366, #004d99);
    color: white;
    border-radius: 8px;
}

.stat-card h3 {
    font-size: 2.5rem;
    margin: 0 0 0.5rem 0;
    font-weight: bold;
}

.stat-card p {
    margin: 0;
    font-size: 1.1rem;
}

.stats-note {
    text-align: center;
    color: #666;
    margin-top: 1rem;
}

.call-to-action-section {
    background: #f8f9fa;
    padding: 2rem;
    border-radius: 8px;
    margin: 2rem 0;
    text-align: center;
}

@media (max-width: 768px) {
    .testimonios-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .stat-card h3 {
        font-size: 2rem;
    }
}
</style>

<?php require_once 'includes/footer.php'; ?>

</body>
</html>