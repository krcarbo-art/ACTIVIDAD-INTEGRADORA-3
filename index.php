
<?php
require_once __DIR__ . '/config/conexion.php';
require_once __DIR__ . '/models/Estudiante.php';

try {
    $conexion = new Conexion();
    $db = $conexion->conectar();

    $modelo = new Estudiante($db);
    $estudiantes = $modelo->listar();

} catch (Exception $e) {
    error_log($e->getMessage());
    exit("No se pudo cargar la lista de estudiantes.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
</head>
<body>

    <h1>Sistema de Registro de Estudiantes</h1>

    <h2>Registrar estudiante</h2>

    <form action="guardar.php" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Teléfono:</label>
        <input type="tel" name="telefono" required>

        <label>Carrera:</label>
        <input type="text" name="carrera" required>

        <button type="submit">Guardar estudiante</button>
    </form>

    <h2>Estudiantes registrados</h2>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Carrera</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <tr>
                    <?php foreach ($estudiante as $dato): ?>
                        <td>
                            <?= htmlspecialchars((string)$dato, ENT_QUOTES, 'UTF-8') ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
