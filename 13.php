<?php
    $archivo = "pedidos.txt";

    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        echo "<h2>Pedidos de Pizzas</h2>";
        echo "<pre>" . htmlspecialchars($contenido) . "</pre>";
    } else {
        echo "<p>No se encontraron pedidos de pizzas.</p>";
    }
?>
