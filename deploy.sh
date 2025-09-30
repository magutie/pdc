#!/usr/bin/env bash
set -Eeuo pipefail

APP_NAME="pdc"
APP_DIR="$HOME/apps/$APP_NAME"
REPO_DIR="$APP_DIR/repos/working"
PUBLIC_HTML="$HOME/domains/patriotasdelcaribe.com/public_html"
BRANCH="main"

# Actualizar repositorio
cd "$REPO_DIR"
git fetch --all --prune
git checkout "$BRANCH"
git pull --ff-only

# Copiar archivos a public_html (excluyendo archivos innecesarios)
rsync -av --delete \
  --exclude='.git' \
  --exclude='.github' \
  --exclude='node_modules' \
  --exclude='vendor' \
  --exclude='.env' \
  --exclude='*.md' \
  --exclude='.gitignore' \
  --exclude='bootstrap.sh' \
  --exclude='deploy.sh' \
  --exclude='convert-to-webp.sh' \
  --exclude='composer.json' \
  --exclude='composer.lock' \
  --exclude='docs/' \
  --exclude='diagnostico.php' \
  "$REPO_DIR/" "$PUBLIC_HTML/"

# Enlazar .env compartido si existe
[ -f "$APP_DIR/shared/.env" ] && ln -sfn "$APP_DIR/shared/.env" "$PUBLIC_HTML/.env"

echo "✅ Deploy OK a public_html"
