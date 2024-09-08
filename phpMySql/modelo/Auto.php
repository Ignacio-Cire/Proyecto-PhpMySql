<?php


include_once './BaseDatos.php';
class Auto {
    // Atributos privados de la clase Auto
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    // Constructor: permite inicializar el objeto con valores al momento de crearlo
    // Si no se pasan argumentos, se inicializan con null
    public function __construct($patente = null, $marca = null, $modelo = null, $dniDuenio = null) {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dniDuenio = $dniDuenio;
    }

    // Métodos getters para obtener el valor de los atributos privados

    // Devuelve el valor de la patente del auto
    public function getPatente() {
        return $this->patente;
    }

    // Devuelve el valor de la marca del auto
    public function getMarca() {
        return $this->marca;
    }

    // Devuelve el valor del modelo del auto
    public function getModelo() {
        return $this->modelo;
    }

    // Devuelve el valor del DNI del dueño del auto
    public function getDniDuenio() {
        return $this->dniDuenio;
    }

    // Métodos setters para establecer el valor de los atributos privados

    // Establece el valor de la patente
    public function setPatente($patente) {
        $this->patente = $patente;
    }

    // Establece el valor de la marca
    public function setMarca($marca) {
        $this->marca = $marca;
    }

    // Establece el valor del modelo
    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    // Establece el valor del DNI del dueño
    public function setDniDuenio($dniDuenio) {
        $this->dniDuenio = $dniDuenio;
    }

    // Método para insertar un nuevo registro en la base de datos
    public function insertar() {
        // Se crea una instancia de la clase BaseDatos
        $baseDatos = new BaseDatos();
        // Consulta SQL para insertar un auto en la tabla 'auto', usando placeholders para mayor seguridad
        $sql = "INSERT INTO auto (Patente, Marca, Modelo, DniDuenio) VALUES (:patente, :marca, :modelo, :dniDuenio)";
        // Se prepara la consulta para ser ejecutada más tarde
        $consulta = $baseDatos->getConexion()->prepare($sql);

        // Se asignan los valores a los placeholders usando bindParam, evitando SQL Injection
        $consulta->bindParam(':patente', $this->patente);
        $consulta->bindParam(':marca', $this->marca);
        $consulta->bindParam(':modelo', $this->modelo);
        $consulta->bindParam(':dniDuenio', $this->dniDuenio);

        // Se ejecuta la consulta y devuelve el resultado (true o false)
        return $consulta->execute();
    }

    // Método para modificar un registro existente en la base de datos
    public function modificar() {
        // Se crea una instancia de la clase BaseDatos
        $baseDatos = new BaseDatos();
        // Consulta SQL para actualizar los valores de un auto donde la patente coincida con la del objeto
        $sql = "UPDATE auto SET Marca = :marca, Modelo = :modelo, DniDuenio = :dniDuenio WHERE Patente = :patente";
        // Se prepara la consulta
        $consulta = $baseDatos->getConexion()->prepare($sql);

        // Se asignan los valores a los placeholders usando bindParam
        $consulta->bindParam(':patente', $this->patente);
        $consulta->bindParam(':marca', $this->marca);
        $consulta->bindParam(':modelo', $this->modelo);
        $consulta->bindParam(':dniDuenio', $this->dniDuenio);

        // Se ejecuta la consulta y devuelve el resultado
        return $consulta->execute();
    }

    // Método para eliminar un registro de la base de datos
    public function eliminar() {
        // Se crea una instancia de la clase BaseDatos
        $baseDatos = new BaseDatos();
        // Consulta SQL para eliminar un auto donde la patente coincida con la del objeto
        $sql = "DELETE FROM auto WHERE Patente = :patente";
        // Se prepara la consulta
        $consulta = $baseDatos->getConexion()->prepare($sql);

        // Se asigna el valor de la patente al placeholder
        $consulta->bindParam(':patente', $this->patente);

        // Se ejecuta la consulta y devuelve el resultado
        return $consulta->execute();
    }

    // Método estático para listar todos los registros de autos, permite agregar condiciones mediante $where
    public static function listar($where = "") {
        // Se crea una instancia de la clase BaseDatos
        $baseDatos = new BaseDatos();
        // Consulta SQL para seleccionar todos los autos, se puede agregar una condición con WHERE
        $sql = "SELECT * FROM auto";
        if ($where != "") {
            $sql .= " WHERE $where"; // Si hay una condición, se añade a la consulta
        }
        // Se prepara y ejecuta la consulta
        $consulta = $baseDatos->getConexion()->prepare($sql);
        $consulta->execute();
        // Se obtienen los resultados como un arreglo asociativo
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        
        // Se crea un array para almacenar los objetos Auto
        $arregloAutos = [];
        // Se recorre cada fila del resultado
        foreach ($resultado as $row) {
            // Se crea una nueva instancia de Auto y se setean sus atributos
            $auto = new Auto();
            $auto->setPatente($row['Patente']);
            $auto->setMarca($row['Marca']);
            $auto->setModelo($row['Modelo']);
            $auto->setDniDuenio($row['DniDuenio']);
            // Se agrega el objeto Auto al arreglo
            $arregloAutos[] = $auto;
        }

        // Se retorna el arreglo de autos
        return $arregloAutos;
    }
}
?>
