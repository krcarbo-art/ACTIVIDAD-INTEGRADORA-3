
<?php

require_once __DIR__ . '/config/conexion.php';

try {
    $conexion = new Conexion();
    $pdo = $conexion->conectar();

    echo "¡Conexión exitosa a la base de datos!";

} catch (Exception $e) {
    echo "Error: No se pudo conectar a la base de datos.";
}
