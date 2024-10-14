
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/error.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Nueva Persona</title>
</head>
<body>

<?php
include_once '../view/estructura/nav.php';
?>
<br>


<?php
include_once '../models/Persona.php';

// Obtener todas las personas
$personas = Persona::listar("1=1"); // Ajusta la consulta según la implementación

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="./assets/css/error.css">';
echo '<body>';
echo '<div class="blurred-background" style="height: 740px;"></div>';
echo '<div class="container" style="height: 740px;">';

echo " <h1>Crear una página listaPersonas.php que muestre un listado con las personas que se
encuentran cargadas</h1> <br> ";
echo "<h2>Listado de Personas Cargadas</h2> <br>";

if (empty($personas)) {
    echo "<div class='alert alert-warning' role='alert'>No hay personas cargadas.</div>";
} else {
    // Mostrar las personas en una tabla
    echo "<div class='table-responsive'>";
    echo "<table class='table table-striped table-dark mt-3'>";
    echo "<thead><tr><th>Nro DNI</th><th>Apellido</th><th>Nombre</th><th>Fecha de Nacimiento</th><th>Teléfono</th><th>Domicilio</th></tr></thead>";
    echo "<tbody>";

    foreach ($personas as $persona) {
        // Mostrar los datos de la persona
        echo "<tr>";
        echo "<td>{$persona->getNroDni()}</td>";
        echo "<td>{$persona->getApellido()}</td>";
        echo "<td>{$persona->getNombre()}</td>";
        echo "<td>{$persona->getFechaNac()}</td>";
        echo "<td>{$persona->getTelefono()}</td>";
        echo "<td>{$persona->getDomicilio()}</td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
echo '<a href="autosPersona.php" class="btn btn-outline-success mt-4">Ver Autos por Persona</a>';
echo '<br>';

echo "</div>";
echo '</body>';
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../view/assets/js/error4.js"></script>
</body>
</html>