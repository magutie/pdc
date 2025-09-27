<?php
// Sistema de CTAs consistentes para Patriotas del Caribe

function generateCTASection($type, $title = '', $description = '', $options = []) {
    $defaults = [
        'background_color' => '#e3f2fd',
        'primary_button_color' => '#1976d2',
        'secondary_button_color' => '#6c757d',
        'show_whatsapp' => true,
        'show_registration' => true,
        'custom_buttons' => []
    ];
    
    $options = array_merge($defaults, $options);
    
    switch ($type) {
        case 'main':
            return generateMainCTA($title, $description, $options);
        case 'article':
            return generateArticleCTA($title, $description, $options);
        case 'support':
            return generateSupportCTA($title, $description, $options);
        case 'community':
            return generateCommunityCTA($title, $description, $options);
        default:
            return generateDefaultCTA($title, $description, $options);
    }
}

function generateMainCTA($title, $description, $options) {
    $title = $title ?: '🤝 ¿Necesitas Ayuda Personalizada?';
    $description = $description ?: 'Patriotas del Caribe está aquí para apoyarte en tu proceso de integración en República Dominicana.';
    
    $cta = '<section id="cta-main" style="background-color: ' . $options['background_color'] . '; padding: 3rem; border-radius: 12px; text-align: center; margin: 3rem 0;">';
    $cta .= '<h2>' . htmlspecialchars($title) . '</h2>';
    $cta .= '<p style="font-size: 1.2rem; margin: 1rem 0;">' . htmlspecialchars($description) . '</p>';
    
    $cta .= '<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 2rem 0;">';
    
    if ($options['show_registration']) {
        $cta .= '<a href="index.php#formulario" class="btn-primary" style="background-color: ' . $options['primary_button_color'] . '; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;">';
        $cta .= '📝 Registrarse para Recibir Ayuda</a>';
    }
    
    if ($options['show_whatsapp']) {
        $cta .= '<a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" class="btn-secondary" style="background-color: #25D366; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">';
        $cta .= '💬 Únete a Nuestro WhatsApp</a>';
    }
    
    // Agregar botones personalizados
    foreach ($options['custom_buttons'] as $button) {
        $cta .= '<a href="' . $button['url'] . '" class="btn-custom" style="background-color: ' . $button['color'] . '; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 6px; font-weight: bold;"';
        if (isset($button['target'])) {
            $cta .= ' target="' . $button['target'] . '"';
        }
        $cta .= '>' . $button['text'] . '</a>';
    }
    
    $cta .= '</div>';
    $cta .= '<p style="font-size: 0.9rem; color: #666;"><strong>Gratuito y confidencial</strong> | Respuesta en 24-48 horas</p>';
    $cta .= '</section>';
    
    return $cta;
}

function generateArticleCTA($title, $description, $options) {
    $title = $title ?: '📚 ¿Te Ayudó Esta Información?';
    $description = $description ?: 'Si esta guía te fue útil, considera registrarte para recibir más recursos y actualizaciones.';
    
    $cta = '<section id="cta-article" style="background-color: #fff3e0; padding: 2.5rem; border-radius: 8px; text-align: center; margin: 2rem 0; border-left: 4px solid #f57c00;">';
    $cta .= '<h3>' . htmlspecialchars($title) . '</h3>';
    $cta .= '<p style="margin: 1rem 0;">' . htmlspecialchars($description) . '</p>';
    
    $cta .= '<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 1.5rem 0;">';
    
    $cta .= '<a href="index.php#formulario" class="btn-primary" style="background-color: ' . $options['primary_button_color'] . '; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;">';
    $cta .= '📝 Recibir Más Recursos</a>';
    
    $cta .= '<a href="faq.php" class="btn-secondary" style="background-color: ' . $options['secondary_button_color'] . '; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;">';
    $cta .= '❓ Ver Preguntas Frecuentes</a>';
    
    $cta .= '</div>';
    $cta .= '<p style="font-size: 0.9rem; color: #666;">Únete a nuestra comunidad de apoyo</p>';
    $cta .= '</section>';
    
    return $cta;
}

function generateSupportCTA($title, $description, $options) {
    $title = $title ?: '🆘 ¿Necesitas Apoyo Inmediato?';
    $description = $description ?: 'Si estás pasando por una situación difícil o necesitas orientación urgente, contáctanos directamente.';
    
    $cta = '<section id="cta-support" style="background-color: #ffebee; padding: 2.5rem; border-radius: 8px; text-align: center; margin: 2rem 0; border-left: 4px solid #f44336;">';
    $cta .= '<h3>' . htmlspecialchars($title) . '</h3>';
    $cta .= '<p style="margin: 1rem 0;">' . htmlspecialchars($description) . '</p>';
    
    $cta .= '<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 1.5rem 0;">';
    
    $cta .= '<a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" class="btn-whatsapp" style="background-color: #25D366; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">';
    $cta .= '💬 WhatsApp Inmediato</a>';
    
    $cta .= '<a href="mailto:contacto@patriotasdelcaribe.com" class="btn-email" style="background-color: #1976d2; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;">';
    $cta .= '📧 Enviar Email</a>';
    
    $cta .= '</div>';
    $cta .= '<p style="font-size: 0.9rem; color: #666;"><strong>Respuesta rápida garantizada</strong> | Disponibles 24/7</p>';
    $cta .= '</section>';
    
    return $cta;
}

function generateCommunityCTA($title, $description, $options) {
    $title = $title ?: '👥 Únete a Nuestra Comunidad';
    $description = $description ?: 'Conecta con otros migrantes cubanos, comparte experiencias y recibe apoyo de la comunidad.';
    
    $cta = '<section id="cta-community" style="background-color: #e8f5e8; padding: 2.5rem; border-radius: 8px; text-align: center; margin: 2rem 0; border-left: 4px solid #4caf50;">';
    $cta .= '<h3>' . htmlspecialchars($title) . '</h3>';
    $cta .= '<p style="margin: 1rem 0;">' . htmlspecialchars($description) . '</p>';
    
    $cta .= '<div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin: 1.5rem 0;">';
    
    $cta .= '<a href="https://www.facebook.com/groups/1672337816821354" class="btn-facebook" style="background-color: #1877F2; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">';
    $cta .= '📘 Grupo de Facebook</a>';
    
    $cta .= '<a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV" class="btn-whatsapp" style="background-color: #25D366; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">';
    $cta .= '💬 Grupo de WhatsApp</a>';
    
    $cta .= '<a href="https://www.instagram.com/patriotasdelcaribe" class="btn-instagram" style="background-color: #E4405F; color: white; padding: 0.8rem 1.5rem; text-decoration: none; border-radius: 6px; font-weight: bold;" target="_blank">';
    $cta .= '📷 Síguenos en Instagram</a>';
    
    $cta .= '</div>';
    $cta .= '<p style="font-size: 0.9rem; color: #666;">Más de 1000 miembros activos</p>';
    $cta .= '</section>';
    
    return $cta;
}

function generateDefaultCTA($title, $description, $options) {
    return generateMainCTA($title, $description, $options);
}

// CTAs específicos por tipo de página
function getRegularizationCTA() {
    return generateCTASection('main', 
        '🤝 ¿Necesitas Ayuda con tu Regularización?',
        'Patriotas del Caribe puede orientarte en el proceso de regularización migratoria en República Dominicana.',
        [
            'custom_buttons' => [
                [
                    'text' => '📋 Ver Preguntas Frecuentes',
                    'url' => 'faq.php',
                    'color' => '#6c757d'
                ]
            ]
        ]
    );
}

function getWorkRightsCTA() {
    return generateCTASection('article',
        '💼 ¿Buscas Trabajo en República Dominicana?',
        'Únete a nuestra red de apoyo laboral y recibe ofertas de trabajo, consejos y orientación profesional.',
        [
            'custom_buttons' => [
                [
                    'text' => '🔍 Ver Ofertas de Trabajo',
                    'url' => 'trabajo-derechos-rd.php',
                    'color' => '#1976d2'
                ]
            ]
        ]
    );
}

function getHousingCTA() {
    return generateCTASection('community',
        '🏠 ¿Buscas Vivienda en República Dominicana?',
        'Conecta con otros migrantes que buscan roommates, comparten información sobre barrios y ayudan con la búsqueda de vivienda.',
        [
            'custom_buttons' => [
                [
                    'text' => '🏘️ Ver Opciones de Vivienda',
                    'url' => 'vivienda-costo-vida-rd.php',
                    'color' => '#f57c00'
                ]
            ]
        ]
    );
}

function getHealthEducationCTA() {
    return generateCTASection('support',
        '🏥 ¿Necesitas Información sobre Salud o Educación?',
        'Orientación sobre servicios de salud, validación de títulos, acceso a educación y recursos disponibles.',
        [
            'custom_buttons' => [
                [
                    'text' => '📚 Ver Recursos Educativos',
                    'url' => 'salud-educacion-migrantes.php',
                    'color' => '#9c27b0'
                ]
            ]
        ]
    );
}

// Función para incluir CTA en páginas
function includeCTA($type = 'default', $title = '', $description = '', $options = []) {
    echo generateCTASection($type, $title, $description, $options);
}

// Función para tracking de CTAs
function addCTATracking($ctaHtml, $eventName) {
    // Agregar atributos de tracking para GA4
    $ctaHtml = str_replace('<a href=', '<a data-ga-event="' . $eventName . '" href=', $ctaHtml);
    return $ctaHtml;
}
?>
