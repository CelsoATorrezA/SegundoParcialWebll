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
    // Valores predeterminados para la edición o creación de muebles
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
        // Obtener los detalles del mueble a editar (puedes obtenerlo de la base de datos)
        // Aquí deberías obtener los detalles del mueble a editar según su código
        // Por ahora, solo simularemos valores de muestra
        $codigo_mueble = $_GET['codigo_mueble']; // Obtener el código del mueble a editar
        $nombre_mueble = 'Nombre del Mueble'; // Obtener el nombre del mueble a editar
        $tipo = 'Tipo del Mueble'; // Obtener el tipo del mueble a editar
        $precio = 'Precio del Mueble'; // Obtener el precio del mueble a editar
        $stock = 'Stock del Mueble'; // Obtener el stock del mueble a editar
        $marca = 'Marca del Mueble'; // Obtener la marca del mueble a editar
        $proveedor = 'Proveedor del Mueble'; // Obtener el proveedor del mueble a editar
        $material = 'Material del Mueble'; // Obtener el material del mueble a editar
    }
    ?>
    <form action="guardar_mueble.php" method="POST">
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
