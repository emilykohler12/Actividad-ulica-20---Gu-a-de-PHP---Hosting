<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla del 2</title>
</head>
<body>
    <h2>Tabla del 2 con for</h2>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "2 x $i = " . (2 * $i) . "<br>";
        }
    ?>
    <h2>Tabla del 2 con while</h2>
    <?php
        $i = 1;
        while ($i <= 10) {
            echo "2 x $i = " . (2 * $i) . "<br>";
            $i++;
        }
    ?>
    <h2>Tabla del 2 con do/while</h2>
    <?php
        $i = 1;
        do {
            echo "2 x $i = " . (2 * $i) . "<br>";
            $i++;
        } while ($i <= 10);
    ?>
</body>
</html>
