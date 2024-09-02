<?php
class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    // Constructor
    public function __construct($patente, $marca, $modelo, $dniDuenio) {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dniDuenio = $dniDuenio;
    }
    //metodos  get
    public function getPatente() {
        return $this->patente;
    }
    
    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDniDuenio() {
        return $this->dniDuenio;
    }

    //metodos set

    public function setPatente($patente) {
        $this->patente = $patente;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }   

    public function setDniDuenio($dniDuenio) {
        $this->dniDuenio = $dniDuenio;
    }
    
    


    // Método para insertar datos en la base de datos
    public function insertar() {
        $baseDatos = new BaseDatos();
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES ('{$this->patente}', '{$this->marca}', '{$this->modelo}', '{$this->dniDuenio}')";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para actualizar datos en la base de datos
    public function modificar() {
        $baseDatos = new BaseDatos();
        $sql = "UPDATE auto SET Marca = '{$this->marca}', Modelo = '{$this->modelo}', DniDuenio = '{$this->dniDuenio}' WHERE Patente = '{$this->patente}'";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para eliminar un registro de la base de datos
    public function eliminar() {
        $baseDatos = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente = '{$this->patente}'";
        return $baseDatos->Ejecutar($sql);
    }

    // Método para buscar registros en la base de datos
    public static function listar($where = "") {
        $baseDatos = new BaseDatos();
        $sql = "SELECT * FROM auto";
        if ($where != "") {
            $sql .= " WHERE $where";
        }
        $resultado = $baseDatos->Ejecutar($sql);
        
        $arregloAutos = [];
        if($resultado) {
            while ($row = $baseDatos->Registro()) {
                $auto = new Auto();
                $auto->setPatente($row['Patente']);
                $auto->setMarca($row['Marca']);
                $auto->setModelo($row['Modelo']);
                $auto->setDniDuenio($row['DniDuenio']);
                $arregloAutos[] = $auto;
            }
        }
        
        return $arregloAutos;
    }
}
?>


}