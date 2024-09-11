<?php

include_once 'C:\xampp\htdocs\clone-phpMySql\Proyecto-PhpMySql\phpMySql\modelo\Auto.php';
class ControlAuto
{

    // Método para agregar un nuevo auto

    public function agregarAuto($datosAuto)
    {
        $auto = new Auto();
        $auto->setear($datosAuto['Patente'], $datosAuto['Marca'], $datosAuto['Modelo'], $datosAuto['DniDuenio']);

        return $auto->insertar();
    }

    // Método para modificar un auto existente
    public function modificarAuto($datosAuto)
    {
        $auto = new Auto();
        $auto->setPatente($datosAuto['Patente']);
        $auto->setMarca($datosAuto['Marca']);
        $auto->setModelo($datosAuto['Modelo']);
        $auto->setDniDuenio($datosAuto['DniDuenio']);

        if ($auto->modificar()) {
            return "Auto modificado correctamente.";
        } else {
            return "Error al modificar el auto.";
        }
    }

    // Método para eliminar un auto
    public function eliminarAuto($patente)
    {
        $auto = new Auto();
        $auto->setPatente($patente);

        if ($auto->eliminar()) {
            return "Auto eliminado correctamente.";
        } else {
            return "Error al eliminar el auto.";
        }
    }

    // Método para buscar un auto por patente
    public function buscarAutoPorPatente($patente)
    {
        $where = "Patente = '$patente'";
        $autos = Auto::listar($where);

        // Asumimos que solo debe haber un auto con esta patente
        if (count($autos) > 0) {
            return $autos[0]; // Devuelve solo el primer (y único) auto
        } else {
            return null; // Si no se encuentra el auto
        }
    }

    // Método para listar autos
    public function listar($where = "")
    {
        return Auto::listar($where);
    }

    // Método para cambiar el dueño de un auto
    public function cambiarDuenio($patente, $nuevoDniDuenio)
    {
        $auto = new Auto();
        return $auto->cambiarDuenio($patente, $nuevoDniDuenio);
    }


    // Método para buscar autos por patente
    public function buscarAutos($criterios)
    {
        // Asegúrate de que el criterio 'Patente' esté presente
        if (!isset($criterios['Patente'])) {
            return [];
        }

        $patente = $criterios['Patente'];
        $auto = new Auto();
        return $auto->buscarPorPatente($patente);
    }

}
