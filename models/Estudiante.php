
<?php

class Estudiante {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Funcion para registrar estudiantes
    public function registrar($nombre, $apellido, $correo, $telefono, $carrera) {

        $sql = "INSERT INTO estudiantes
                (nombre, apellido, correo, telefono, carrera)
                VALUES
                (:nombre, :apellido, :correo, :telefono, :carrera)";

        $consulta = $this->db->prepare($sql);

        return $consulta->execute([
            ':nombre' => $nombre,
            ':apellido' => $apellido,
            ':correo' => $correo,
            ':telefono' => $telefono,
            ':carrera' => $carrera
        ]);
    }

    // Funcion para mostrar estudiantes
    public function listar() {

        $sql = "SELECT * FROM estudiantes ORDER BY id DESC";

        $consulta = $this->db->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}