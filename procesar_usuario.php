<?php
    function verificar_claves($clave1, $clave2) {
        if ($clave1 !== $clave2) {
            echo "<p>Las claves ingresadas no coinciden. Por favor, intente de nuevo.</p>";
        } else {
            echo "<p>Registro exitoso. Bienvenido, usuario!</p>";
        }
    }

    $usuario = $_POST['usuario'];
    $clave1 = $_POST['clave1'];
    $clave2 = $_POST['clave2'];

    echo "<h2>Resultado del Registro</h2>";
    verificar_claves($clave1, $clave2);
?>
