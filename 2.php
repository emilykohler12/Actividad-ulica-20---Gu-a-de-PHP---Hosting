<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tipos de Variables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h2>Ejemplo de Tipos de Variables</h2>
    <?php
        $entero = 10; // Integer
        $decimal = 20.5; // Double
        $cadena = "Hola Mundo"; // String
        $booleano = true; // Boolean
        
        echo "<p>Variable Integer: $entero</p>";
        echo "<p>Variable Double: $decimal</p>";
        echo "<p>Variable String: $cadena</p>";
        echo "<p>Variable Boolean: " . ($booleano ? 'true' : 'false') . "</p>";
    ?>
</body>
</html>
