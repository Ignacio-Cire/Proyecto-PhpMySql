<?php
include_once '../../control/ControlPersona.php'; // Para usar la clase ControlPersona
include_once '../../utils/datasubmited.php'; // Para usar la función dataSubmitted()

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Personas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php

$datos = dataSubmitted(); // Obtener los datos enviados desde el formulario

if (!empty($datos['NroDni']) && !empty($datos['Apellido']) && !empty($datos['Nombre']) && !empty($datos['fechaNac']) && !empty($datos['Telefono']) && !empty($datos['Domicilio'])) {

    // Crear un array con los datos de la persona
    $nuevaPersona = [
        'NroDni' => $datos['NroDni'],
        'Apellido' => $datos['Apellido'],
        'Nombre' => $datos['Nombre'],
        'fechaNac' => $datos['fechaNac'],
        'Telefono' => $datos['Telefono'],
        'Domicilio' => $datos['Domicilio'],
    ];

    // Crear una instancia de ControlPersona para manejar la lógica
    $controlPersona = new ControlPersona();

    // Agregar la nueva persona usando el método adecuado de ControlPersona
    $resultado = $controlPersona->agregarPersona($nuevaPersona);

    if ($resultado) {
        echo "<div class='alert alert-success' role='alert'>La persona ha sido registrada correctamente.</div>";
    } else {
        echo "<div class='alert alert-danger' role='alert'>Error al registrar la persona. Inténtalo de nuevo.</div>";
    }

} else {
    echo "<div class='alert alert-warning' role='alert'>Por favor, complete todos los campos del formulario.</div>";
}

// Botón para volver al formulario
echo '<a href="../NuevaPersona.php" class="btn btn-primary mt-4">Volver</a>';
?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>