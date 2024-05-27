<?php
// Importar los controladores necesarios
require_once('../Controlador/UsuarioController.php');
require_once('../Controlador/MuebleController.php');

// Obtener la acción solicitada desde la URL
if(isset($_GET['accion'])) {
    $accion = $_GET['accion'];
} else {
    $accion = 'inicio'; // Acción por defecto
}

// Enrutamiento basado en la acción solicitada
switch ($accion) {
    case 'login':
        // Mostrar el formulario de inicio de sesión
        include('../Vista/login.php');
        break;
    case 'iniciar_sesion':
        // Procesar el inicio de sesión
        if(isset($_POST['usuario']) && isset($_POST['contrasena'])) {
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
            $controlador = new UsuarioController();
            $controlador->iniciarSesion($usuario, $contrasena);
        }
        break;
    case 'muebles':
        // Mostrar la página de muebles
        include('../Vista/muebles.php');
        break;
    case 'reportes':
        // Mostrar la página de reportes
        include('../Vista/reportes.php');
        break;
    default:
        // Acción por defecto: Mostrar la página de inicio
        include('../Vista/index.php');
        break;
}
?>
