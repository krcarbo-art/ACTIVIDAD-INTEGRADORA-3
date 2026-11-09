
<?php

class Conexion {

    public function conectar() {
        $host = "127.0.0.1";
        $dbname = "db_sistema_web";
        $usuario = "root";
        $password = "";

        try {
            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                $usuario,
                $password
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

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
