<?php
// Optimizador de imágenes para Core Web Vitals
// Mejora LCP y CLS mediante optimización de imágenes

function generateOptimizedImage($src, $alt, $width, $height, $class = '', $lazy = true) {
    // Generar rutas para diferentes formatos
    $webp_src = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $src);
    $avif_src = str_replace(['.jpg', '.jpeg', '.png'], '.avif', $src);
    
    // Verificar si existen las versiones optimizadas
    $webp_exists = file_exists($webp_src);
    $avif_exists = file_exists($avif_src);
    
    // Generar atributos
    $loading_attr = $lazy ? 'loading="lazy"' : 'loading="eager"';
    $class_attr = $class ? 'class="' . $class . '"' : '';
    
    // Generar HTML optimizado
    $html = '<picture>';
    
    // AVIF (mejor compresión)
    if ($avif_exists) {
        $html .= '<source srcset="' . $avif_src . '" type="image/avif">';
    }
    
    // WebP (buena compresión, amplio soporte)
    if ($webp_exists) {
        $html .= '<source srcset="' . $webp_src . '" type="image/webp">';
    }
    
    // Fallback original
    $html .= '<img src="' . $src . '" alt="' . htmlspecialchars($alt) . '" 
             width="' . $width . '" height="' . $height . '" 
             ' . $class_attr . ' ' . $loading_attr . '>';
    
    $html .= '</picture>';
    
    return $html;
}

// Función para generar imágenes responsive
function generateResponsiveImage($src, $alt, $sizes, $class = '', $lazy = true) {
    // Generar rutas para diferentes formatos
    $webp_src = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $src);
    $avif_src = str_replace(['.jpg', '.jpeg', '.png'], '.avif', $src);
    
    // Verificar si existen las versiones optimizadas
    $webp_exists = file_exists($webp_src);
    $avif_exists = file_exists($avif_src);
    
    // Generar srcset para diferentes tamaños
    $srcset_original = '';
    $srcset_webp = '';
    $srcset_avif = '';
    
    foreach ($sizes as $size) {
        $width = $size['width'];
        $height = $size['height'];
        $src_size = $src . '?w=' . $width . '&h=' . $height;
        $webp_size = $webp_src . '?w=' . $width . '&h=' . $height;
        $avif_size = $avif_src . '?w=' . $width . '&h=' . $height;
        
        if ($srcset_original) $srcset_original .= ', ';
        $srcset_original .= $src_size . ' ' . $width . 'w';
        
        if ($webp_exists && $srcset_webp) $srcset_webp .= ', ';
        if ($webp_exists) $srcset_webp .= $webp_size . ' ' . $width . 'w';
        
        if ($avif_exists && $srcset_avif) $srcset_avif .= ', ';
        if ($avif_exists) $srcset_avif .= $avif_size . ' ' . $width . 'w';
    }
    
    // Generar atributos
    $loading_attr = $lazy ? 'loading="lazy"' : 'loading="eager"';
    $class_attr = $class ? 'class="' . $class . '"' : '';
    
    // Generar HTML optimizado
    $html = '<picture>';
    
    // AVIF con srcset
    if ($avif_exists && $srcset_avif) {
        $html .= '<source srcset="' . $srcset_avif . '" type="image/avif" sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw">';
    }
    
    // WebP con srcset
    if ($webp_exists && $srcset_webp) {
        $html .= '<source srcset="' . $srcset_webp . '" type="image/webp" sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw">';
    }
    
    // Fallback original con srcset
    $html .= '<img src="' . $src . '" alt="' . htmlspecialchars($alt) . '" 
             srcset="' . $srcset_original . '" 
             sizes="(max-width: 768px) 100vw, (max-width: 1200px) 50vw, 33vw"
             ' . $class_attr . ' ' . $loading_attr . '>';
    
    $html .= '</picture>';
    
    return $html;
}

// Función para generar placeholder base64
function generateImagePlaceholder($width, $height, $color = '#f0f0f0') {
    $svg = '<svg width="' . $width . '" height="' . $height . '" xmlns="http://www.w3.org/2000/svg">
        <rect width="100%" height="100%" fill="' . $color . '"/>
        <text x="50%" y="50%" text-anchor="middle" dy=".3em" fill="#999" font-family="Arial, sans-serif" font-size="14">
            Cargando...
        </text>
    </svg>';
    
    return 'data:image/svg+xml;base64,' . base64_encode($svg);
}

// Función para precargar imágenes críticas
function preloadCriticalImages($images) {
    $html = '';
    foreach ($images as $image) {
        $webp_src = str_replace(['.jpg', '.jpeg', '.png'], '.webp', $image['src']);
        if (file_exists($webp_src)) {
            $html .= '<link rel="preload" as="image" href="' . $webp_src . '" type="image/webp">';
        } else {
            $html .= '<link rel="preload" as="image" href="' . $image['src'] . '">';
        }
    }
    return $html;
}

// Función para generar imágenes con lazy loading mejorado
function generateLazyImage($src, $alt, $width, $height, $class = '') {
    // Generar placeholder
    $placeholder = generateImagePlaceholder($width, $height);
    
    // Generar HTML con lazy loading
    $html = '<div class="lazy-image-container" style="position: relative; width: ' . $width . 'px; height: ' . $height . 'px;">';
    
    // Placeholder
    $html .= '<img src="' . $placeholder . '" alt="" class="lazy-placeholder" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;">';
    
    // Imagen real
    $html .= generateOptimizedImage($src, $alt, $width, $height, 'lazy-image ' . $class, true);
    
    $html .= '</div>';
    
    return $html;
}

// Función para optimizar imágenes existentes en el contenido
function optimizeContentImages($content) {
    // Patrón para encontrar imágenes
    $pattern = '/<img([^>]*)src=["\']([^"\']+)["\']([^>]*)>/i';
    
    return preg_replace_callback($pattern, function($matches) {
        $before_src = $matches[1];
        $src = $matches[2];
        $after_src = $matches[3];
        
        // Extraer atributos existentes
        $alt = '';
        $width = '';
        $height = '';
        $class = '';
        
        if (preg_match('/alt=["\']([^"\']*)["\']/', $matches[0], $alt_matches)) {
            $alt = $alt_matches[1];
        }
        
        if (preg_match('/width=["\']([^"\']*)["\']/', $matches[0], $width_matches)) {
            $width = $width_matches[1];
        }
        
        if (preg_match('/height=["\']([^"\']*)["\']/', $matches[0], $height_matches)) {
            $height = $height_matches[1];
        }
        
        if (preg_match('/class=["\']([^"\']*)["\']/', $matches[0], $class_matches)) {
            $class = $class_matches[1];
        }
        
        // Si no hay dimensiones, usar valores por defecto
        if (!$width) $width = '800';
        if (!$height) $height = '600';
        
        // Generar imagen optimizada
        return generateOptimizedImage($src, $alt, $width, $height, $class, true);
        
    }, $content);
}

// CSS para lazy loading
function getLazyLoadingCSS() {
    return '
    <style>
    .lazy-image {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .lazy-image.loaded {
        opacity: 1;
    }
    
    .lazy-placeholder {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }
    
    @keyframes loading {
        0% { background-position: 200% 0; }
        100% { background-position: -200% 0; }
    }
    
    /* Prevenir layout shift */
    img {
        max-width: 100%;
        height: auto;
    }
    
    picture img {
        width: 100%;
        height: auto;
    }
    </style>';
}

// JavaScript para lazy loading mejorado
function getLazyLoadingJS() {
    return '
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Intersection Observer para lazy loading
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.classList.add("loaded");
                    observer.unobserve(img);
                }
            });
        });
        
        // Observar todas las imágenes lazy
        document.querySelectorAll(".lazy-image").forEach(img => {
            imageObserver.observe(img);
        });
        
        // Precargar imágenes críticas
        const criticalImages = document.querySelectorAll("img[loading=\'eager\']");
        criticalImages.forEach(img => {
            if (img.complete) {
                img.classList.add("loaded");
            } else {
                img.addEventListener("load", function() {
                    this.classList.add("loaded");
                });
            }
        });
    });
    </script>';
}
?>
