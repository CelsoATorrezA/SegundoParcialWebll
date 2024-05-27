<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../Controlador/UsuarioController.php';
class UsuarioModelo {
    public function validarUsuario($usuario, $contrasena) {
        global $conexion;
        $sql = "SELECT * FROM login WHERE email = :usuario AND password_hash = :contrasena";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':usuario', $usuario);
        $consulta->bindParam(':contrasena', $contrasena);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
?>
