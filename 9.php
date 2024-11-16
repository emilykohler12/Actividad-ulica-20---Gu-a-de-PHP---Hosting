<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Ingresos</title>
</head>
<body>
    <form action="procesar_ingresos.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Ingresos Mensuales:
        <select name="ingresos">
            <option value="1-1000">1-1000</option>
            <option value="1001-3000">1001-3000</option>
            <option value=">3000">>3000</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
