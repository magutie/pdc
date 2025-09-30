<?php
// Cargar variables de entorno si existe el archivo .env
if (file_exists(__DIR__ . '/../.env')) {
    $dotenv = file_get_contents(__DIR__ . '/../.env');
    $lines = explode("\n", $dotenv);
    foreach ($lines as $line) {
        if (strpos($line, '=') !== false && !str_starts_with(trim($line), '#')) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[trim($key)] = trim($value);
        }
    }
}

// Configuración global del sitio
$site_config = [
    'site_name' => $_ENV['APP_NAME'] ?? 'Patriotas del Caribe',
    'site_url' => $_ENV['APP_URL'] ?? 'https://www.patriotasdelcaribe.com',
    'gtm_id' => $_ENV['GTM_ID'] ?? 'GTM-NBVVS6PG',
    'ga4_id' => $_ENV['GA4_ID'] ?? 'G-NBVVS6PGLM', // ID real de GA4
    'google_site_verification' => $_ENV['GOOGLE_SITE_VERIFICATION'] ?? 'r5ZpRdEiBC__okZhv4_Gl3i_D-P7K_bZrcBgRDBSdIg',
    'adsense_publisher_id' => $_ENV['ADSENSE_PUBLISHER_ID'] ?? 'ca-pub-1746336102357240',
    'adsense_enabled' => true
];

// Páginas donde NO se deben mostrar anuncios (legal/transaccional)
$adsense_excluded_pages = [
    'privacidad.php',
    'terminos.php',
    'confirmar.php',
    'procesar.php',
    'diagnostico.php'
];

// Función para obtener el título de la página
function getPageTitle($page_title = '') {
    global $site_config;
    return $page_title ? $page_title . ' | ' . $site_config['site_name'] : $site_config['site_name'];
}

// Función para obtener la descripción de la página
function getPageDescription($page_description = '') {
    return $page_description ?: 'Fundación que apoya a cubanos en República Dominicana: orientación de migración, derechos, registro y comunidad patriótica caribeña.';
}

// Función para obtener la URL canónica
function getCanonicalUrl($path = '') {
    global $site_config;
    return $site_config['site_url'] . ($path ?: $_SERVER['REQUEST_URI']);
}

// Función para verificar si AdSense debe mostrarse en la página actual
function shouldShowAdsense() {
    global $site_config, $adsense_excluded_pages;

    // Si AdSense está deshabilitado globalmente
    if (!$site_config['adsense_enabled']) {
        return false;
    }

    // Obtener el nombre del archivo actual
    $current_page = basename($_SERVER['PHP_SELF']);

    // Verificar si está en la lista de exclusión
    return !in_array($current_page, $adsense_excluded_pages);
}
?>
