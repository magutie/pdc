<?php
// Plantillas de meta tags para diferentes tipos de contenido

function getArticleMetaTemplate($title, $description, $keywords = '', $canonical = '') {
    global $site_config;
    
    $canonical = $canonical ?: $site_config['site_url'] . $_SERVER['REQUEST_URI'];
    
    return [
        'title' => $title . ' | Patriotas del Caribe',
        'description' => $description,
        'keywords' => $keywords,
        'canonical' => $canonical,
        'og_title' => $title,
        'og_description' => $description,
        'og_type' => 'article',
        'twitter_title' => $title,
        'twitter_description' => $description
    ];
}

function getHubMetaTemplate($title, $description, $keywords = '', $canonical = '') {
    global $site_config;
    
    $canonical = $canonical ?: $site_config['site_url'] . $_SERVER['REQUEST_URI'];
    
    return [
        'title' => $title . ' | Patriotas del Caribe',
        'description' => $description,
        'keywords' => $keywords,
        'canonical' => $canonical,
        'og_title' => $title,
        'og_description' => $description,
        'og_type' => 'article',
        'twitter_title' => $title,
        'twitter_description' => $description
    ];
}

function getInstitutionalMetaTemplate($title, $description, $keywords = '', $canonical = '') {
    global $site_config;
    
    $canonical = $canonical ?: $site_config['site_url'] . $_SERVER['REQUEST_URI'];
    
    return [
        'title' => $title . ' | Patriotas del Caribe',
        'description' => $description,
        'keywords' => $keywords,
        'canonical' => $canonical,
        'og_title' => $title,
        'og_description' => $description,
        'og_type' => 'website',
        'twitter_title' => $title,
        'twitter_description' => $description
    ];
}

// Plantillas específicas por tipo de contenido
function getRegularizationMeta() {
    return getArticleMetaTemplate(
        'Regularización Migratoria en República Dominicana: Guía Completa 2025',
        'Guía completa para regularizar tu situación migratoria en República Dominicana. Requisitos, documentos, procesos y vías de regularización para migrantes cubanos.',
        'regularización migratoria república dominicana, regularizar cubanos RD, residencia temporal dominicana, visa trabajo república dominicana, cómo obtener residencia en república dominicana como cubano'
    );
}

function getWorkRightsMeta() {
    return getArticleMetaTemplate(
        'Trabajo y Derechos Laborales en República Dominicana',
        'Conoce tus derechos como trabajador migrante en República Dominicana. Guía completa sobre búsqueda de empleo, contratos, salarios y sectores con mayor demanda.',
        'trabajo cubanos república dominicana, derechos laborales migrantes RD, empleos cubanos dominicana, salario mínimo RD, cómo conseguir trabajo como cubano en república dominicana'
    );
}

function getHealthEducationMeta() {
    return getArticleMetaTemplate(
        'Salud y Educación para Migrantes Cubanos en República Dominicana',
        'Acceso a servicios de salud y educación para migrantes cubanos en República Dominicana. Sistema público, privado, validación de títulos y recursos disponibles.',
        'salud educación cubanos república dominicana, sistema salud RD migrantes, educación cubanos dominicana, hospitales RD, cómo acceder a salud como migrante en república dominicana'
    );
}

function getHousingMeta() {
    return getArticleMetaTemplate(
        'Vivienda y Costo de Vida en República Dominicana',
        'Guía completa sobre vivienda, alquileres, zonas recomendadas y costo de vida para migrantes cubanos en República Dominicana. Presupuestos y consejos para ahorrar.',
        'vivienda cubanos república dominicana, alquiler santo domingo, costo vida RD, zonas baratas dominicana, dónde vivir barato como cubano en república dominicana'
    );
}

function getCommunitiesMeta() {
    return getArticleMetaTemplate(
        'Comunidades y Redes de Apoyo para Cubanos en República Dominicana',
        'Redes de apoyo, organizaciones, grupos comunitarios y recursos para migrantes cubanos en República Dominicana. Cómo conectarte con la comunidad cubana.',
        'comunidad cubana república dominicana, redes apoyo migrantes RD, grupos cubanos santo domingo, organizaciones migrantes, dónde encontrar apoyo como cubano en república dominicana'
    );
}

function getProceduresMeta() {
    return getArticleMetaTemplate(
        'Trámites Frecuentes para Cubanos en República Dominicana',
        'Guía de trámites administrativos, apostillas, documentos de identidad y permisos para migrantes cubanos en República Dominicana.',
        'trámites cubanos república dominicana, apostilla documentos cubanos, cédula dominicana, licencia conducir RD, cómo apostillar documentos cubanos para república dominicana'
    );
}

function getCommonErrorsMeta() {
    return getArticleMetaTemplate(
        'Errores Comunes de Migrantes Cubanos en República Dominicana',
        'Los errores más frecuentes que cometen los migrantes cubanos en República Dominicana y cómo evitarlos. Consejos prácticos para una integración exitosa.',
        'errores migrantes cubanos república dominicana, errores comunes RD, evitar problemas migrantes, consejos cubanos RD, qué errores evitar como cubano en república dominicana'
    );
}

function getDirectoryMeta() {
    return getArticleMetaTemplate(
        'Directorio Útil para Cubanos en República Dominicana',
        'Directorio completo de contactos útiles, instituciones gubernamentales, servicios de emergencia y organizaciones de apoyo para migrantes cubanos.',
        'directorio útil cubanos república dominicana, contactos importantes RD, teléfonos emergencia dominicana, servicios migrantes, directorio completo servicios migrantes república dominicana'
    );
}

function getMainHubMeta() {
    return getHubMetaTemplate(
        'Cubanos en República Dominicana: Guía Completa 2025',
        'Guía completa para migrantes cubanos en República Dominicana: regularización, derechos, trabajo, salud, educación, vivienda y comunidades de apoyo. Todo lo que necesitas saber.',
        'cubanos en república dominicana, migrantes cubanos RD, cubanos en dominicana, guía cubanos república dominicana, regularización cubanos RD, cómo regularizarse como cubano en república dominicana'
    );
}

function getFAQMeta() {
    return getInstitutionalMetaTemplate(
        'Preguntas Frecuentes: Cubanos en República Dominicana',
        'Respuestas a las preguntas más comunes sobre migración, derechos y procesos para cubanos en República Dominicana. FAQ actualizada 2025.',
        'preguntas frecuentes cubanos RD, FAQ migrantes dominicana, dudas cubanos república dominicana, información migración RD'
    );
}

function getHistoryMeta() {
    return getInstitutionalMetaTemplate(
        'Historia Fraternal entre Cuba y República Dominicana',
        'Descubre la historia compartida entre Cuba y República Dominicana, los lazos de hermandad y los héroes que unieron ambas naciones en la lucha por la libertad.',
        'historia cubanos dominicana, relación Cuba República Dominicana, héroes compartidos, lazos históricos, relaciones bilaterales Cuba RD'
    );
}

function getValuesMeta() {
    return getInstitutionalMetaTemplate(
        'Valores y Principios de Patriotas del Caribe',
        'Los valores que guían nuestro trabajo: patriotismo, respeto, solidaridad y compromiso con la comunidad migrante cubana en República Dominicana.',
        'valores patriotas del caribe, principios organización cubanos, misión fundación, compromisos organizacionales, ética trabajo migrante'
    );
}

function getWorkPlanMeta() {
    return getInstitutionalMetaTemplate(
        'Plan de Trabajo: Regularización y Apoyo a Migrantes Cubanos',
        'Conoce nuestro plan integral para la regularización humanitaria y apoyo a migrantes cubanos en República Dominicana. 7 fases de trabajo.',
        'plan trabajo patriotas del caribe, regularización humanitaria cubanos, estrategia migración, programa apoyo migrantes, iniciativa regularización'
    );
}

// Función para aplicar meta tags a una página
function applyMetaTemplate($templateFunction) {
    $meta = $templateFunction();
    
    // Establecer variables globales para que las use includes/head.php
    global $page_title, $page_description;
    $page_title = $meta['title'];
    $page_description = $meta['description'];
    
    return $meta;
}
?>
