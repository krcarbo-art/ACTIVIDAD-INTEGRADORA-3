
<?php

class Conexion {

    public function conectar() {

        // Obtener los datos de configuracion
        $config = require __DIR__ . '/credenciales.php';

        $host = $config['host'];
        $dbname = $config['dbname'];
        $usuario = $config['usuario'];
        $password = $config['password'];

        try {
            // Crear la conexion mediante PDO
            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                $usuario,
                $password
            );

            // Configurar el manejo de errores
            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            // Obtener los registros como arreglos
            $pdo->setAttribute(
                PDO::ATTR_DEFAULT_FETCH_MODE,
                PDO::FETCH_ASSOC
            );

            return $pdo;

        } catch (PDOException $e) {
            error_log($e->getMessage());

            throw new RuntimeException(
                "No se pudo conectar a la base de datos."
            );
        }
    }
}
