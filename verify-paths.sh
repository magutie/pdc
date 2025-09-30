#!/usr/bin/env bash
# Script de diagnóstico para verificar rutas en el servidor

echo "=== Diagnóstico de Rutas del Servidor ==="
echo ""

echo "1. Usuario y HOME:"
echo "   USER: $USER"
echo "   HOME: $HOME"
echo ""

echo "2. Estructura de directorios:"
ls -la "$HOME" | grep -E "^d" | grep -E "domains|public_html|apps"
echo ""

echo "3. Verificando apps/pdc:"
if [ -d "$HOME/apps/pdc" ]; then
    echo "   ✓ $HOME/apps/pdc existe"
    ls -la "$HOME/apps/pdc"
else
    echo "   ✗ $HOME/apps/pdc NO existe"
fi
echo ""

echo "4. Verificando domains:"
if [ -d "$HOME/domains" ]; then
    echo "   ✓ $HOME/domains existe"
    ls -la "$HOME/domains"
else
    echo "   ✗ $HOME/domains NO existe"
fi
echo ""

echo "5. Verificando public_html directo:"
if [ -d "$HOME/public_html" ]; then
    echo "   ✓ $HOME/public_html existe"
    ls -la "$HOME/public_html" | head -10
else
    echo "   ✗ $HOME/public_html NO existe"
fi
echo ""

echo "6. Buscando patriotasdelcaribe.com:"
find "$HOME" -maxdepth 3 -type d -name "*patriotas*" 2>/dev/null || echo "   No encontrado"
echo ""

echo "7. Verificando repos/working:"
if [ -d "$HOME/apps/pdc/repos/working" ]; then
    echo "   ✓ Repo existe"
    cd "$HOME/apps/pdc/repos/working"
    echo "   Branch: $(git branch --show-current)"
    echo "   Last commit: $(git log -1 --oneline)"
fi
echo ""

echo "=== Fin del Diagnóstico ==="