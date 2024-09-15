
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/error.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Nueva Persona</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="../../../menu.html">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="../vista/VerAutos.php">Ver autos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/buscarAuto.php">Buscar Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/listaPersonas.php">Ver todas las personas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/nuevaPersona.php">Nueva persona</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/nuevoAuto.php">Nuevo Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/cambioDuenio.php">Cambiar dueño</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/buscarPersona.php">Buscar persona/modificar</a>
            </li>
        </ul>
    </div>
</nav><br><br>


<?php
include_once '../modelo/Persona.php';

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
<script src="../vista/assets/js/error4.js"></script>
</body>
</html>