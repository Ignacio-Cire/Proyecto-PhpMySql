<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Navegación</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../../../style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand fa-2x" href="../../../menu.html">Menu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./VerAutos.php">Ver autos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/buscarAuto.php">Buscar Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../vista/listaPersonas.php">Ver todas las personas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./nuevaPersona.php">Nueva persona</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./nuevoAuto.php">Nuevo Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cambioDuenio.php">Cambiar dueño</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./buscarPersona.php">Buscar persona/modificar</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/Ignacio-Cire" target="_blank">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                </li>
            </ul>
    </div>
</nav> <br> <br> <br>
<?php
include_once '../modelo/Auto.php';
include_once '../modelo/Persona.php';

// Obtener todos los autos
$autos = Auto::listar("1=1"); // Ajusta la consulta según la implementación

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="./assets/css/error.css">';
echo '<body>';
echo '<div class="blurred-background" style="height: 740px;"></div>';
echo '<div class="container" style="height: 740px; background-color: #;">';
echo '<br>';
echo "<h2>Crear una página PHP “VerAutos.php”, en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.</h2>";
echo '<br>';

if (empty($autos)) {
    echo "<div class='alert alert-warning' role='alert'>No hay autos cargados.</div>";
} else {
    // Mostrar los autos en una tabla
    echo "<table class='table table-striped table-dark mt-3'>";
    echo "<thead><tr><th>Patente</th><th>Marca</th><th>Modelo</th><th>Dueño</th></tr></thead>";
    echo "<tbody class='bg-dark-custom'>";

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

    echo "</tbody>";
    echo "</table>";
}

echo "</div>";
echo '</body>';
?>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>