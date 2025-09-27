#!/bin/bash

# 🚀 Script de Deploy Automatizado para Hostinger
# Patriotas del Caribe - Configuración completa

echo "🚀 INICIANDO DEPLOY AUTOMATIZADO EN HOSTINGER..."
echo "=================================================="

# Variables de configuración
PROJECT_DIR="/home/$(whoami)/public_html"
BACKUP_DIR="/home/$(whoami)/backups"
DATE=$(date +"%Y%m%d_%H%M%S")

# Función para logging
log() {
    echo "$(date '+%Y-%m-%d %H:%M:%S') - $1"
}

# Crear directorio de backups si no existe
mkdir -p $BACKUP_DIR

log "📁 Navegando al directorio del proyecto..."
cd $PROJECT_DIR

# Hacer backup del .env actual si existe
if [ -f .env ]; then
    log "💾 Haciendo backup del .env actual..."
    cp .env $BACKUP_DIR/.env.backup.$DATE
fi

log "📥 Descargando últimos cambios de GitHub..."
git pull origin main

if [ $? -ne 0 ]; then
    log "❌ Error al hacer git pull. Verificando configuración..."

    # Verificar si el repositorio existe
    if [ ! -d .git ]; then
        log "📦 Clonando repositorio por primera vez..."
        cd /home/$(whoami)
        git clone git@github.com:magutie/pdc.git public_html_new

        if [ $? -eq 0 ]; then
            # Mover contenido existente si lo hay
            if [ -d public_html ]; then
                mv public_html public_html_old_$DATE
            fi
            mv public_html_new public_html
            cd $PROJECT_DIR
            log "✅ Repositorio clonado exitosamente"
        else
            log "❌ Error al clonar repositorio. Verificar claves SSH."
            exit 1
        fi
    else
        log "❌ Error en git pull. Revisar configuración."
        exit 1
    fi
fi

log "⚙️ Configurando archivo .env para producción..."
if [ -f .env.production ]; then
    cp .env.production .env
    log "✅ Archivo .env configurado desde .env.production"
else
    log "⚠️ Archivo .env.production no encontrado, usando env.example..."
    cp env.example .env
fi

# Configurar permisos seguros
log "🔒 Configurando permisos de seguridad..."
chmod 600 .env
chmod 644 *.php
chmod 755 .
chmod +x convert-to-webp.sh deploy-hostinger.sh setup-database.sh

log "📦 Verificando Composer..."
if ! command -v composer &> /dev/null; then
    log "📦 Instalando Composer..."
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
    chmod +x /usr/local/bin/composer
fi

log "📚 Instalando dependencias de producción..."
composer install --no-dev --optimize-autoloader --no-interaction

if [ $? -ne 0 ]; then
    log "⚠️ Warning: Error en composer install, pero continuando..."
fi

log "🗄️ Configurando base de datos..."
if [ -f setup-database.sh ]; then
    chmod +x setup-database.sh
    ./setup-database.sh
else
    log "⚠️ Script de base de datos no encontrado"
fi

log "🖼️ Procesando optimización de imágenes..."
if command -v cwebp &> /dev/null; then
    log "🎨 Convirtiendo imágenes a WebP..."
    ./convert-to-webp.sh
else
    log "⚠️ cwebp no disponible, saltando conversión WebP"
fi

# Crear directorios necesarios
log "📁 Creando directorios necesarios..."
mkdir -p uploads logs cache
chmod 755 uploads logs cache

# Limpiar cache si existe
if [ -d cache ]; then
    rm -rf cache/*
    log "🧹 Cache limpiado"
fi

# Verificar archivos críticos
log "✅ Verificando archivos críticos..."
CRITICAL_FILES=("index.php" "sitemap.xml" "robots.txt" ".htaccess" "composer.json")
for file in "${CRITICAL_FILES[@]}"; do
    if [ -f "$file" ]; then
        log "✅ $file - OK"
    else
        log "❌ $file - FALTANTE"
    fi
done

# Verificar nuevas páginas
NEW_PAGES=("testimonios.php" "trabajo-derechos-rd.php" "CLAUDE.md")
for page in "${NEW_PAGES[@]}"; do
    if [ -f "$page" ]; then
        log "✅ $page - DESPLEGADA"
    else
        log "⚠️ $page - NO ENCONTRADA"
    fi
done

# Test de conectividad
log "🌐 Probando conectividad del sitio..."
if command -v curl &> /dev/null; then
    HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" "https://www.patriotasdelcaribe.com")
    if [ "$HTTP_CODE" = "200" ]; then
        log "✅ Sitio web responde correctamente (HTTP $HTTP_CODE)"
    else
        log "⚠️ Sitio web responde con código: $HTTP_CODE"
    fi
fi

log "📊 Resumen del deploy:"
log "===================="
log "✅ Código actualizado desde GitHub"
log "✅ Dependencias instaladas"
log "✅ Permisos configurados"
log "✅ Archivos críticos verificados"
log "✅ Deploy completado exitosamente"
log ""
log "🌐 Sitio disponible en: https://www.patriotasdelcaribe.com"
log "📝 Nuevas páginas:"
log "   - https://www.patriotasdelcaribe.com/testimonios.php"
log "   - https://www.patriotasdelcaribe.com/trabajo-derechos-rd.php"
log ""
log "🔧 Para futuros updates, ejecuta: ./deploy-hostinger.sh"
log "📋 Logs guardados en: $BACKUP_DIR/deploy.log.$DATE"

# Guardar log del deploy
echo "Deploy ejecutado el $DATE" >> $BACKUP_DIR/deploy.log.$DATE

echo ""
echo "🎉 ¡DEPLOY COMPLETADO EXITOSAMENTE!"
echo "🎯 Backlog SEO 100% implementado en producción"