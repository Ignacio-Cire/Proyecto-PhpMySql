<?php
include_once '../modelo/Auto.php';
include_once '../modelo/Persona.php';


// Obtener todos los autos
$autos = Auto::listar("1=1");  // Ajusta la consulta según la implementación

if (empty($autos)) {
    echo "<p>No hay autos cargados.</p>";
} else {
    echo "<table border='1'>";
    echo "<tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr>";
    
    foreach ($autos as $auto) {
        // Buscar el dueño del auto
        $dueno = Persona::buscar(['NroDni' => $auto->getDniDuenio()]);
        $nombreDueño = $dueno ? $dueno[0]->getNombre() . " " . $dueno[0]->getApellido() : "Sin dueño";

        // Mostrar los datos del auto y del dueño
        echo "<tr>";
        echo "<td>{$auto->getPatente()}</td>";
        echo "<td>{$auto->getMarca()}</td>";
        echo "<td>{$auto->getModelo()}</td>";
        echo "<td>{$nombreDueño}</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
