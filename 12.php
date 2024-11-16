<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedido de Pizzas</title>
</head>
<body>
    <form action="procesar_pedido.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Dirección: <input type="text" name="direccion"><br><br>

        <input type="checkbox" name="pizzas[]" value="Jamon y queso"> Jamón y Queso
        Cantidad: <input type="number" name="cantidad_jyq"><br>

        <input type="checkbox" name="pizzas[]" value="Napolitana"> Napolitana
        Cantidad: <input type="number" name="cantidad_napolitana"><br>

        <input type="checkbox" name="pizzas[]" value="Muzzarella"> Muzzarella
        Cantidad: <input type="number" name="cantidad_muzzarella"><br><br>

        <input type="submit" value="Confirmar Pedido">
    </form>
</body>
</html>
