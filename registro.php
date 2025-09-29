<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";   // cambia si tu usuario es diferente
$password = "";       // pon tu contraseña de MySQL si tienes
$dbname = "proyecto_anderson";

// Conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];
$confirmar = $_POST['confirmar'];

// Validar contraseña
if ($clave !== $confirmar) {
    die("❌ Las contraseñas no coinciden. <a href='registro.html'>Volver</a>");
}

// Encriptar contraseña
$claveHash = password_hash($clave, PASSWORD_DEFAULT);

// Insertar datos
$sql = "INSERT INTO usuarios (nombre, correo, clave) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $nombre, $correo, $claveHash);

if ($stmt->execute()) {
    echo "✅ Registro exitoso. <a href='registro.html'>Volver</a>";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
