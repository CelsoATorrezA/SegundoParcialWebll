<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
        <p style="color: red;">Usuario o contraseña incorrectos</p>
    <?php endif; ?>
    <form action="../Rutas/rutas.php?accion=iniciar_sesion" method="POST">
        <label for="usuario">Usuario:</label><br>
        <input type="text" id="usuario" name="usuario"><br>
        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena"><br><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
