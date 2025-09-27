// Service Worker para Patriotas del Caribe
// Mejora performance y permite funcionamiento offline

const CACHE_NAME = 'patriotas-v1';
const urlsToCache = [
    '/',
    '/index.php',
    '/css/critical.css',
    '/style-patriotas.css',
    '/images/logo.png',
    '/images/preview.jpg',
    '/images/favicon.png',
    '/cubanos-en-rd-guia.php',
    '/regularizacion-rd.php',
    '/quienes-somos.php',
    '/faq.php',
    '/enlaces-utiles.php',
    '/transparencia.php',
    '/historia.php',
    '/valores.php',
    '/mision_patriotica.php',
    '/sobre_cuba.php',
    '/plan_trabajo.php',
    '/privacidad.php',
    '/terminos.php'
];

// Instalación del Service Worker
self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(function(cache) {
                console.log('Cache abierto');
                return cache.addAll(urlsToCache);
            })
            .catch(function(error) {
                console.log('Error al cachear recursos:', error);
            })
    );
});

// Activación del Service Worker
self.addEventListener('activate', function(event) {
    event.waitUntil(
        caches.keys().then(function(cacheNames) {
            return Promise.all(
                cacheNames.map(function(cacheName) {
                    if (cacheName !== CACHE_NAME) {
                        console.log('Eliminando cache antiguo:', cacheName);
                        return caches.delete(cacheName);
                    }
                })
            );
        })
    );
});

// Interceptar requests
self.addEventListener('fetch', function(event) {
    // Solo interceptar requests GET
    if (event.request.method !== 'GET') {
        return;
    }
    
    // Estrategia: Cache First para recursos estáticos, Network First para páginas
    if (isStaticResource(event.request.url)) {
        // Cache First para recursos estáticos
        event.respondWith(
            caches.match(event.request)
                .then(function(response) {
                    // Si está en cache, devolverlo
                    if (response) {
                        return response;
                    }
                    
                    // Si no está en cache, hacer fetch y cachear
                    return fetch(event.request).then(function(response) {
                        // Verificar que la respuesta sea válida
                        if (!response || response.status !== 200 || response.type !== 'basic') {
                            return response;
                        }
                        
                        // Clonar la respuesta
                        var responseToCache = response.clone();
                        
                        caches.open(CACHE_NAME)
                            .then(function(cache) {
                                cache.put(event.request, responseToCache);
                            });
                        
                        return response;
                    });
                })
        );
    } else {
        // Network First para páginas HTML
        event.respondWith(
            fetch(event.request)
                .then(function(response) {
                    // Si la red funciona, devolver respuesta y cachear
                    if (response) {
                        var responseToCache = response.clone();
                        
                        caches.open(CACHE_NAME)
                            .then(function(cache) {
                                cache.put(event.request, responseToCache);
                            });
                        
                        return response;
                    }
                })
                .catch(function() {
                    // Si la red falla, intentar desde cache
                    return caches.match(event.request)
                        .then(function(response) {
                            if (response) {
                                return response;
                            }
                            
                            // Si no hay nada en cache, devolver página offline
                            return caches.match('/offline.html');
                        });
                })
        );
    }
});

// Función para determinar si es un recurso estático
function isStaticResource(url) {
    const staticExtensions = ['.css', '.js', '.png', '.jpg', '.jpeg', '.gif', '.svg', '.ico', '.woff', '.woff2', '.ttf'];
    const urlPath = new URL(url).pathname;
    
    return staticExtensions.some(ext => urlPath.endsWith(ext));
}

// Manejar mensajes del cliente
self.addEventListener('message', function(event) {
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }
});

// Notificaciones push (para futuro)
self.addEventListener('push', function(event) {
    if (event.data) {
        const data = event.data.json();
        const options = {
            body: data.body,
            icon: '/images/logo.png',
            badge: '/images/favicon.png',
            vibrate: [100, 50, 100],
            data: {
                dateOfArrival: Date.now(),
                primaryKey: data.primaryKey
            },
            actions: [
                {
                    action: 'explore',
                    title: 'Ver más',
                    icon: '/images/favicon.png'
                },
                {
                    action: 'close',
                    title: 'Cerrar',
                    icon: '/images/favicon.png'
                }
            ]
        };
        
        event.waitUntil(
            self.registration.showNotification(data.title, options)
        );
    }
});

// Manejar clics en notificaciones
self.addEventListener('notificationclick', function(event) {
    event.notification.close();
    
    if (event.action === 'explore') {
        event.waitUntil(
            clients.openWindow('/')
        );
    }
});

// Sincronización en background (para futuro)
self.addEventListener('sync', function(event) {
    if (event.tag === 'background-sync') {
        event.waitUntil(doBackgroundSync());
    }
});

function doBackgroundSync() {
    // Implementar sincronización en background
    return Promise.resolve();
}
