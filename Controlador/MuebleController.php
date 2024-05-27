<?php
require_once('../Model/MuebleModelo.php');

class MuebleController {
    public function mostrarTodosLosMuebles() {
        $modelo = new MuebleModelo();
        return $modelo->obtenerTodosLosMuebles();
    }

    public function agregarMueble($datos) {
        $modelo = new MuebleModelo();
        $modelo->agregarMueble($datos);
    }

    public function obtenerMueblePorId($id) {
        $modelo = new MuebleModelo();
        return $modelo->obtenerMueblePorId($id);
    }

    public function actualizarMueble($datos) {
        $modelo = new MuebleModelo();
        $modelo->actualizarMueble($datos);
    }

    public function eliminarMueble($id) {
        $modelo = new MuebleModelo();
        $modelo->eliminarMueble($id);
    }
}
?>
