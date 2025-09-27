#!/bin/bash

# Script para convertir imágenes principales a formato WebP
# Requiere tener instalado cwebp (parte de libwebp)
# Instalación:
# - macOS: brew install webp
# - Ubuntu: sudo apt-get install webp
# - CentOS: sudo yum install libwebp-tools

echo "🖼️  Convirtiendo imágenes a formato WebP para optimización..."

# Directorio de imágenes
IMG_DIR="images"
cd "$IMG_DIR" || exit 1

# Función para convertir imagen a WebP
convert_to_webp() {
    local input="$1"
    local output="${input%.*}.webp"
    local quality="$2"

    if [ -f "$input" ]; then
        echo "Convirtiendo $input -> $output (calidad: $quality%)"
        cwebp -q "$quality" "$input" -o "$output"

        # Verificar que la conversión fue exitosa y el archivo WebP es menor
        if [ -f "$output" ]; then
            original_size=$(stat -f%z "$input" 2>/dev/null || stat -c%s "$input" 2>/dev/null)
            webp_size=$(stat -f%z "$output" 2>/dev/null || stat -c%s "$output" 2>/dev/null)
            reduction=$((100 - (webp_size * 100 / original_size)))
            echo "✅ $output creado. Reducción: ${reduction}%"
        else
            echo "❌ Error convirtiendo $input"
        fi
    else
        echo "⚠️  Archivo no encontrado: $input"
    fi
}

# Convertir imágenes de héroes (alta calidad para imágenes importantes)
echo "📸 Convirtiendo imágenes de héroes históricos..."
convert_to_webp "duarte.jpg" 85
convert_to_webp "marti.jpg" 85
convert_to_webp "gomez.jpg" 85
convert_to_webp "francisco.jpg" 85
convert_to_webp "betances.jpg" 80  # Imagen muy grande, calidad ligeramente menor
convert_to_webp "luperon.jpg" 80
convert_to_webp "narciso.jpg" 80
convert_to_webp "maceo.jpg" 80

# Convertir logos y iconos (alta calidad)
echo "🏛️  Convirtiendo logos e iconos..."
convert_to_webp "logo.png" 90
convert_to_webp "preview.jpg" 80

# Convertir banderas (calidad media-alta)
echo "🏳️  Convirtiendo banderas..."
convert_to_webp "bandera_cuba.png" 85
convert_to_webp "bandera_rd.png" 85

# Convertir iconos de redes sociales (calidad media para iconos pequeños)
echo "📱 Convirtiendo iconos de redes sociales..."
convert_to_webp "facebook.png" 80
convert_to_webp "instagram.png" 80
convert_to_webp "whatsapp.png" 80
convert_to_webp "twitter.png" 80
convert_to_webp "telegram-logo.png" 80
convert_to_webp "tiktok-logo.png" 80

# Crear favicon WebP si no existe
echo "🎯 Convirtiendo favicon..."
convert_to_webp "favicon.png" 90

echo ""
echo "✨ Conversión completada!"
echo "📊 Resumen de archivos WebP creados:"
ls -la *.webp 2>/dev/null || echo "No se encontraron archivos WebP. Verifica que cwebp esté instalado."

echo ""
echo "📋 Próximos pasos:"
echo "1. Verificar que las imágenes WebP se ven correctamente"
echo "2. Actualizar el código PHP para usar las versiones WebP automáticamente"
echo "3. Configurar el servidor para servir WebP cuando sea compatible"

echo ""
echo "🔧 Configuración .htaccess sugerida:"
cat << 'EOF'
# Servir imágenes WebP automáticamente
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Verificar si el navegador soporta WebP
    RewriteCond %{HTTP_ACCEPT} image/webp

    # Verificar si existe la versión WebP
    RewriteCond %{REQUEST_FILENAME} \.(jpe?g|png)$
    RewriteCond %{REQUEST_FILENAME}\.webp -f

    # Servir la versión WebP
    RewriteRule ^(.+)\.(jpe?g|png)$ $1.$2.webp [T=image/webp,E=accept:1,L]
</IfModule>

# Headers para WebP
<IfModule mod_headers.c>
    Header append Vary Accept env=REDIRECT_accept
</IfModule>
EOF

cd ..
echo "🎉 Script completado. Ejecuta este script cuando tengas cwebp instalado."