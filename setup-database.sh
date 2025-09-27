#!/bin/bash

# 🗄️ Script de Configuración de Base de Datos
# Patriotas del Caribe - Setup MySQL en Hostinger

echo "🗄️ CONFIGURANDO BASE DE DATOS MYSQL..."
echo "======================================"

# Leer variables del .env
if [ -f .env ]; then
    export $(grep -v '^#' .env | xargs)
else
    echo "❌ Archivo .env no encontrado"
    exit 1
fi

# Función para ejecutar SQL
execute_sql() {
    local sql_command="$1"
    mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" -e "$sql_command"
}

echo "🔍 Verificando conexión a la base de datos..."

# Test de conexión
if mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" -e "SELECT 1;" &> /dev/null; then
    echo "✅ Conexión exitosa a la base de datos"
else
    echo "❌ Error de conexión a la base de datos"
    echo "Verifica las credenciales en el archivo .env:"
    echo "DB_HOST=$DB_HOST"
    echo "DB_NAME=$DB_NAME"
    echo "DB_USER=$DB_USER"
    exit 1
fi

echo "📋 Verificando/Creando tablas..."

# Verificar si las tablas ya existen
TABLE_EXISTS=$(mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" -e "SHOW TABLES LIKE 'pendientes_confirmacion';" | wc -l)

if [ "$TABLE_EXISTS" -gt 1 ]; then
    echo "⚠️ Las tablas ya existen. ¿Deseas recrearlas? (se perderán los datos)"
    echo "Continuando sin modificar las tablas existentes..."
else
    echo "🏗️ Creando tablas de la aplicación..."

    # Crear tabla pendientes_confirmacion
    echo "📝 Creando tabla: pendientes_confirmacion"
    execute_sql "
    CREATE TABLE pendientes_confirmacion (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL,
        edad INT NOT NULL,
        fecha_entrada DATE NOT NULL,
        via_entrada VARCHAR(255) NOT NULL,
        escolaridad VARCHAR(255) NOT NULL,
        profesion VARCHAR(255) NOT NULL,
        ocupacion VARCHAR(255) NOT NULL,
        direccion VARCHAR(255) NOT NULL,
        familiares TEXT,
        token VARCHAR(64) UNIQUE NOT NULL,
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_token (token),
        INDEX idx_fecha_registro (fecha_registro),
        INDEX idx_correo (correo)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"

    if [ $? -eq 0 ]; then
        echo "✅ Tabla pendientes_confirmacion creada"
    else
        echo "❌ Error creando tabla pendientes_confirmacion"
    fi

    # Crear tabla registros_confirmados
    echo "📝 Creando tabla: registros_confirmados"
    execute_sql "
    CREATE TABLE registros_confirmados (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(255) NOT NULL,
        correo VARCHAR(255) NOT NULL,
        edad INT NOT NULL,
        fecha_entrada DATE NOT NULL,
        via_entrada VARCHAR(255) NOT NULL,
        escolaridad VARCHAR(255) NOT NULL,
        profesion VARCHAR(255) NOT NULL,
        ocupacion VARCHAR(255) NOT NULL,
        direccion VARCHAR(255) NOT NULL,
        familiares TEXT,
        fecha_confirmacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_fecha_confirmacion (fecha_confirmacion),
        INDEX idx_correo (correo),
        INDEX idx_fecha_entrada (fecha_entrada)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"

    if [ $? -eq 0 ]; then
        echo "✅ Tabla registros_confirmados creada"
    else
        echo "❌ Error creando tabla registros_confirmados"
    fi

    # Crear tabla de logs (opcional para monitoreo)
    echo "📝 Creando tabla: application_logs"
    execute_sql "
    CREATE TABLE application_logs (
        id INT AUTO_INCREMENT PRIMARY KEY,
        level VARCHAR(20) NOT NULL,
        message TEXT NOT NULL,
        context JSON,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        INDEX idx_level (level),
        INDEX idx_created_at (created_at)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;"

    if [ $? -eq 0 ]; then
        echo "✅ Tabla application_logs creada"
    else
        echo "⚠️ Tabla application_logs no se pudo crear (opcional)"
    fi
fi

echo "🔍 Verificando estructura de la base de datos..."

# Mostrar tablas creadas
echo "📊 Tablas en la base de datos:"
mysql -h"$DB_HOST" -u"$DB_USER" -p"$DB_PASS" "$DB_NAME" -e "SHOW TABLES;"

echo ""
echo "📈 Estadísticas de las tablas:"
execute_sql "
SELECT
    TABLE_NAME as 'Tabla',
    TABLE_ROWS as 'Registros',
    ROUND(((DATA_LENGTH + INDEX_LENGTH) / 1024 / 1024), 2) as 'Tamaño_MB'
FROM information_schema.TABLES
WHERE TABLE_SCHEMA = '$DB_NAME'
ORDER BY TABLE_NAME;"

# Insertar datos de prueba (opcional)
echo ""
echo "🧪 ¿Insertar datos de prueba? (opcional)"
echo "Se omitirá la inserción de datos de prueba en producción"

echo ""
echo "✅ CONFIGURACIÓN DE BASE DE DATOS COMPLETADA"
echo "============================================="
echo "🗄️ Base de datos: $DB_NAME"
echo "👤 Usuario: $DB_USER"
echo "🏠 Host: $DB_HOST"
echo "📊 Tablas principales:"
echo "   - pendientes_confirmacion (registros pendientes de confirmación)"
echo "   - registros_confirmados (registros confirmados por email)"
echo "   - application_logs (logs de la aplicación)"
echo ""
echo "🔧 Para verificar la conexión desde PHP, se usarán las credenciales del .env"