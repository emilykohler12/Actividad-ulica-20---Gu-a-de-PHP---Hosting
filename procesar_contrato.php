<?php
    $contrato = $_POST['contrato'];
    echo "<h2>Contrato Modificado</h2>";
    echo "<p>" . nl2br(htmlspecialchars($contrato)) . "</p>";
?>
