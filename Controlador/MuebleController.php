<?php
require_once __DIR__ . '/../Modelo/mueble.php';
require_once __DIR__ . '/../Controlador/UsuarioController.php';
class MuebleController {
    public function mostrarTodosLosMuebles() {
        $modelo = new MuebleModelo();
        return $modelo->obtenerTodosLosMuebles();
    }

    public function agregarMueble($datos) {
        echo("crar");
        var_dump($datos);
        $modelo = new MuebleModelo();
        $modelo->agregarMueble($datos);
    }

    public function obtenerMueblePorId($id) {
        $modelo = new MuebleModelo();
        return $modelo->obtenerMueblePorId($id);
    }

    public function actualizarMueble($datos) {
        echo("actualziar");
        var_dump($datos);
        $modelo = new MuebleModelo();
        $modelo->actualizarMueble($datos);
    }

    public function eliminarMueble($id) {
        $modelo = new MuebleModelo();
        $modelo->eliminarMueble($id);
    }
}
?>
