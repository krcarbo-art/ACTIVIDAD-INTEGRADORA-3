
<?php

// Llamar a la conexion y al modelo
require_once __DIR__ . '/config/conexion.php';
require_once __DIR__ . '/models/Estudiante.php';

// Verificar que los datos lleguen del formulario
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.php');
    exit;
}

// Recibir los datos del formulario
$nombre = trim($_POST['nombre'] ?? '');
$apellido = trim($_POST['apellido'] ?? '');
$correo = trim($_POST['correo'] ?? '');
$telefono = trim($_POST['telefono'] ?? '');
$carrera = trim($_POST['carrera'] ?? '');

// Validar que los campos no esten vacios
if (
    $nombre == '' ||
    $apellido == '' ||
    $correo == '' ||
    $telefono == '' ||
    $carrera == ''
) {
    exit('Todos los campos son obligatorios.');
}

// Validar el correo electronico
if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
    exit('El correo electronico no es valido.');
}

try {

    // Conectar con la base de datos
    $conexion = new Conexion();
    $db = $conexion->conectar();

    // Registrar al estudiante
    $modelo = new Estudiante($db);

    $modelo->registrar(
        $nombre,
        $apellido,
        $correo,
        $telefono,
        $carrera
    );

    // Regresar a la pagina principal
    header('Location: index.php');
    exit;

} catch (Exception $e) {

    error_log($e->getMessage());
    exit('No se pudo guardar el estudiante.');

}
