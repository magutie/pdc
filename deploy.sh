#!/usr/bin/env bash
set -Eeuo pipefail

APP_NAME="pdc"
APP_DIR="$HOME/apps/$APP_NAME"
REPO_DIR="$APP_DIR/repos/working"
RELEASES_DIR="$APP_DIR/releases"
CURRENT="$APP_DIR/current"
BRANCH="main"
PHP_BIN="php"
NODE_BUILD="false"  # no compila nada por defecto

cd "$REPO_DIR"
git fetch --all --prune
git checkout "$BRANCH"
git pull --ff-only

TS=$(date +%Y%m%d%H%M%S)
cp -R "$REPO_DIR" "$RELEASES_DIR/$TS"
cd "$RELEASES_DIR/$TS"

# Enlazar configuración compartida (.env, storage, logs)
mkdir -p "$APP_DIR/shared"/{storage,logs}
[ -f "$APP_DIR/shared/.env" ] && ln -sfn "$APP_DIR/shared/.env" .env

# Si fuese Laravel (detecta artisan)
if [ -f artisan ]; then
  rm -rf storage || true
  ln -sfn "$APP_DIR/shared/storage" storage
  # Composer si aplica
  if [ -f composer.json ]; then
    composer install --no-dev --prefer-dist --optimize-autoloader || true
  fi
  # Optimizaciones Laravel
  $PHP_BIN artisan config:clear || true
  $PHP_BIN artisan cache:clear || true
  $PHP_BIN artisan route:clear || true
  $PHP_BIN artisan view:clear || true
  $PHP_BIN artisan migrate --force || true
  $PHP_BIN artisan optimize || true
else
  # Sitio PHP plano: nada que compilar
  true
fi

# Activar release (zero-downtime)
ln -sfn "$RELEASES_DIR/$TS" "$CURRENT"

# Permisos storage si existiera
find "$APP_DIR/shared/storage" -type d -exec chmod 775 {} \; 2>/dev/null || true
find "$APP_DIR/shared/storage" -type f -exec chmod 664 {} \; 2>/dev/null || true

echo "✅ Deploy OK: $TS"
