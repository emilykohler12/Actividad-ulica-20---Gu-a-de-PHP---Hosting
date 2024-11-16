<?php
    $nombre = $_POST['nombre'];
    $ingresos = $_POST['ingresos'];
    if ($ingresos == ">3000") {
        echo "$nombre debe pagar impuestos a las ganancias.";
    } else {
        echo "$nombre no debe pagar impuestos a las ganancias.";
    }
?>
