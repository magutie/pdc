<?php
// Sistema de navegación y búsqueda optimizado para SEO y UX

// Función para generar navegación principal
function generateMainNavigation() {
    $nav_items = [
        [
            'title' => 'Inicio',
            'url' => 'index.php',
            'description' => 'Página principal de Patriotas del Caribe'
        ],
        [
            'title' => 'Guía Completa',
            'url' => 'cubanos-en-rd-guia.php',
            'description' => 'Guía completa para cubanos en República Dominicana'
        ],
        [
            'title' => 'Regularización',
            'url' => 'regularizacion-rd.php',
            'description' => 'Información sobre regularización migratoria'
        ],
        [
            'title' => 'Quiénes Somos',
            'url' => 'quienes-somos.php',
            'description' => 'Conoce nuestro equipo y misión'
        ],
        [
            'title' => 'FAQ',
            'url' => 'faq.php',
            'description' => 'Preguntas frecuentes'
        ],
        [
            'title' => 'Enlaces Útiles',
            'url' => 'enlaces-utiles.php',
            'description' => 'Recursos y directorios útiles'
        ],
        [
            'title' => 'Transparencia',
            'url' => 'transparencia.php',
            'description' => 'Información transparente sobre nuestra organización'
        ]
    ];
    
    $current_page = basename($_SERVER['PHP_SELF']);
    
    $html = '<nav class="main-navigation" role="navigation" aria-label="Navegación principal">';
    $html .= '<ul class="nav-list">';
    
    foreach ($nav_items as $item) {
        $active_class = ($current_page === basename($item['url'])) ? ' class="active"' : '';
        $html .= '<li><a href="' . $item['url'] . '"' . $active_class . ' title="' . $item['description'] . '">' . $item['title'] . '</a></li>';
    }
    
    $html .= '</ul>';
    $html .= '</nav>';
    
    return $html;
}

// Función para generar breadcrumbs
function generateBreadcrumbs($current_page = '', $custom_breadcrumbs = []) {
    if (empty($custom_breadcrumbs)) {
        $custom_breadcrumbs = [
            'index.php' => ['Inicio'],
            'cubanos-en-rd-guia.php' => ['Inicio', 'Guía Completa'],
            'regularizacion-rd.php' => ['Inicio', 'Guía Completa', 'Regularización'],
            'quienes-somos.php' => ['Inicio', 'Quiénes Somos'],
            'faq.php' => ['Inicio', 'FAQ'],
            'enlaces-utiles.php' => ['Inicio', 'Enlaces Útiles'],
            'transparencia.php' => ['Inicio', 'Quiénes Somos', 'Transparencia'],
            'historia.php' => ['Inicio', 'Historia'],
            'valores.php' => ['Inicio', 'Valores'],
            'mision_patriotica.php' => ['Inicio', 'Misión'],
            'sobre_cuba.php' => ['Inicio', 'Sobre Cuba'],
            'plan_trabajo.php' => ['Inicio', 'Plan de Trabajo'],
            'privacidad.php' => ['Inicio', 'Privacidad'],
            'terminos.php' => ['Inicio', 'Términos']
        ];
    }
    
    $current_file = basename($_SERVER['PHP_SELF']);
    $breadcrumbs = $custom_breadcrumbs[$current_file] ?? ['Inicio'];
    
    $html = '<nav class="breadcrumbs" aria-label="Breadcrumb">';
    $html .= '<ol class="breadcrumb-list">';
    
    foreach ($breadcrumbs as $index => $crumb) {
        if ($index === count($breadcrumbs) - 1) {
            // Último elemento (página actual)
            $html .= '<li class="breadcrumb-item active" aria-current="page">' . $crumb . '</li>';
        } else {
            // Elementos anteriores con enlaces
            $url = ($index === 0) ? 'index.php' : strtolower(str_replace(' ', '-', $crumb)) . '.php';
            $html .= '<li class="breadcrumb-item"><a href="' . $url . '">' . $crumb . '</a></li>';
            $html .= '<li class="breadcrumb-separator" aria-hidden="true">→</li>';
        }
    }
    
    $html .= '</ol>';
    $html .= '</nav>';
    
    return $html;
}

// Función para generar navegación de pie de página
function generateFooterNavigation() {
    $footer_links = [
        'index.php' => 'Inicio',
        'cubanos-en-rd-guia.php' => 'Guía Completa',
        'regularizacion-rd.php' => 'Regularización',
        'quienes-somos.php' => 'Quiénes Somos',
        'faq.php' => 'FAQ',
        'enlaces-utiles.php' => 'Enlaces Útiles',
        'transparencia.php' => 'Transparencia',
        'historia.php' => 'Historia',
        'valores.php' => 'Valores',
        'mision_patriotica.php' => 'Misión',
        'sobre_cuba.php' => 'Sobre Cuba',
        'plan_trabajo.php' => 'Plan de Trabajo',
        'privacidad.php' => 'Privacidad',
        'terminos.php' => 'Términos'
    ];
    
    $html = '<div class="footer-navigation">';
    $html .= '<div class="footer-links">';
    
    $links_array = [];
    foreach ($footer_links as $url => $title) {
        $links_array[] = '<a href="' . $url . '">' . $title . '</a>';
    }
    
    $html .= implode(' | ', $links_array);
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

// Función para generar sistema de búsqueda
function generateSearchSystem() {
    return '
    <div class="search-container">
        <form class="search-form" role="search" aria-label="Buscar en el sitio">
            <div class="search-input-group">
                <label for="search-input" class="sr-only">Buscar</label>
                <input type="search" 
                       id="search-input" 
                       name="q" 
                       placeholder="Buscar información sobre migración, derechos, trámites..."
                       class="search-input"
                       aria-describedby="search-help">
                <button type="submit" class="search-button" aria-label="Buscar">
                    <span class="search-icon">🔍</span>
                </button>
            </div>
            <div id="search-help" class="search-help">
                Busca información sobre regularización, derechos laborales, salud, educación y más.
            </div>
        </form>
        
        <div class="search-suggestions" id="search-suggestions" style="display: none;">
            <ul class="suggestions-list" id="suggestions-list"></ul>
        </div>
    </div>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search-input");
        const searchSuggestions = document.getElementById("search-suggestions");
        const suggestionsList = document.getElementById("suggestions-list");
        
        // Base de datos de búsqueda
        const searchData = [
            { title: "Regularización migratoria", url: "regularizacion-rd.php", keywords: ["regularización", "migratoria", "documentos", "residencia"] },
            { title: "Derechos laborales", url: "trabajo-derechos-rd.php", keywords: ["trabajo", "derechos", "laborales", "salario"] },
            { title: "Salud y educación", url: "salud-educacion-migrantes.php", keywords: ["salud", "educación", "hospital", "escuela"] },
            { title: "Vivienda y costo de vida", url: "vivienda-costo-vida-rd.php", keywords: ["vivienda", "alquiler", "costo", "vida"] },
            { title: "Comunidades de apoyo", url: "comunidades-redes-apoyo.php", keywords: ["comunidad", "apoyo", "grupos", "redes"] },
            { title: "Trámites frecuentes", url: "tramites-frecuentes-rd.php", keywords: ["trámites", "documentos", "apostilla", "cédula"] },
            { title: "Errores comunes", url: "errores-comunes-migrantes.php", keywords: ["errores", "comunes", "evitar", "problemas"] },
            { title: "Directorio útil", url: "directorio-util-rd.php", keywords: ["directorio", "contactos", "teléfonos", "direcciones"] },
            { title: "Preguntas frecuentes", url: "faq.php", keywords: ["preguntas", "frecuentes", "dudas", "respuestas"] },
            { title: "Quiénes somos", url: "quienes-somos.php", keywords: ["equipo", "organización", "misión", "valores"] },
            { title: "Transparencia", url: "transparencia.php", keywords: ["transparencia", "finanzas", "reportes", "gobierno"] },
            { title: "Historia", url: "historia.php", keywords: ["historia", "cuba", "república dominicana", "relaciones"] },
            { title: "Plan de trabajo", url: "plan_trabajo.php", keywords: ["plan", "trabajo", "regularización", "humanitaria"] }
        ];
        
        // Función de búsqueda
        function searchContent(query) {
            if (query.length < 2) {
                hideSuggestions();
                return;
            }
            
            const results = searchData.filter(item => {
                const searchText = (item.title + " " + item.keywords.join(" ")).toLowerCase();
                return searchText.includes(query.toLowerCase());
            });
            
            showSuggestions(results.slice(0, 5)); // Mostrar máximo 5 resultados
        }
        
        // Mostrar sugerencias
        function showSuggestions(results) {
            if (results.length === 0) {
                hideSuggestions();
                return;
            }
            
            suggestionsList.innerHTML = "";
            results.forEach(result => {
                const li = document.createElement("li");
                li.className = "suggestion-item";
                li.innerHTML = `<a href="${result.url}">${result.title}</a>`;
                suggestionsList.appendChild(li);
            });
            
            searchSuggestions.style.display = "block";
        }
        
        // Ocultar sugerencias
        function hideSuggestions() {
            searchSuggestions.style.display = "none";
        }
        
        // Event listeners
        searchInput.addEventListener("input", function() {
            const query = this.value.trim();
            searchContent(query);
        });
        
        searchInput.addEventListener("blur", function() {
            // Ocultar sugerencias después de un pequeño delay
            setTimeout(hideSuggestions, 200);
        });
        
        searchInput.addEventListener("focus", function() {
            const query = this.value.trim();
            if (query.length >= 2) {
                searchContent(query);
            }
        });
        
        // Navegación con teclado
        searchInput.addEventListener("keydown", function(e) {
            const suggestions = suggestionsList.querySelectorAll(".suggestion-item a");
            const currentIndex = Array.from(suggestions).indexOf(document.activeElement);
            
            if (e.key === "ArrowDown") {
                e.preventDefault();
                const nextIndex = (currentIndex + 1) % suggestions.length;
                suggestions[nextIndex].focus();
            } else if (e.key === "ArrowUp") {
                e.preventDefault();
                const prevIndex = currentIndex <= 0 ? suggestions.length - 1 : currentIndex - 1;
                suggestions[prevIndex].focus();
            } else if (e.key === "Escape") {
                hideSuggestions();
                this.focus();
            }
        });
    });
    </script>';
}

// Función para generar navegación móvil
function generateMobileNavigation() {
    return '
    <div class="mobile-navigation">
        <button class="mobile-menu-toggle" aria-label="Abrir menú de navegación" aria-expanded="false">
            <span class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
        
        <nav class="mobile-menu" aria-hidden="true">
            ' . generateMainNavigation() . '
        </nav>
    </div>
    
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggle = document.querySelector(".mobile-menu-toggle");
        const menu = document.querySelector(".mobile-menu");
        
        toggle.addEventListener("click", function() {
            const isExpanded = this.getAttribute("aria-expanded") === "true";
            
            this.setAttribute("aria-expanded", !isExpanded);
            menu.setAttribute("aria-hidden", isExpanded);
            
            if (isExpanded) {
                menu.classList.remove("open");
                document.body.classList.remove("menu-open");
            } else {
                menu.classList.add("open");
                document.body.classList.add("menu-open");
            }
        });
        
        // Cerrar menú al hacer clic en enlace
        menu.addEventListener("click", function(e) {
            if (e.target.tagName === "A") {
                toggle.setAttribute("aria-expanded", "false");
                menu.setAttribute("aria-hidden", "true");
                menu.classList.remove("open");
                document.body.classList.remove("menu-open");
            }
        });
        
        // Cerrar menú con tecla Escape
        document.addEventListener("keydown", function(e) {
            if (e.key === "Escape" && menu.classList.contains("open")) {
                toggle.setAttribute("aria-expanded", "false");
                menu.setAttribute("aria-hidden", "true");
                menu.classList.remove("open");
                document.body.classList.remove("menu-open");
            }
        });
    });
    </script>';
}

// Función para generar navegación contextual
function generateContextualNavigation($current_page) {
    $contextual_links = [
        'regularizacion-rd.php' => [
            ['url' => 'trabajo-derechos-rd.php', 'title' => 'Trabajo y Derechos', 'description' => 'Conoce tus derechos laborales'],
            ['url' => 'tramites-frecuentes-rd.php', 'title' => 'Trámites Frecuentes', 'description' => 'Guía de trámites administrativos'],
            ['url' => 'errores-comunes-migrantes.php', 'title' => 'Errores Comunes', 'description' => 'Evita errores frecuentes']
        ],
        'cubanos-en-rd-guia.php' => [
            ['url' => 'regularizacion-rd.php', 'title' => 'Regularización', 'description' => 'Guía de regularización migratoria'],
            ['url' => 'faq.php', 'title' => 'Preguntas Frecuentes', 'description' => 'Respuestas a dudas comunes'],
            ['url' => 'enlaces-utiles.php', 'title' => 'Enlaces Útiles', 'description' => 'Recursos y directorios']
        ],
        'quienes-somos.php' => [
            ['url' => 'transparencia.php', 'title' => 'Transparencia', 'description' => 'Información transparente'],
            ['url' => 'plan_trabajo.php', 'title' => 'Plan de Trabajo', 'description' => 'Nuestro plan de acción'],
            ['url' => 'historia.php', 'title' => 'Historia', 'description' => 'Nuestra historia']
        ]
    ];
    
    if (!isset($contextual_links[$current_page])) {
        return '';
    }
    
    $links = $contextual_links[$current_page];
    
    $html = '<div class="contextual-navigation">';
    $html .= '<h3>📖 Artículos Relacionados</h3>';
    $html .= '<div class="related-articles">';
    
    foreach ($links as $link) {
        $html .= '<div class="related-article">';
        $html .= '<h4><a href="' . $link['url'] . '">' . $link['title'] . '</a></h4>';
        $html .= '<p>' . $link['description'] . '</p>';
        $html .= '</div>';
    }
    
    $html .= '</div>';
    $html .= '</div>';
    
    return $html;
}

// CSS para navegación
function getNavigationCSS() {
    return '
    <style>
    /* === NAVEGACIÓN PRINCIPAL === */
    .main-navigation {
        background-color: #003366;
        padding: 0;
        margin: 0;
    }
    
    .nav-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .nav-list li {
        margin: 0;
    }
    
    .nav-list a {
        display: block;
        padding: 1rem 1.5rem;
        color: #ffffff;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-weight: 500;
    }
    
    .nav-list a:hover,
    .nav-list a.active {
        background-color: #1976d2;
        color: #ffffff;
    }
    
    /* === BREADCRUMBS === */
    .breadcrumbs {
        background-color: #f8f9fa;
        padding: 1rem 2rem;
        border-bottom: 1px solid #dee2e6;
    }
    
    .breadcrumb-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }
    
    .breadcrumb-item {
        margin: 0;
    }
    
    .breadcrumb-item a {
        color: #1976d2;
        text-decoration: none;
    }
    
    .breadcrumb-item a:hover {
        text-decoration: underline;
    }
    
    .breadcrumb-item.active {
        color: #6c757d;
        font-weight: 500;
    }
    
    .breadcrumb-separator {
        margin: 0 0.5rem;
        color: #6c757d;
    }
    
    /* === SISTEMA DE BÚSQUEDA === */
    .search-container {
        position: relative;
        max-width: 600px;
        margin: 0 auto;
    }
    
    .search-input-group {
        display: flex;
        border: 2px solid #dee2e6;
        border-radius: 8px;
        overflow: hidden;
    }
    
    .search-input {
        flex: 1;
        padding: 0.75rem 1rem;
        border: none;
        outline: none;
        font-size: 1rem;
    }
    
    .search-button {
        padding: 0.75rem 1rem;
        background-color: #1976d2;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .search-button:hover {
        background-color: #1565c0;
    }
    
    .search-help {
        margin-top: 0.5rem;
        font-size: 0.875rem;
        color: #6c757d;
        text-align: center;
    }
    
    .search-suggestions {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #dee2e6;
        border-top: none;
        border-radius: 0 0 8px 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }
    
    .suggestions-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    
    .suggestion-item a {
        display: block;
        padding: 0.75rem 1rem;
        color: #333;
        text-decoration: none;
        border-bottom: 1px solid #f8f9fa;
        transition: background-color 0.3s ease;
    }
    
    .suggestion-item a:hover,
    .suggestion-item a:focus {
        background-color: #f8f9fa;
        outline: none;
    }
    
    /* === NAVEGACIÓN MÓVIL === */
    .mobile-menu-toggle {
        display: none;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.5rem;
    }
    
    .hamburger-icon {
        display: flex;
        flex-direction: column;
        width: 24px;
        height: 18px;
    }
    
    .hamburger-icon span {
        display: block;
        height: 2px;
        background-color: #ffffff;
        margin: 2px 0;
        transition: 0.3s;
    }
    
    .mobile-menu {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.9);
        z-index: 9999;
    }
    
    .mobile-menu.open {
        display: block;
    }
    
    .mobile-menu .nav-list {
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    
    .mobile-menu .nav-list a {
        font-size: 1.5rem;
        padding: 1rem 2rem;
    }
    
    /* === NAVEGACIÓN CONTEXTUAL === */
    .contextual-navigation {
        background-color: #f8f9fa;
        padding: 2rem;
        border-radius: 8px;
        margin: 2rem 0;
    }
    
    .contextual-navigation h3 {
        margin-top: 0;
        color: #003366;
    }
    
    .related-articles {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1rem;
    }
    
    .related-article {
        background: white;
        padding: 1.5rem;
        border-radius: 6px;
        border: 1px solid #dee2e6;
        transition: box-shadow 0.3s ease;
    }
    
    .related-article:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    
    .related-article h4 {
        margin-top: 0;
        margin-bottom: 0.5rem;
    }
    
    .related-article h4 a {
        color: #1976d2;
        text-decoration: none;
    }
    
    .related-article h4 a:hover {
        text-decoration: underline;
    }
    
    .related-article p {
        margin-bottom: 0;
        color: #6c757d;
        font-size: 0.9rem;
    }
    
    /* === RESPONSIVE === */
    @media (max-width: 768px) {
        .nav-list {
            display: none;
        }
        
        .mobile-menu-toggle {
            display: block;
        }
        
        .breadcrumbs {
            padding: 0.5rem 1rem;
        }
        
        .breadcrumb-list {
            font-size: 0.875rem;
        }
        
        .search-container {
            margin: 0 1rem;
        }
        
        .contextual-navigation {
            padding: 1rem;
        }
        
        .related-articles {
            grid-template-columns: 1fr;
        }
    }
    
    /* === ACCESIBILIDAD === */
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
    
    /* === ESTADO DE MENÚ ABIERTO === */
    body.menu-open {
        overflow: hidden;
    }
    </style>';
}
?>
