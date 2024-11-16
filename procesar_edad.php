<?php
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    if ($edad >= 18) {
        echo "$nombre es mayor de edad.";
    } else {
        echo "$nombre es menor de edad.";
    }
?>
