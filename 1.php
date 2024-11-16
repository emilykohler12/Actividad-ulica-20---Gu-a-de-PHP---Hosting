<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .result {
            padding: 10px;
            background-color: #d1e7dd;
            border: 1px solid #badbcc;
            color: #0f5132;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Generación de un número aleatorio</h2>
    <?php
        $num = rand(1, 100);
        echo "<p>El número generado es: <strong>$num</strong></p>";
        if ($num <= 50) {
            echo "<p>El número es menor o igual a 50.</p>";
        } else {
            echo "<p>El número es mayor a 50.</p>";
        }
    ?>
</body>
</html>
