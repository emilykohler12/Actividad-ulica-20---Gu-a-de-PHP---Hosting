<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <form action="procesar_usuario.php" method="post">
        Nombre de usuario: <input type="text" name="usuario" required><br>
        Clave: <input type="password" name="clave1" required><br>
        Repetir Clave: <input type="password" name="clave2" required><br><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
