<?php
require_once('../Controlador/MuebleController.php');

if(isset($_GET['codigo_mueble'])) {
    $codigo_mueble = $_GET['codigo_mueble'];

    // Instancia del controlador
    $controlador = new MuebleController();

    // Llama al método eliminarMueble
    $controlador->eliminarMueble($codigo_mueble);

    // Redirecciona a la página de la tabla de muebles después de eliminar
    header("Location: muebles.php");
    exit();
} else {
    echo "Código de mueble no especificado.";
}
?>
