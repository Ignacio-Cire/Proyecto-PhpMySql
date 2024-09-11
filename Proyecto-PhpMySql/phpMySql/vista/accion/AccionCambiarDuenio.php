

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Dueño</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<?php
include_once '../../control/ControlAuto.php';    // Para manejar la lógica del auto
include_once '../../control/ControlPersona.php'; // Para verificar si la persona está registrada
include_once '../../utils/datasubmited.php';    // Para usar la función dataSubmitted()

$datos = dataSubmitted(); // Obtener los datos enviados desde el formulario

if (!empty($datos['Patente']) && !empty($datos['DniDuenio'])) {
    $patente = $datos['Patente'];
    $dniDuenio = $datos['DniDuenio'];

    // Crear instancias de ControlAuto y ControlPersona
    $controlAuto = new ControlAuto();
    $controlPersona = new ControlPersona();

    // Verificar si el auto existe
    $auto = $controlAuto->buscarAutos(['Patente' => $patente]);

    if (!empty($auto)) {
        // Verificar si la persona está registrada
        $duenio = $controlPersona->buscarPersonas(['NroDni' => $dniDuenio]);

        if (!empty($duenio)) {
            // Realizar el cambio de dueño
            $resultado = $controlAuto->cambiarDuenio($patente, $dniDuenio);

            if ($resultado) {
                echo "<div class='alert alert-success' role='alert'>El dueño del auto ha sido cambiado correctamente.</div>";
            } else {
                echo "<div class='alert alert-danger' role='alert'>Error al cambiar el dueño del auto. Inténtalo de nuevo.</div>";
            }
        } else {
            echo "<div class='alert alert-danger' role='alert'>El nuevo dueño no está registrado en la base de datos.</div>";
        }
    } else {
        echo "<div class='alert alert-danger' role='alert'>El auto con la patente proporcionada no existe.</div>";
    }
} else {
    echo "<div class='alert alert-warning' role='alert'>Por favor, complete todos los campos del formulario.</div>";
}

// Botón para volver al formulario
echo '<a href="../CambiarDuenio.php" class="btn btn-primary mt-4">Volver</a>';
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>