<?php
class Persona {
    private $nroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    // Constructor
    public function __construct($nroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this->nroDni = $nroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    // Getters
    public function getNroDni() {
        return $this->nroDni;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }

    // Setters
    public function setNroDni($nroDni) {
        $this->nroDni = $nroDni;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFechaNac($fechaNac) {
        $this->fechaNac = $fechaNac;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setDomicilio($domicilio) {
        $this->domicilio = $domicilio;
    }

    // Método para insertar datos en la base de datos
    public function insertar() {
        $baseDatos = new BaseDatos();
        $sql = "INSERT INTO persona (NroDni, Apellido, Nombre, fechaNac, Telefono, Domicilio) VALUES ('{$this->nroDni}', '{$this->apellido}', '{$this->nombre}', '{$this->fechaNac}', '{$this->telefono}', '{$this->domicilio}')";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para actualizar datos en la base de datos
    public function modificar() {
        $baseDatos = new BaseDatos();
        $sql = "UPDATE persona SET Apellido = '{$this->apellido}', Nombre = '{$this->nombre}', fechaNac = '{$this->fechaNac}', Telefono = '{$this->telefono}', Domicilio = '{$this->domicilio}' WHERE NroDni = '{$this->nroDni}'";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para eliminar un registro de la base de datos
    public function eliminar() {
        $baseDatos = new BaseDatos();
        $sql = "DELETE FROM persona WHERE NroDni = '{$this->nroDni}'";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para buscar registros en la base de datos
    public static function listar($where = "") {
        $baseDatos = new BaseDatos();
        $sql = "SELECT * FROM persona";
        if ($where != "") {
            $sql .= " WHERE $where";
        }
        $baseDatos->Ejecutar($sql);
        return $baseDatos->Registro();
    }
}
?>
    