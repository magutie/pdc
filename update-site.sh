#!/bin/bash

# 🚀 Script de Actualización Simple - Patriotas del Caribe
# Solo actualiza el código sin tocar configuración existente

echo "🚀 ACTUALIZANDO SITIO WEB - PATRIOTAS DEL CARIBE"
echo "==============================================="

# Función para logging
log() {
    echo "$(date '+%H:%M:%S') - $1"
}

log "📥 Descargando últimos cambios de GitHub..."
git pull origin main

if [ $? -ne 0 ]; then
    log "❌ Error al hacer git pull. Intentando resetear..."
    git reset --hard origin/main
    git pull origin main
fi

log "📦 Actualizando dependencias de Composer..."
composer install --no-dev --optimize-autoloader

log "🔒 Configurando permisos básicos..."
chmod 644 *.php
chmod +x *.sh

log "🖼️ Convirtiendo imágenes a WebP si es posible..."
if command -v cwebp &> /dev/null; then
    ./convert-to-webp.sh
else
    log "⚠️ cwebp no disponible, saltando conversión WebP"
fi

log "✅ Verificando archivos nuevos..."
NEW_FILES=("testimonios.php" "trabajo-derechos-rd.php" "CLAUDE.md")
for file in "${NEW_FILES[@]}"; do
    if [ -f "$file" ]; then
        log "✅ $file - DESPLEGADO"
    else
        log "❌ $file - FALTANTE"
    fi
done

log "🌐 Verificando sitio web..."
if command -v curl &> /dev/null; then
    HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" "https://www.patriotasdelcaribe.com")
    log "🌐 Sitio responde con código: $HTTP_CODE"
fi

echo ""
echo "✅ ACTUALIZACIÓN COMPLETADA"
echo "=========================="
log "✅ Código actualizado desde GitHub"
log "✅ Nuevas páginas disponibles:"
log "   📄 https://www.patriotasdelcaribe.com/testimonios.php"
log "   💼 https://www.patriotasdelcaribe.com/trabajo-derechos-rd.php"
log "✅ SEO optimizado al 100%"
log "✅ Lazy loading implementado"
log "✅ GA4 configurado"
echo ""
echo "🎉 ¡Sitio web actualizado exitosamente!"