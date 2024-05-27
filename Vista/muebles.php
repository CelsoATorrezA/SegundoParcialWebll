<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muebles</title>
</head>
<body>
    <h1>Muebles</h1>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Marca</th>
            <th>Proveedor</th>
            <th>Material</th>
        </tr>
        <?php
        require_once('../Controlador/MuebleController.php');
        $controlador = new MuebleController();
        $muebles = $controlador->mostrarTodosLosMuebles();
        foreach ($muebles as $mueble) {
            echo "<tr>";
            echo "<td>".$mueble['codigo_mueble']."</td>";
            echo "<td>".$mueble['nombre_mueble']."</td>";
            echo "<td>".$mueble['tipo']."</td>";
            echo "<td>".$mueble['precio']."</td>";
            echo "<td>".$mueble['stock']."</td>";
            echo "<td>".$mueble['marca']."</td>";
            echo "<td>".$mueble['proveedor']."</td>";
            echo "<td>".$mueble['material']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
