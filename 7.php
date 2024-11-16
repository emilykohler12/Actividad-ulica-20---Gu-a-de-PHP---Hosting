<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Estudios</title>
</head>
<body>
    <form action="procesar_estudios.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Nivel de estudios:<br>
        <input type="radio" name="estudios" value="No tiene estudios"> No tiene estudios<br>
        <input type="radio" name="estudios" value="Estudios primarios"> Estudios primarios<br>
        <input type="radio" name="estudios" value="Estudios secundarios"> Estudios secundarios<br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
