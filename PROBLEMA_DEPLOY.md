# Problema de Deploy - Sitio en Blanco

**Fecha:** 30 de septiembre de 2025
**Estado:** PENDIENTE DE RESOLUCIÓN
**Prioridad:** CRÍTICA

## Descripción del Problema

El sitio web patriotasdelcaribe.com aparece en blanco después de hacer deploy, a pesar de que:
- ✅ Todos los archivos PHP tienen sintaxis correcta (verificado con `php -l`)
- ✅ El sitio funciona perfectamente en local (`php -S localhost:8000`)
- ✅ Los GitHub Actions se ejecutan exitosamente (status: "success")
- ✅ El script `deploy.sh` se ejecuta sin errores

## Diagnóstico Realizado

### 1. Verificación de Sintaxis PHP
```bash
# Todos los archivos pasan la verificación
php -l includes/performance-optimizer.php  # ✓ OK
php -l includes/head.php                    # ✓ OK
php -l includes/config.php                  # ✓ OK
php -l index.php                            # ✓ OK
```

### 2. Correcciones Aplicadas
- **Commit e3c24cc:** Corregido error de sintaxis en `performance-optimizer.php`
  - Líneas 145, 262, 263: Escapadas comillas simples en atributos `onload`
  - Cambio: `this.rel='stylesheet'` → `this.rel=\'stylesheet\'`

### 3. Verificación de GitHub Actions
```bash
curl -s "https://api.github.com/repos/magutie/pdc/actions/runs?per_page=3"
```
- **Run #14 (db75678):** Status: completed, Conclusion: success
- **Run #13 (e3c24cc):** Status: completed, Conclusion: success
- **Run #12 (151779e):** Status: completed, Conclusion: success

## Causa Raíz Identificada

**El problema NO es el código, sino la CONFIGURACIÓN DEL SERVIDOR**

El script `deploy.sh` está desplegando los archivos a:
```
/home/[usuario]/apps/pdc/current/
```

Pero el servidor web (Apache) está configurado para servir desde:
```
/home/[usuario]/public_html/
# O posiblemente:
/home/[usuario]/domains/patriotasdelcaribe.com/public_html/
```

### Evidencia
- El archivo `diagnostico.php` retorna 404, lo que confirma que el servidor NO está leyendo desde la carpeta donde se hace deploy
- Los GitHub Actions reportan éxito, lo que significa que el deploy SÍ se ejecuta
- El workflow usa `deploy.sh` que crea symlink a `$APP_DIR/current`

## Solución Requerida

Hay **3 opciones** para resolver esto:

### Opción 1: Cambiar Document Root en cPanel (RECOMENDADO)
1. Acceder a cPanel de Hostinger
2. Ir a "Domains" o "Addon Domains"
3. Editar el dominio `patriotasdelcaribe.com`
4. Cambiar el "Document Root" a: `/home/[usuario]/apps/pdc/current`
5. Guardar cambios

### Opción 2: Crear Enlace Simbólico por SSH
```bash
# Conectar por SSH a Hostinger
ssh [usuario]@[host]

# Respaldar public_html actual si existe
mv public_html public_html.backup

# Crear symlink desde public_html hacia el deploy
ln -s apps/pdc/current public_html

# Verificar
ls -la public_html
# Debe mostrar: public_html -> apps/pdc/current
```

### Opción 3: Modificar deploy.sh para Usar public_html
Cambiar el script `deploy.sh` para que depliegue directamente a `public_html`:

```bash
#!/usr/bin/env bash
set -Eeuo pipefail

APP_NAME="pdc"
PUBLIC_HTML="$HOME/public_html"  # Cambiar esto
REPO_DIR="$HOME/apps/$APP_NAME/repos/working"
BRANCH="main"

cd "$REPO_DIR"
git fetch --all --prune
git checkout "$BRANCH"
git pull --ff-only

# Copiar archivos a public_html (excluyendo .git, node_modules, etc)
rsync -av --delete \
  --exclude='.git' \
  --exclude='node_modules' \
  --exclude='vendor' \
  --exclude='.env' \
  "$REPO_DIR/" "$PUBLIC_HTML/"

echo "✅ Deploy OK a public_html"
```

## Archivos Involucrados

### Archivos Corregidos (Commits Recientes)
- `includes/performance-optimizer.php` - Error de sintaxis corregido
- `CLAUDE.md` - Documentación actualizada
- `diagnostico.php` - Archivo de diagnóstico creado

### Archivos de Configuración de Deploy
- `.github/workflows/deploy.yml` - Workflow de GitHub Actions
- `deploy.sh` - Script de deploy ejecutado en servidor
- `bootstrap.sh` - Script de inicialización

## Próximos Pasos

1. **INMEDIATO:** Determinar la ruta real del Document Root en Hostinger
   - Acceder a cPanel → Domains → Verificar configuración
   - O ejecutar por SSH: `pwd` desde public_html

2. **IMPLEMENTAR:** Una de las 3 soluciones descritas arriba

3. **VERIFICAR:** Después de implementar la solución
   - Acceder a: `https://www.patriotasdelcaribe.com/`
   - Acceder a: `https://www.patriotasdelcaribe.com/diagnostico.php`
   - Debe mostrar contenido, no 404 ni página en blanco

4. **LIMPIAR:** Una vez resuelto
   - Eliminar `diagnostico.php` del repositorio
   - Verificar que todas las páginas cargan correctamente

## Información de Contacto del Servidor

**Hosting:** Hostinger
**Repositorio:** https://github.com/magutie/pdc
**Dominio:** https://www.patriotasdelcaribe.com

**Variables de Entorno Necesarias (en servidor):**
- Ver archivo: `env.example` para la plantilla
- Ubicación en servidor: `$HOME/apps/pdc/shared/.env`

## Comandos Útiles para Diagnóstico

```bash
# Conectar por SSH
ssh [usuario]@[host] -p [puerto]

# Ver estructura de directorios
ls -la ~
ls -la ~/apps/pdc/
ls -la ~/public_html/

# Ver qué está en el deploy actual
ls -la ~/apps/pdc/current/

# Ver logs de Apache (si están disponibles)
tail -f ~/logs/error.log
tail -f ~/logs/access.log

# Verificar versión de PHP
php -v

# Verificar sintaxis de archivos en servidor
find ~/apps/pdc/current -name "*.php" -exec php -l {} \;
```

## Historial de Cambios

- **2025-09-30 04:23:** Commit e3c24cc - Corregido error de sintaxis PHP
- **2025-09-30 04:25:** Commit db75678 - Agregado diagnostico.php
- **2025-09-30 04:27:** Commit f6083e7 - Test deploy vacío
- **2025-09-30 [hora]:** Este documento creado

## Notas Adicionales

- El código funciona correctamente en local (PHP 8.4.1)
- El servidor puede usar una versión diferente de PHP (verificar con `php -v`)
- Los archivos `includes/*.php` están todos sintácticamente correctos
- El problema es 100% de configuración del servidor, no del código

---

**ACCIÓN REQUERIDA:** Configurar el Document Root del dominio para apuntar a `/home/[usuario]/apps/pdc/current/` o crear enlace simbólico desde `public_html`.