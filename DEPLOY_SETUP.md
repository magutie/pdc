# 🚀 Configuración de Deploy Automático por SSH

Este documento contiene todas las instrucciones para configurar el deploy automático de **Patriotas del Caribe** usando GitHub Actions + SSH (sin FTP) con releases y symlinks para zero-downtime.

## 📋 Datos del Proyecto

- **Repositorio**: https://github.com/magutie/pdc
- **SSH Host**: 191.101.79.151
- **SSH Puerto**: 65002
- **SSH Usuario**: u276320034
- **Dominio**: patriotasdelcaribe.com

## 🔐 1. Configurar Secrets en GitHub (Una sola vez)

Ve a tu repositorio `magutie/pdc` → **Settings** → **Secrets and variables** → **Actions**

Crea estos **Repository secrets**:

### SSH_HOST
```
191.101.79.151
```

### SSH_PORT
```
65002
```

### SSH_USER
```
u276320034
```

### SSH_KEY
```
[Pega aquí tu clave privada SSH en formato PEM/ed25519]
```

### KNOWN_HOSTS
```
191.101.79.151 ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDE92FW7fbXvSfPdZIY8okkGIG5IbVCR9Oj4WDqCo4i5Sdrv0+6hL23Evfv/8ToRrOLtnBs8KoQZphLC5VEkC0UDMyEfmiKYH+5IfyEwzKM0JEKRnRsaA2SCMHKBBiH3NjOjdk2TbFEP85FSoZYsvBmfLEZktI8ziAsdr0eMEjwa2y9yDX1h3pR7SA4N3EkAWz+3ARH5KV66dTbd3L7mgx6/AnSiRrDbwnDhwEDurCi1UR9gI/6adTejiyzAlZEkt1g2uD+kOyq01OOj48MWWZWpsDOIVzXMpF2sQ3rFWCTU3IJCet3F4VK8Q0T0GsCOkmznkkbDN159BUQ9HNmAnib9bovS4PMZs/LqvK8sTFX2s/x0KsSTC1rXx+x4u4X094uMs5ZtUGS5kInyXnUFBSFhcUh2RZjzut2y5i4NwZt/gOFAJq41xxbj3qiuLXNmyVe/o/Gauf92FPj1/IxGUx+o2wLMO/ZsvZpLWX24PEX5WSCHeZAKwr7zNDeYBa+xv0=
```

## 🖥️ 2. Configuración Inicial del Servidor (Una sola vez)

### Conectar al servidor
```bash
ssh -p 65002 u276320034@191.101.79.151
```

### Ejecutar bootstrap
```bash
# Descargar y ejecutar el script de bootstrap
curl -sSL https://raw.githubusercontent.com/magutie/pdc/main/bootstrap.sh | bash
```

**O manualmente:**
```bash
set -Eeuo pipefail
APP_NAME="pdc"
APP_DIR="$HOME/apps/$APP_NAME"
REPO_URL="https://github.com/magutie/pdc.git"
BRANCH="main"

mkdir -p "$APP_DIR"/{repos,shared,releases}
cd "$APP_DIR/repos"
if [ ! -d working/.git ]; then
  git clone --depth=1 -b "$BRANCH" "$REPO_URL" working
fi

# Primera release + symlink current
TS=$(date +%Y%m%d%H%M%S)
cp -R "$APP_DIR/repos/working" "$APP_DIR/releases/$TS"
ln -sfn "$APP_DIR/releases/$TS" "$APP_DIR/current"

# Shared para .env, logs, etc.
mkdir -p "$APP_DIR/shared"/{storage,logs}
```

### Crear script de deploy en el servidor
```bash
cat > "$APP_DIR/deploy.sh" <<'BASH'
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
BASH

chmod +x "$APP_DIR/deploy.sh"
```

## 🌐 3. Configurar Document Root (Una sola vez)

### Opción A: Symlink (Recomendada - Zero Downtime)

```bash
WWW_DIR="/home/u276320034/domains/patriotasdelcaribe.com/public_html"
APP_DIR="$HOME/apps/pdc"

# Respaldar public_html actual
mv "$WWW_DIR" "${WWW_DIR}.bak.$(date +%Y%m%d%H%M%S)"

# Crear symlink que apunta a la release activa
ln -s "$APP_DIR/current" "$WWW_DIR"
```

### Opción B: Copia (Si symlink no es posible)

Si la Opción A falla, el script se puede modificar para copiar en lugar de usar symlink.

## 🔒 4. Endurecer Seguridad (Opcional)

Para que la clave de Actions solo pueda ejecutar el deploy:

```bash
# En ~/.ssh/authorized_keys agregar:
command="bash $HOME/apps/pdc/deploy.sh",no-agent-forwarding,no-pty,no-user-rc,no-X11-forwarding <TU-CLAVE-PUBLICA>
```

## ✅ 5. Probar el Deploy

1. Haz un cambio mínimo en el repositorio (README u otro archivo)
2. Haz commit y push:
   ```bash
   git add .
   git commit -m "Test deploy"
   git push origin main
   ```
3. Ve a **Actions** en GitHub → **Deploy to Hostinger via SSH**
4. Verifica que termine con `✅ Deploy OK: [timestamp]`
5. Abre https://patriotasdelcaribe.com/ para confirmar

## 📁 Estructura Final en el Servidor

```
/home/u276320034/apps/pdc/
├── current -> releases/20241201120000/  # Symlink a release activa
├── releases/
│   ├── 20241201120000/                  # Release anterior
│   └── 20241201120130/                  # Release actual
├── repos/
│   └── working/                         # Repo clonado para updates
├── shared/
│   ├── storage/                         # Datos persistentes
│   └── logs/                           # Logs del sistema
└── deploy.sh                           # Script de deploy
```

## 🔄 Cómo Funciona

1. **Push a main** → GitHub Actions se activa
2. **SSH al servidor** → Ejecuta `deploy.sh`
3. **Git pull** → Actualiza `repos/working`
4. **Nueva release** → Copia a `releases/timestamp`
5. **Symlink swap** → `current` apunta a nueva release
6. **Zero downtime** → El sitio se actualiza instantáneamente

## 🛠️ Notas para PDC

- ✅ **PHP plano**: Funciona perfectamente sin Composer
- ✅ **Futuro Laravel**: El script detecta `artisan` automáticamente
- ✅ **Subdominios**: Cambiar `APP_NAME` y `APP_DIR` si es necesario
- ✅ **Rollback**: Simplemente cambiar el symlink `current` a release anterior

## 🆘 Troubleshooting

### Error de permisos SSH
```bash
chmod 600 ~/.ssh/id_rsa
chmod 644 ~/.ssh/id_rsa.pub
```

### Error de known_hosts
```bash
ssh-keyscan -p 65002 191.101.79.151 >> ~/.ssh/known_hosts
```

### Verificar symlink
```bash
ls -la /home/u276320034/domains/patriotasdelcaribe.com/public_html
```

### Logs del deploy
```bash
tail -f /home/u276320034/apps/pdc/shared/logs/deploy.log
```

---

**¡Listo!** 🎉 Tu sitio PDC ahora se despliega automáticamente con cada `git push` a main.
