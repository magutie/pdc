<?php
require_once 'config.php';

// Configuración específica por página
$page_title = getPageTitle($page_title ?? '');
$page_description = getPageDescription($page_description ?? '');
$canonical_url = getCanonicalUrl($canonical_path ?? '');
$og_image = $site_config['site_url'] . '/images/preview.jpg';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- FUNDAMENTOS SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TÍTULO Y DESCRIPCIÓN SEO -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="migración cubana, residencia legal cubanos RD, deportaciones cubanos, derechos migrantes, regularización RD, visas, viajes Cuba RD, fundación Patriotas del Caribe, activismo caribeño, libertad Cuba">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Fundación Patriotas del Caribe">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
    <link rel="icon" href="images/favicon.png" type="image/png" />

    <!-- META AVANZADA -->
    <meta name="theme-color" content="#003366">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="es">
    <meta name="rating" content="general">
    <meta name="audience" content="all">
    <meta name="coverage" content="Global">

    <!-- SOCIAL MEDIA OG -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- TWITTER CARDS -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- DATOS ESTRUCTURADOS JSON-LD -->
    <?php 
    require_once 'schemas.php';
    
    // Schemas básicos para todas las páginas
    $basicSchemas = [$organizationSchema, $websiteSchema, $navigationSchema];
    printSchemas($basicSchemas);
    ?>

    <!-- VERIFICACIÓN GOOGLE -->
    <meta name="google-site-verification" content="<?php echo $site_config['google_site_verification']; ?>" />

    <!-- GOOGLE TAG MANAGER -->
    <script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','<?php echo $site_config['gtm_id']; ?>');
    </script>

    <!-- GOOGLE ANALYTICS 4 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $site_config['ga4_id']; ?>"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $site_config['ga4_id']; ?>', {
        page_title: '<?php echo htmlspecialchars($page_title); ?>',
        page_location: window.location.href
    });
    </script>

    <!-- PERFORMANCE: CSS Y FUENTES OPTIMIZADAS -->
    <?php 
    require_once 'performance-optimizer.php';
    echo getCriticalCSS();
    echo loadNonCriticalCSS('style-patriotas.css', $version);
    echo preloadCriticalResources();
    ?>

    <!-- Font optimization -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"></noscript>
    
    <!-- Resource hints for performance -->
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="shortcut icon" href="images/favicon.ico?v=<?php echo $version; ?>">

    <!-- ESTILOS REDES -->
    <style>
    .botones-compartir {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 1rem;
    }

    .botones-compartir .btn {
        padding: 10px 20px;
        border-radius: 6px;
        color: white;
        font-weight: bold;
        text-decoration: none;
        cursor: pointer;
        transition: background 0.3s;
        border: none;
    }

    .red-whatsapp { background-color: #25D366; }
    .red-facebook { background-color: #1877F2; }
    .red-twitter  { background-color: black; }
    .red-enlace   { background-color: #6c757d; }

      .btn:hover {
        opacity: 0.9;
      }

      /* LAZY LOADING STYLES */
      .lazy-image {
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      .lazy-image.loaded {
        opacity: 1;
      }

      img[loading="lazy"] {
        opacity: 0;
        transition: opacity 0.3s ease;
      }

      img[loading="lazy"].loaded,
      img[loading="lazy"]:not([data-src]) {
        opacity: 1;
      }

      /* Prevenir layout shift */
      img {
        max-width: 100%;
        height: auto;
      }
      </style>
      
      <!-- JavaScript optimizado para Core Web Vitals -->
      <?php
      echo getOptimizedJavaScript();
      echo optimizeCoreWebVitals();
      ?>

      <!-- Lazy Loading JavaScript -->
      <script>
      document.addEventListener("DOMContentLoaded", function() {
          // Verificar soporte para Intersection Observer
          if ('IntersectionObserver' in window) {
              // Intersection Observer para lazy loading
              const imageObserver = new IntersectionObserver((entries, observer) => {
                  entries.forEach(entry => {
                      if (entry.isIntersecting) {
                          const img = entry.target;
                          img.classList.add("loaded");
                          observer.unobserve(img);
                      }
                  });
              }, {
                  rootMargin: '50px'
              });

              // Observar todas las imágenes lazy
              document.querySelectorAll("img[loading='lazy']").forEach(img => {
                  imageObserver.observe(img);
              });
          } else {
              // Fallback para navegadores sin soporte
              document.querySelectorAll("img[loading='lazy']").forEach(img => {
                  img.classList.add("loaded");
              });
          }

          // Manejar imágenes que ya se cargaron
          document.querySelectorAll("img").forEach(img => {
              if (img.complete) {
                  img.classList.add("loaded");
              } else {
                  img.addEventListener("load", function() {
                      this.classList.add("loaded");
                  });
              }
          });
      });
      </script>
    </head>
