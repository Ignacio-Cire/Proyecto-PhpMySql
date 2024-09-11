<?php
include_once '../../control/ControlPersona.php'; // Para verificar si el dueño está registrado
include_once '../../control/ControlAuto.php';   // Para manejar la lógica de autos
include_once '../../utils/datasubmited.php';    // Para usar la función dataSubmitted()

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Autos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$datos = dataSubmitted(); // Obtener los datos enviados desde el formulario

if (!empty($datos['Patente']) && !empty($datos['Marca']) && !empty($datos['Modelo']) && !empty($datos['DniDuenio'])) {

    // Crear una instancia de ControlPersona para verificar si el dueño está registrado
    $controlPersona = new ControlPersona();
    $duenio = $controlPersona->buscarPersonas(['NroDni' => $datos['DniDuenio']]);

    if (!empty($duenio)) {
        // Si el dueño existe, procedemos a registrar el auto
        $nuevoAuto = [
            'Patente' => $datos['Patente'],
            'Marca' => $datos['Marca'],
            'Modelo' => $datos['Modelo'],
            'DniDuenio' => $datos['DniDuenio'],
        ];

        // Crear una instancia de ControlAuto para manejar la lógica del auto
        $controlAuto = new ControlAuto();
        $resultado = $controlAuto->agregarAuto($nuevoAuto);

        if ($resultado) {
            echo "<div class='alert alert-success' role='alert'>El auto ha sido registrado correctamente.</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error al registrar el auto. Inténtalo de nuevo.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>El dueño no está registrado en la base de datos. Registra al dueño primero.</div>";
    }

} else {
    echo "<div class='alert alert-warning' role='alert'>Por favor, complete todos los campos del formulario.</div>";
}

// Botón para volver al formulario
echo '<a href="../NuevoAuto.php" class="btn btn-primary mt-4">Volver</a>';
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
