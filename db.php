<?php
// Configuración de la base de datos
$host = 'localhost';
$dbname = 'examenweblll';
$usuario = 'root';
$contrasena = '123486';

try {
    // Conexión a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contrasena);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
