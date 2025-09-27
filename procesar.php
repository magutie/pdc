<?php
$version = file_exists('version.txt') ? trim(file_get_contents('version.txt')) : time();

// CONFIGURACIÓN BASE DE DATOS (Hostinger)
$host = 'localhost';
$dbname = 'u276320034_PDC';
$username = 'u276320034_oropesa';
$password = 'Emily.Aaron@Fuck5227Love';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

// Capturar datos del formulario
$nombre       = $_POST['nombre'] ?? '';
$correo       = $_POST['correo'] ?? '';
$edad         = $_POST['edad'] ?? '';
$fechaEntrada = $_POST['fecha_entrada'] ?? '';
$viaEntrada   = $_POST['via_entrada'] ?? '';
$escolaridad  = $_POST['escolaridad'] ?? '';
$profesion    = $_POST['profesion'] ?? '';
$ocupacion    = $_POST['ocupacion'] ?? '';
$direccion    = $_POST['direccion'] ?? '';
$familiares   = $_POST['familiares'] ?? '';

// Generar token único
$token = bin2hex(random_bytes(32));

// Insertar en tabla temporal
$sql = "INSERT INTO pendientes_confirmacion 
        (nombre, correo, edad, fecha_entrada, via_entrada, escolaridad, profesion, ocupacion, direccion, familiares, token)
        VALUES (:nombre, :correo, :edad, :fecha_entrada, :via_entrada, :escolaridad, :profesion, :ocupacion, :direccion, :familiares, :token)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':nombre' => $nombre,
    ':correo' => $correo,
    ':edad' => $edad,
    ':fecha_entrada' => $fechaEntrada,
    ':via_entrada' => $viaEntrada,
    ':escolaridad' => $escolaridad,
    ':profesion' => $profesion,
    ':ocupacion' => $ocupacion,
    ':direccion' => $direccion,
    ':familiares' => $familiares,
    ':token' => $token
]);

// URL de confirmación
$enlace = "https://www.patriotasdelcaribe.com/confirmar.php?token=" . urlencode($token);

// Enviar correo de confirmación
$asunto = "Confirma tu registro - Patriotas del Caribe";
$mensaje = "Hola $nombre,\n\nGracias por registrarte.\n\nPara confirmar tu inscripción, haz clic en este enlace:\n$enlace\n\nFundación Patriotas del Caribe\nDios, Patria y Libertad.";
$cabeceras = "From: contacto@patriotasdelcaribe.com\r\n";
$cabeceras .= "Reply-To: contacto@patriotasdelcaribe.com\r\n";

if (mail($correo, $asunto, $mensaje, $cabeceras)) {
    echo '
    <div style="
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f0f8ff;
        font-family: Arial, sans-serif;
    ">
        <div style="
            max-width: 700px;
            padding: 60px 40px;
            background-color: #ffffff;
            border: 3px solid #004080;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        ">
            <h2 style="color: #004080; font-size: 42px;">✅ Registro Pendiente</h2>
            <p style="font-size: 28px; color: #333; margin: 30px 0;">
                Revisa tu correo electrónico y haz clic en el enlace de confirmación para completar tu inscripción.
            </p>
            <p style="font-size: 34px; color: #666;">
                Si no ves el mensaje, revisa la carpeta de spam o promociones.
            </p>
        </div>
    </div>';
} else {
    echo '
    <div style="
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #fff5f5;
        font-family: Arial, sans-serif;
    ">
        <div style="
            max-width: 700px;
            padding: 60px 40px;
            background-color: #ffffff;
            border: 3px solid #800000;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        ">
            <h2 style="color: #800000; font-size: 32px;">❌ Error al enviar</h2>
            <p style="font-size: 22px; color: #333; margin: 30px 0;">
                No se pudo enviar el correo de confirmación. Por favor, intenta nuevamente más tarde o contáctanos.
            </p>
        </div>
    </div>';
}


?>
