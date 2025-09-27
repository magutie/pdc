<?php
// Configuración global del sitio
$site_config = [
    'site_name' => 'Patriotas del Caribe',
    'site_url' => 'https://www.patriotasdelcaribe.com',
    'gtm_id' => 'GTM-NBVVS6PG', // ID existente del GTM
    'ga4_id' => 'G-XXXXXXXXXX', // Se debe reemplazar con el ID real de GA4
    'google_site_verification' => 'r5ZpRdEiBC__okZhv4_Gl3i_D-P7K_bZrcBgRDBSdIg'
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
?>
