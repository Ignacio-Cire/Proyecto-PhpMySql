<?php
include_once '';
include_once '';

class ControlAuto {
    public function obtenerAutos() {
        // Obtener todos los autos
        $autos = Auto::listar("1=1");  // Ajusta la consulta según tu implementación
        
        // Obtener la información de los dueños
        $autosConDueño = [];
        foreach ($autos as $auto) {
            $dueno = Persona::buscar(['NroDni' => $auto->getDniDuenio()]);
            $autosConDueño[] = [
                'auto' => $auto,
                'dueno' => $dueno ? $dueno[0] : null  // Asumimos que `buscar` devuelve un array
            ];
        }
        
        return $autosConDueño;
    }
}
?>
