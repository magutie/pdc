<?php
// Datos estructurados JSON-LD para SEO
require_once 'config.php';

// Schema Organization/Nonprofit
$organizationSchema = [
    "@context" => "https://schema.org",
    "@type" => "NonprofitOrganization",
    "name" => "Fundación Patriotas del Caribe",
    "alternateName" => "Patriotas del Caribe",
    "url" => $site_config['site_url'],
    "logo" => $site_config['site_url'] . "/images/logo.png",
    "description" => "ONG binacional que apoya a migrantes cubanos en República Dominicana mediante asesoría legal, educación cívica y activismo humanitario.",
    "foundingDate" => "2024",
    "areaServed" => [
        [
            "@type" => "Country",
            "name" => "República Dominicana"
        ],
        [
            "@type" => "Country", 
            "name" => "Cuba"
        ],
        [
            "@type" => "Place",
            "name" => "Caribe"
        ]
    ],
    "sameAs" => [
        "https://www.facebook.com/groups/1672337816821354",
        "https://www.instagram.com/patriotasdelcaribe",
        "https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV"
    ],
    "address" => [
        "@type" => "PostalAddress",
        "addressCountry" => "DO"
    ],
    "contactPoint" => [
        "@type" => "ContactPoint",
        "email" => "contacto@patriotasdelcaribe.com",
        "contactType" => "customer service",
        "availableLanguage" => ["Spanish", "Spanish"]
    ]
];

// Schema WebSite con SearchAction
$websiteSchema = [
    "@context" => "https://schema.org",
    "@type" => "WebSite",
    "name" => "Patriotas del Caribe",
    "url" => $site_config['site_url'],
    "description" => "Sitio web oficial de la Fundación Patriotas del Caribe - Apoyo a migrantes cubanos en República Dominicana",
    "inLanguage" => "es-DO",
    "potentialAction" => [
        "@type" => "SearchAction",
        "target" => [
            "@type" => "EntryPoint",
            "urlTemplate" => $site_config['site_url'] . "/?q={search_term_string}"
        ],
        "query-input" => "required name=search_term_string"
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Fundación Patriotas del Caribe",
        "logo" => [
            "@type" => "ImageObject",
            "url" => $site_config['site_url'] . "/images/logo.png"
        ]
    ]
];

// Schema SiteNavigationElement
$navigationSchema = [
    "@context" => "https://schema.org",
    "@type" => "SiteNavigationElement",
    "name" => "Navegación Principal",
    "url" => $site_config['site_url'],
    "hasPart" => [
        [
            "@type" => "SiteNavigationElement",
            "name" => "Inicio",
            "url" => $site_config['site_url'] . "/"
        ],
        [
            "@type" => "SiteNavigationElement", 
            "name" => "Registro",
            "url" => $site_config['site_url'] . "/#formulario"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "Historia",
            "url" => $site_config['site_url'] . "/historia.php"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "Valores",
            "url" => $site_config['site_url'] . "/valores.php"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "Misión",
            "url" => $site_config['site_url'] . "/mision_patriotica.php"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "Sobre Cuba",
            "url" => $site_config['site_url'] . "/sobre_cuba.php"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "FAQ",
            "url" => $site_config['site_url'] . "/faq.php"
        ],
        [
            "@type" => "SiteNavigationElement",
            "name" => "Plan de Trabajo",
            "url" => $site_config['site_url'] . "/plan_trabajo.php"
        ]
    ]
];

// Función para generar schema de FAQ
function generateFAQSchema($questions) {
    $faqSchema = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => []
    ];
    
    foreach ($questions as $question) {
        $faqSchema["mainEntity"][] = [
            "@type" => "Question",
            "name" => $question['question'],
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $question['answer']
            ]
        ];
    }
    
    return $faqSchema;
}

// Función para generar schema de Article
function generateArticleSchema($title, $description, $author = "Fundación Patriotas del Caribe", $datePublished = null, $image = null) {
    global $site_config;
    
    $articleSchema = [
        "@context" => "https://schema.org",
        "@type" => "Article",
        "headline" => $title,
        "description" => $description,
        "author" => [
            "@type" => "Organization",
            "name" => $author,
            "url" => $site_config['site_url']
        ],
        "publisher" => [
            "@type" => "Organization",
            "name" => "Fundación Patriotas del Caribe",
            "logo" => [
                "@type" => "ImageObject",
                "url" => $site_config['site_url'] . "/images/logo.png"
            ]
        ],
        "datePublished" => $datePublished ?: date('Y-m-d'),
        "dateModified" => date('Y-m-d'),
        "inLanguage" => "es-DO",
        "isPartOf" => [
            "@type" => "WebSite",
            "name" => "Patriotas del Caribe",
            "url" => $site_config['site_url']
        ]
    ];
    
    if ($image) {
        $articleSchema["image"] = [
            "@type" => "ImageObject",
            "url" => $site_config['site_url'] . "/" . $image,
            "width" => 1200,
            "height" => 630
        ];
    }
    
    return $articleSchema;
}

// Función para imprimir schemas
function printSchemas($schemas) {
    foreach ($schemas as $schema) {
        echo '<script type="application/ld+json">' . "\n";
        echo json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        echo "\n" . '</script>' . "\n";
    }
}
?>
