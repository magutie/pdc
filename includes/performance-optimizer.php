<?php
// Optimizador de performance para Core Web Vitals
// Mejora LCP, CLS, INP y FID

// Función para generar CSS crítico inline
function getCriticalCSS() {
    return '
    <style id="critical-css">
    /* === ESTILO GENERAL CRÍTICO === */
    body {
        font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        background-color: #ffffff;
        color: #333;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }
    
    /* === HEADER CRÍTICO === */
    .header-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 1rem 2rem;
        background-color: #c62828;
        color: #ffffff;
        text-align: center;
    }
    
    .logo-eslogan {
        text-align: center;
    }
    
    .logo-text {
        font-size: 2rem;
        font-weight: bold;
        margin: 0;
        color: #ffffff;
    }
    
    .eslogan {
        font-size: 1rem;
        margin: 0;
        color: #ffffff;
    }
    
    .logo-container {
        width: 50px;
        height: 50px;
        margin-top: 10px;
        border-radius: 50%;
        overflow: hidden;
        border: 2px solid #ffffff;
    }
    
    .logo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* === TÍTULOS CRÍTICOS === */
    h1, h2, h3, h4 {
        font-family: "Merriweather", serif;
        color: #003366;
        margin-top: 1.5rem;
        margin-bottom: 1rem;
    }
    
    h1 {
        font-size: 2.5rem;
        text-align: center;
        color: #c62828;
    }
    
    h2 {
        font-size: 2rem;
        text-align: center;
        color: #004080;
    }
    
    /* === MAIN CONTENT CRÍTICO === */
    main {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    .info-proceso, .historia-patriotas, .llamado-plan, .valores-principios {
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        margin-bottom: 2rem;
        padding: 2rem;
    }
    
    /* === FOOTER CRÍTICO === */
    footer {
        background-color: #003366;
        color: white;
        text-align: center;
        padding: 1.5rem 1rem;
        font-size: 0.9rem;
        margin-top: 2rem;
    }
    
    /* === RESPONSIVE CRÍTICO === */
    @media (max-width: 768px) {
        .header-container {
            flex-direction: column;
        }
        .logo-text {
            font-size: 1.8rem;
        }
        h1 {
            font-size: 2rem;
        }
        h2 {
            font-size: 1.6rem;
        }
    }
    
    /* === PREVENIR LAYOUT SHIFT === */
    img {
        max-width: 100%;
        height: auto;
    }
    
    .lazy-image {
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .lazy-image.loaded {
        opacity: 1;
    }
    </style>';
}

// Función para cargar CSS no crítico de forma asíncrona
function loadNonCriticalCSS($css_file, $version = '') {
    $version_param = $version ? '?v=' . $version : '';
    
    return '
    <link rel="preload" href="' . $css_file . $version_param . '" as="style" onload="this.rel=\'stylesheet\'">
    <noscript><link rel="stylesheet" href="' . $css_file . $version_param . '"></noscript>
    <script>
        // Polyfill para navegadores que no soportan onload en link
        !function(e){"use strict";var t=function(t,n,r){function o(e){return i.body?e():void setTimeout(function(){o(e)})}function a(){d.addEventListener&&d.removeEventListener("load",a),d.media=r||"all"}var l,i=e.document,d=i.createElement("link");if(n)l=n;else{var s=(i.body||i.getElementsByTagName("head")[0]).childNodes;l=s[s.length-1]}var u=i.styleSheets;d.rel="stylesheet",d.href=t,d.media="only x",o(function(){l.parentNode.insertBefore(d,n?l:l.nextSibling)});var f=function(e){for(var t=d.href,n=u.length;n--;)if(u[n].href===t)return e();setTimeout(function(){f(e)})};return d.addEventListener&&d.addEventListener("load",a),d.onloadcssdefined=f,f(a),d};"undefined"!=typeof exports?exports.loadCSS=t:e.loadCSS=t}("undefined"!=typeof global?global:this);
        loadCSS("' . $css_file . $version_param . '");
    </script>';
}

// Función para optimizar JavaScript
function getOptimizedJavaScript() {
    return '
    <script>
    // JavaScript crítico inline para mejorar INP
    (function() {
        // Prevenir layout shift
        function preventLayoutShift() {
            const images = document.querySelectorAll("img");
            images.forEach(img => {
                if (!img.width || !img.height) {
                    img.style.aspectRatio = "16/9"; // Ratio por defecto
                }
            });
        }
        
        // Lazy loading mejorado
        function initLazyLoading() {
            if ("IntersectionObserver" in window) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.classList.add("loaded");
                            observer.unobserve(img);
                        }
                    });
                }, {
                    rootMargin: "50px 0px",
                    threshold: 0.1
                });
                
                document.querySelectorAll(".lazy-image").forEach(img => {
                    imageObserver.observe(img);
                });
            }
        }
        
        // Optimizar eventos de entrada
        function optimizeInputEvents() {
            let inputTimeout;
            document.addEventListener("input", function(e) {
                clearTimeout(inputTimeout);
                inputTimeout = setTimeout(() => {
                    // Procesar input después de que el usuario termine de escribir
                    handleInput(e);
                }, 150);
            });
        }
        
        function handleInput(e) {
            // Manejar input de forma optimizada
            if (e.target.tagName === "INPUT" || e.target.tagName === "TEXTAREA") {
                // Validación en tiempo real optimizada
                validateField(e.target);
            }
        }
        
        function validateField(field) {
            // Validación ligera para mejorar INP
            if (field.type === "email") {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                field.setCustomValidity(emailRegex.test(field.value) ? "" : "Email inválido");
            }
        }
        
        // Inicializar cuando el DOM esté listo
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", function() {
                preventLayoutShift();
                initLazyLoading();
                optimizeInputEvents();
            });
        } else {
            preventLayoutShift();
            initLazyLoading();
            optimizeInputEvents();
        }
        
        // Optimizar scroll
        let scrollTimeout;
        window.addEventListener("scroll", function() {
            clearTimeout(scrollTimeout);
            scrollTimeout = setTimeout(() => {
                // Procesar scroll de forma optimizada
                handleScroll();
            }, 16); // ~60fps
        });
        
        function handleScroll() {
            // Lógica de scroll optimizada
            const scrollY = window.scrollY;
            
            // Mostrar/ocultar elementos basado en scroll
            const header = document.querySelector(".header-container");
            if (header) {
                header.style.transform = scrollY > 100 ? "translateY(-100%)" : "translateY(0)";
            }
        }
        
    })();
    </script>';
}

// Función para precargar recursos críticos
function preloadCriticalResources() {
    return '
    <!-- Preload de recursos críticos -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

// Función para optimizar formularios
function optimizeFormPerformance($form_html) {
    // Agregar atributos de performance a formularios
    $form_html = str_replace('<form', '<form data-optimized="true"', $form_html);
    
    return $form_html . '
    <script>
    // Optimizar formularios para mejor INP
    document.addEventListener("DOMContentLoaded", function() {
        const forms = document.querySelectorAll("form[data-optimized]");
        
        forms.forEach(form => {
            // Debounce para validación en tiempo real
            let validationTimeout;
            
            form.addEventListener("input", function(e) {
                clearTimeout(validationTimeout);
                validationTimeout = setTimeout(() => {
                    validateField(e.target);
                }, 300);
            });
            
            // Optimizar envío de formulario
            form.addEventListener("submit", function(e) {
                e.preventDefault();
                
                // Mostrar indicador de carga
                const submitBtn = form.querySelector("button[type=submit]");
                const originalText = submitBtn.textContent;
                submitBtn.textContent = "Enviando...";
                submitBtn.disabled = true;
                
                // Enviar formulario de forma asíncrona
                setTimeout(() => {
                    form.submit();
                }, 100);
            });
        });
        
        function validateField(field) {
            // Validación ligera para mejorar performance
            if (field.type === "email") {
                const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value);
                field.setCustomValidity(isValid ? "" : "Email inválido");
            }
            
            if (field.required && !field.value.trim()) {
                field.setCustomValidity("Este campo es requerido");
            }
        }
    });
    </script>';
}

// Función para optimizar navegación
function optimizeNavigation() {
    return '
    <script>
    // Optimizar navegación para mejor UX
    document.addEventListener("DOMContentLoaded", function() {
        // Prefetch de enlaces en hover
        const links = document.querySelectorAll("a[href]");
        
        links.forEach(link => {
            link.addEventListener("mouseenter", function() {
                const href = this.getAttribute("href");
                if (href && !href.startsWith("#") && !href.startsWith("mailto:") && !href.startsWith("tel:")) {
                    // Prefetch de la página
                    const linkElement = document.createElement("link");
                    linkElement.rel = "prefetch";
                    linkElement.href = href;
                    document.head.appendChild(linkElement);
                }
            });
        });
        
        // Optimizar scroll suave
        document.querySelectorAll("a[href^=\'#\']").forEach(anchor => {
            anchor.addEventListener("click", function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute("href"));
                if (target) {
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start"
                    });
                }
            });
        });
    });
    </script>';
}

// Función para Service Worker básico
function generateServiceWorker() {
    return '
    <script>
    // Service Worker para cache y mejor performance
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function() {
            navigator.serviceWorker.register("/sw.js").then(function(registration) {
                console.log("SW registrado exitosamente");
            }).catch(function(registrationError) {
                console.log("SW registro falló");
            });
        });
    }
    </script>';
}

// Función para generar Service Worker file
function generateServiceWorkerFile() {
    return '
    const CACHE_NAME = "patriotas-v1";
    const urlsToCache = [
        "/",
        "/css/critical.css",
        "/style-patriotas.css",
        "/images/logo.png",
        "/images/preview.jpg"
    ];

    self.addEventListener("install", function(event) {
        event.waitUntil(
            caches.open(CACHE_NAME)
                .then(function(cache) {
                    return cache.addAll(urlsToCache);
                })
        );
    });

    self.addEventListener("fetch", function(event) {
        event.respondWith(
            caches.match(event.request)
                .then(function(response) {
                    // Cache hit - return response
                    if (response) {
                        return response;
                    }
                    return fetch(event.request);
                }
            )
        );
    });';
}

// Función para optimizar métricas de Core Web Vitals
function optimizeCoreWebVitals() {
    return '
    <script>
    // Optimizaciones específicas para Core Web Vitals
    
    // Mejorar LCP (Largest Contentful Paint)
    function optimizeLCP() {
        // Precargar imagen hero
        const heroImage = document.querySelector(".hero-image, .logo-container img");
        if (heroImage) {
            const link = document.createElement("link");
            link.rel = "preload";
            link.as = "image";
            link.href = heroImage.src;
            document.head.appendChild(link);
        }
    }
    
    // Mejorar CLS (Cumulative Layout Shift)
    function preventCLS() {
        // Reservar espacio para imágenes
        const images = document.querySelectorAll("img");
        images.forEach(img => {
            if (!img.width || !img.height) {
                img.style.aspectRatio = "16/9";
            }
        });
        
        // Reservar espacio para fuentes
        document.documentElement.style.fontDisplay = "swap";
    }
    
    // Mejorar INP (Interaction to Next Paint)
    function optimizeINP() {
        // Usar requestIdleCallback para tareas no críticas
        if ("requestIdleCallback" in window) {
            requestIdleCallback(function() {
                // Tareas no críticas aquí
                initializeNonCriticalFeatures();
            });
        }
        
        // Optimizar eventos de entrada
        document.addEventListener("input", debounce(function(e) {
            // Procesar input de forma optimizada
        }, 150));
    }
    
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    function initializeNonCriticalFeatures() {
        // Inicializar características no críticas
        console.log("Inicializando características no críticas");
    }
    
    // Ejecutar optimizaciones
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", function() {
            optimizeLCP();
            preventCLS();
            optimizeINP();
        });
    } else {
        optimizeLCP();
        preventCLS();
        optimizeINP();
    }
    </script>';
}
?>
