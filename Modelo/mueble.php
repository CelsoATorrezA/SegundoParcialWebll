<?php
require_once __DIR__ . '/../db.php';
require_once __DIR__ . '/../Controlador/UsuarioController.php';
class MuebleModelo {
    public function obtenerTodosLosMuebles() {
        global $conexion;
        $sql = "SELECT * FROM muebles_hogar";
        $consulta = $conexion->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregarMueble($datos) {
        global $conexion;
        $sql = "INSERT INTO muebles_hogar (codigo_mueble, nombre_mueble, tipo, precio, stock, marca, proveedor, material) VALUES (:codigo_mueble, :nombre_mueble, :tipo, :precio, :stock, :marca, :proveedor, :material)";
        $consulta = $conexion->prepare($sql);
        $consulta->execute($datos);
    }

    public function obtenerMueblePorId($id) {
        global $conexion;
        $sql = "SELECT * FROM muebles_hogar WHERE codigo_mueble = :id";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarMueble($datos) {
        global $conexion;
        $sql = "UPDATE muebles_hogar SET codigo_mueble = :codigo_mueble, nombre_mueble = :nombre_mueble, tipo = :tipo, precio = :precio, stock = :stock, marca = :marca, proveedor = :proveedor, material = :material WHERE id = :id";
        $consulta = $conexion->prepare($sql);
        $consulta->execute($datos);
    }

    public function eliminarMueble($id) {
        global $conexion;
        $sql = "DELETE FROM muebles_hogar WHERE id = :id";
        $consulta = $conexion->prepare($sql);
        $consulta->bindParam(':id', $id);
        $consulta->execute();
    }
}
?>
