<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Deportes</title>
</head>
<body>
    <form action="procesar_deportes.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Deportes:<br>
        <input type="checkbox" name="deportes[]" value="Futbol"> Fútbol<br>
        <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
        <input type="checkbox" name="deportes[]" value="Tennis"> Tennis<br>
        <input type="checkbox" name="deportes[]" value="Voley"> Voley<br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
