<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Número en Texto</title>
</head>
<body>
    <?php
        $valor = rand(1, 3);
        if ($valor == 1) {
            echo "uno";
        } elseif ($valor == 2) {
            echo "dos";
        } else {
            echo "tres";
        }
    ?>
</body>
</html>
