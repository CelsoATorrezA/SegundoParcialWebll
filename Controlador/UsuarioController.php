<?php
require_once __DIR__ . '/../Modelo/mueble.php';
require_once __DIR__ . '/../Controlador/UsuarioController.php';
require_once __DIR__ . '/../Modelo/usuario.php';
class UsuarioController {
    public function iniciarSesion($usuario, $contrasena) {
        $modelo = new UsuarioModelo();
        $datosUsuario = $modelo->validarUsuario($usuario, $contrasena);
        if ($datosUsuario) {
            // Iniciar sesión
            session_start();
            $_SESSION['usuario'] = $usuario;
            // Redirigir a la página de inicio
            header("Location: ../Vista/muebles.php");
            exit();
        } else {
            // Si la autenticación falla, redirigir de nuevo al formulario de inicio de sesión con un mensaje de error
            header("Location: ../Vista/login.php?error=1");
            exit();
        }
    }
}
?>
