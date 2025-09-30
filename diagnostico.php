<?php
// Archivo de diagnóstico para detectar problemas
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h1>Diagnóstico del Sitio</h1>";
echo "<h2>Información de PHP</h2>";
echo "<p>Versión de PHP: " . PHP_VERSION . "</p>";
echo "<p>Directorio actual: " . getcwd() . "</p>";
echo "<p>Archivo actual: " . __FILE__ . "</p>";

echo "<h2>Verificación de archivos includes</h2>";
$includes = [
    'includes/config.php',
    'includes/head.php',
    'includes/schemas.php',
    'includes/performance-optimizer.php',
    'includes/footer.php'
];

foreach ($includes as $file) {
    if (file_exists($file)) {
        echo "<p style='color: green;'>✓ $file existe</p>";

        // Verificar sintaxis
        $output = shell_exec("php -l $file 2>&1");
        if (strpos($output, 'No syntax errors') !== false) {
            echo "<p style='color: green; margin-left: 20px;'>✓ Sin errores de sintaxis</p>";
        } else {
            echo "<p style='color: red; margin-left: 20px;'>✗ Error de sintaxis: $output</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ $file NO existe</p>";
    }
}

echo "<h2>Prueba de carga de index.php</h2>";
echo "<p>Intentando incluir config.php...</p>";

try {
    require_once 'includes/config.php';
    echo "<p style='color: green;'>✓ config.php cargado correctamente</p>";
} catch (Exception $e) {
    echo "<p style='color: red;'>✗ Error al cargar config.php: " . $e->getMessage() . "</p>";
}

echo "<h2>Variables de entorno</h2>";
echo "<p>Archivo .env existe: " . (file_exists('.env') ? 'SÍ' : 'NO') . "</p>";
echo "<p>Archivo env.example existe: " . (file_exists('env.example') ? 'SÍ' : 'NO') . "</p>";

echo "<h2>Configuración PHP</h2>";
echo "<p>error_reporting: " . error_reporting() . "</p>";
echo "<p>display_errors: " . ini_get('display_errors') . "</p>";
echo "<p>log_errors: " . ini_get('log_errors') . "</p>";
echo "<p>error_log: " . ini_get('error_log') . "</p>";

phpinfo();
?>