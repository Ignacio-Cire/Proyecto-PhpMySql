<?php

include_once './BaseDatos.php';

class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    // Constructor
    public function __construct($nroDni = null, $apellido = null, $nombre = null, $fechaNac = null, $telefono = null, $domicilio = null) {
        $this->nroDni = $nroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    // Getters y Setters
    public function getNroDni() { return $this->nroDni; }
    public function getApellido() { return $this->apellido; }
    public function getNombre() { return $this->nombre; }
    public function getFechaNac() { return $this->fechaNac; }
    public function getTelefono() { return $this->telefono; }
    public function getDomicilio() { return $this->domicilio; }

    public function setNroDni($nroDni) { $this->nroDni = $nroDni; }
    public function setApellido($apellido) { $this->apellido = $apellido; }
    public function setNombre($nombre) { $this->nombre = $nombre; }
    public function setFechaNac($fechaNac) { $this->fechaNac = $fechaNac; }
    public function setTelefono($telefono) { $this->telefono = $telefono; }
    public function setDomicilio($domicilio) { $this->domicilio = $domicilio; }

    // Método para insertar datos en la base de datos
    public function insertar() {
        $baseDatos = new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES (:nroDni, :apellido, :nombre, :fechaNac, :telefono, :domicilio)";
        $consulta = $baseDatos->getConexion()->prepare($sql);
        $consulta->bindParam(':nroDni', $this->nroDni);
        $consulta->bindParam(':apellido', $this->apellido);
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':fechaNac', $this->fechaNac);
        $consulta->bindParam(':telefono', $this->telefono);
        $consulta->bindParam(':domicilio', $this->domicilio);
        return $consulta->execute();
    }

    // Método para actualizar datos en la base de datos
    public function modificar() {
        $baseDatos = new BaseDatos();
        $sql = "UPDATE persona SET Apellido = :apellido, Nombre = :nombre, fechaNac = :fechaNac, Telefono = :telefono, Domicilio = :domicilio WHERE NroDni = :nroDni";
        $consulta = $baseDatos->getConexion()->prepare($sql);
        $consulta->bindParam(':nroDni', $this->nroDni);
        $consulta->bindParam(':apellido', $this->apellido);
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':fechaNac', $this->fechaNac);
        $consulta->bindParam(':telefono', $this->telefono);
        $consulta->bindParam(':domicilio', $this->domicilio);
        return $consulta->execute();
    }

    // Método para eliminar un registro de la base de datos
    public function eliminar() {
        $baseDatos = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni = :nroDni";
        $consulta = $baseDatos->getConexion()->prepare($sql);
        $consulta->bindParam(':nroDni', $this->nroDni);
        return $consulta->execute();
    }

    // Método para buscar registros en la base de datos
    public static function listar($where = "") {
        $baseDatos = new BaseDatos();
        $sql = "SELECT * FROM persona";
        if ($where != "") {
            $sql .= " WHERE $where";
        }
        $consulta = $baseDatos->getConexion()->prepare($sql);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        $arregloPersonas = [];
        foreach ($resultado as $row) {
            $persona = new Persona();
            $persona->setNroDni($row['NroDni']);
            $persona->setApellido($row['Apellido']);
            $persona->setNombre($row['Nombre']);
            $persona->setFechaNac($row['fechaNac']);
            $persona->setTelefono($row['Telefono']);
            $persona->setDomicilio($row['Domicilio']);
            $arregloPersonas[] = $persona;
        }
        return $arregloPersonas;
    }
}
?>
