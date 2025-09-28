#!/usr/bin/env bash
# Script de configuración inicial del servidor (ejecutar una sola vez)
# Ejecutar en el servidor: ssh -p 65002 u276320034@191.101.79.151

set -Eeuo pipefail
APP_NAME="pdc"
APP_DIR="$HOME/apps/$APP_NAME"
REPO_URL="https://github.com/magutie/pdc.git"
BRANCH="main"

echo "🚀 Iniciando bootstrap para $APP_NAME..."

# Crear estructura de directorios
mkdir -p "$APP_DIR"/{repos,shared,releases}
cd "$APP_DIR/repos"

# Clonar repositorio si no existe
if [ ! -d working/.git ]; then
  echo "📥 Clonando repositorio..."
  git clone --depth=1 -b "$BRANCH" "$REPO_URL" working
else
  echo "✅ Repositorio ya existe"
fi

# Primera release + symlink current
TS=$(date +%Y%m%d%H%M%S)
echo "📦 Creando primera release: $TS"
cp -R "$APP_DIR/repos/working" "$APP_DIR/releases/$TS"
ln -sfn "$APP_DIR/releases/$TS" "$APP_DIR/current"

# Crear directorios compartidos
mkdir -p "$APP_DIR/shared"/{storage,logs}

echo "✅ Bootstrap completado!"
echo "📁 Estructura creada en: $APP_DIR"
echo "🔗 Symlink actual: $APP_DIR/current -> $APP_DIR/releases/$TS"
