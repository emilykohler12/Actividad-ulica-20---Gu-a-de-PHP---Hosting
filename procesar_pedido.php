<?php
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $pizzas = $_POST['pizzas'] ?? [];
    $cantidad_jyq = $_POST['cantidad_jyq'] ?? 0;
    $cantidad_napolitana = $_POST['cantidad_napolitana'] ?? 0;
    $cantidad_muzzarella = $_POST['cantidad_muzzarella'] ?? 0;

    $pedido = "Nombre: $nombre\n";
    $pedido .= "Dirección: $direccion\n";
    $pedido .= "Pedido:\n";

    if (in_array("Jamon y queso", $pizzas)) {
        $pedido .= "- Jamón y Queso: $cantidad_jyq\n";
    }
    if (in_array("Napolitana", $pizzas)) {
        $pedido .= "- Napolitana: $cantidad_napolitana\n";
    }
    if (in_array("Muzzarella", $pizzas)) {
        $pedido .= "- Muzzarella: $cantidad_muzzarella\n";
    }
    
    $pedido .= str_repeat("-", 20) . "\n"; // Separador entre pedidos

    file_put_contents("pedidos.txt", $pedido, FILE_APPEND);

    echo "<h2>Pedido confirmado</h2>";
    echo "<p>Su pedido ha sido guardado correctamente.</p>";
?>
