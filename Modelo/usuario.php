<?php
require_once('../db.php');

class UsuarioModelo {
    public function validarUsuario($usuario, $contrasena) {
        global $conexion;
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario AND contrasena = :contrasena";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':usuario', $usuario);
        $consulta->bindParam(':contrasena', $contrasena);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }
}
?>
