<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// CONFIGURACIÓN BASE DE DATOS
$host = 'localhost';
$dbname = 'u276320034_PDC';
$username = 'u276320034_oropesa';
$password = 'Emily.Aaron@Fuck5227Love';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    mostrarMensaje("❌ Error de conexión", "No se pudo conectar a la base de datos.", "#800000");
    exit;
}

// Capturar token
$token = $_GET['token'] ?? '';

if (!$token) {
    mostrarMensaje("❌ Token inválido", "El token proporcionado es inválido o no fue especificado.", "#800000");
    exit;
}

// Buscar en tabla temporal
$stmt = $pdo->prepare("SELECT * FROM pendientes_confirmacion WHERE token = :token LIMIT 1");
$stmt->execute([':token' => $token]);
$registro = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$registro) {
    mostrarMensaje("❌ Token no válido", "Este token ya fue confirmado o no existe.", "#800000");
    exit;
}

// Insertar en tabla definitiva
$insert = $pdo->prepare("INSERT INTO registro_cubanos 
(nombre, correo, edad, fecha_entrada, via_entrada, escolaridad, profesion, ocupacion, direccion, familiares)
VALUES 
(:nombre, :correo, :edad, :fecha_entrada, :via_entrada, :escolaridad, :profesion, :ocupacion, :direccion, :familiares)");

$insert->execute([
    ':nombre'       => $registro['nombre'],
    ':correo'       => $registro['correo'],
    ':edad'         => $registro['edad'],
    ':fecha_entrada'=> $registro['fecha_entrada'],
    ':via_entrada'  => $registro['via_entrada'],
    ':escolaridad'  => $registro['escolaridad'],
    ':profesion'    => $registro['profesion'],
    ':ocupacion'    => $registro['ocupacion'],
    ':direccion'    => $registro['direccion'],
    ':familiares'   => $registro['familiares']
]);

// Eliminar de tabla temporal
$pdo->prepare("DELETE FROM pendientes_confirmacion WHERE token = :token")->execute([':token' => $token]);

// Enviar notificación al administrador
$mensajeAdmin = "📩 NUEVO REGISTRO CONFIRMADO\n\n" .
    "Nombre: {$registro['nombre']}\n" .
    "Correo: {$registro['correo']}\n" .
    "Edad: {$registro['edad']}\n" .
    "Fecha de Entrada: {$registro['fecha_entrada']}\n" .
    "Vía de Entrada: {$registro['via_entrada']}\n" .
    "Escolaridad: {$registro['escolaridad']}\n" .
    "Profesión: {$registro['profesion']}\n" .
    "Ocupación: {$registro['ocupacion']}\n" .
    "Dirección: {$registro['direccion']}\n" .
    "Familiares: {$registro['familiares']}";

mail(
    "contacto@patriotasdelcaribe.com",
    "📥 Nuevo registro confirmado - Patriotas del Caribe",
    $mensajeAdmin,
    "From: contacto@patriotasdelcaribe.com\r\n"
);

// Mostrar mensaje final con botón a grupo de WhatsApp
$mensajeFinal = '
    Tu inscripción ha sido confirmada exitosamente. ¡Gracias por formar parte de <strong>Patriotas del Caribe</strong>!<br><br>
    Únete a nuestro grupo de WhatsApp para mantenerte informado y conectado:<br><br>
    <a href="https://chat.whatsapp.com/DimB9T4dukkCvSVBVq1iuV " target="_blank" style="
        display: inline-block;
        font-size: 18px;
        background-color: #25d366;
        color: white;
        padding: 12px 24px;
        border-radius: 6px;
        text-decoration: none;
    ">💬 Unirme al grupo de WhatsApp</a>
';

mostrarMensaje("✅ Registro Confirmado", $mensajeFinal, "#004080");


// Función para mostrar mensajes con estilo
function mostrarMensaje($titulo, $mensaje, $colorBorde) {
    echo '
    <div style="display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f0f8ff; font-family: Arial, sans-serif;">
        <div style="max-width: 700px; padding: 60px 40px; background-color: #ffffff; border: 3px solid ' . $colorBorde . '; border-radius: 12px; box-shadow: 0 0 20px rgba(0,0,0,0.1); text-align: center;">
            <h2 style="color: ' . $colorBorde . '; font-size: 36px;">' . $titulo . '</h2>
            <p style="font-size: 22px; color: #333; margin: 30px 0;">' . $mensaje . '</p>
            <a href="index.php" style="display: inline-block; margin-top: 20px; font-size: 18px; color: #ffffff; background-color: ' . $colorBorde . ';
                padding: 12px 24px; border-radius: 6px; text-decoration: none;">
                Volver al inicio
            </a>
        </div>
    </div>';
}
?>

