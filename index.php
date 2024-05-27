<?php
// Inicializar la sesión si aún no se ha iniciado
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Cargar las dependencias necesarias
require_once('Rutas/rutas.php');


header('Location: Rutas/login.php');
// Aquí puedes incluir otras inicializaciones necesarias para tu aplicación
// Por ejemplo, cargar archivos de configuración, inicializar clases o funciones comunes, etc.
?>
