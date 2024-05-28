<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mueble</title>
</head>
<body>
    <h1>Editar Mueble</h1>
    <?php
    require_once('../Controlador/MuebleController.php');
    
    // Inicializar variables
    $codigo_mueble = '';
    $nombre_mueble = '';
    $tipo = '';
    $precio = '';
    $stock = '';
    $marca = '';
    $proveedor = '';
    $material = '';

    // Verificar si se está editando un mueble existente
    if (isset($_GET['codigo_mueble'])) {
        // Obtener el código del mueble a editar
        $codigo_mueble = $_GET['codigo_mueble'];
        
        // Obtener los detalles del mueble desde la base de datos
        $controlador = new MuebleController();
        $mueble = $controlador->obtenerMueblePorId($codigo_mueble);
        
        // Asignar los valores obtenidos a las variables
        $nombre_mueble = $mueble['nombre_mueble'];
        $tipo = $mueble['tipo'];
        $precio = $mueble['precio'];
        $stock = $mueble['stock'];
        $marca = $mueble['marca'];
        $proveedor = $mueble['proveedor'];
        $material = $mueble['material'];
    }

    // Verificar si se ha enviado el formulario de actualización
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion']) && $_POST['accion'] == 'actualizarMueble') {
        // Obtener los datos del formulario
        $controlador = new MuebleController();
        $mueble = $controlador->obtenerMueblePorId($codigo_mueble);
        $codigo_mueble = $_POST['codigo_mueble'];
        $nombre_mueble = $_POST['nombre_mueble'];
        $tipo = $_POST['tipo'];
        $precio = intval($_POST['precio']); // Convertir a entero
        $stock = intval($_POST['stock']); // Convertir a entero
        $marca = $_POST['marca'];
        $proveedor = $_POST['proveedor'];
        $material = $_POST['material'];

        // Crear un objeto Mueble con los datos recibidos
        $mueble = array(
            'codigo_mueble' => $codigo_mueble,
            'nombre_mueble' => $nombre_mueble,
            'tipo' => $tipo,
            'precio' => $precio,
            'stock' => $stock,
            'marca' => $marca,
            'proveedor' => $proveedor,
            'material' => $material
        );

        // Actualizar el mueble en la base de datos
        $resultado = $controlador->actualizarMueble($mueble);


            echo "<p>Mueble actualizado correctamente.</p>";
            
            echo '<script>window.location.href = "muebles.php";</script>';
     
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="hidden" name="accion" value="actualizarMueble">
        <input type="hidden" name="codigo_mueble" value="<?php echo $codigo_mueble; ?>">
        <label for="nombre_mueble">Nombre:</label><br>
        <input type="text" id="nombre_mueble" name="nombre_mueble" value="<?php echo $nombre_mueble; ?>"><br>
        <label for="tipo">Tipo:</label><br>
        <input type="text" id="tipo" name="tipo" value="<?php echo $tipo; ?>"><br>
        <label for="precio">Precio:</label><br>
        <input type="text" id="precio" name="precio" value="<?php echo $precio; ?>"><br>
        <label for="stock">Stock:</label><br>
        <input type="text" id="stock" name="stock" value="<?php echo $stock; ?>"><br>
        <label for="marca">Marca:</label><br>
        <input type="text" id="marca" name="marca" value="<?php echo $marca; ?>"><br>
        <label for="proveedor">Proveedor:</label><br>
        <input type="text" id="proveedor" name="proveedor" value="<?php echo $proveedor; ?>"><br>
        <label for="material">Material:</label><br>
        <input type="text" id="material" name="material" value="<?php echo $material; ?>"><br><br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
