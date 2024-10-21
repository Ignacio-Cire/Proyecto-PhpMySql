<?php


require '../../../../../../vendor/autoload.php';
include_once '../../utils/datasubmited.php';

echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
echo '<link rel="stylesheet" href="../assets/css/error.css">';
echo '<body>';
echo '<div class="blurred-background" style="height: 740px;"></div>';

$objControlPersona = new abmPersona();
$datos = dataSubmitted();
$apellido = $datos['apellido'];
$nombre = $datos['nombre'];
$fechaNac = $datos['fechaNac'];
$telefono = $datos['telefono'];
$direccion = $datos['domicilio'] ?? '';
$captcha = $datos['g-recaptcha-response'];

$dni = isset($datos['dni']) ? $datos['dni'] : null;
$persona = $objControlPersona->buscarPersonas(['NroDni' => $dni]);
$validar = validarCaptcha($captcha);

// Verificación del CAPTCHA
if (!$captcha || !$validar) {
    echo '<div class="container mt-4">';
    echo '<div class="alert alert-danger" role="alert">Verificación CAPTCHA fallida. Por favor, inténtalo de nuevo.</div>';
    echo '<a href="javascript:history.back()" class="btn btn-secondary mt-4">Volver</a>';
    echo '</div>';
    exit;
}

// Si la persona no existe en la base de datos
if (empty($persona)) {
    $arregloNuevaPersona = array(
        'NroDni' => $dni,
        'Apellido' => $apellido,
        'Nombre' => $nombre,
        'fechaNac' => $fechaNac,
        'Telefono' => $telefono,
        'Domicilio' => $direccion,
    );

    // Agregar nueva persona
    $objControlPersona->agregarPersona($arregloNuevaPersona);
    $nuevaPersona = $objControlPersona->buscarPersonas(['NroDni' => $dni]);

    // Mostrar datos cargados exitosamente
    foreach ($nuevaPersona as $objPersona) {
        echo '<div class="container" style="height: 740px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15); background-color: #c6c2decc;">';
        echo '<form style="background-color: #d2d0e1d5;">';
        echo "<h1>Datos cargados exitosamente!</h1><br><br>";
        echo '<table class="table table-dark table-bordered">';
        echo '<thead><tr><th>NroDni</th><th>Apellido</th><th>Nombre</th><th>fechaNac</th><th>Telefono</th><th>Domicilio</th></tr></thead>';
        echo '<tbody>';
        echo '<tr>';
        echo '<td>' . htmlspecialchars($objPersona->getNroDni()) . '</td>';
        echo '<td>' . htmlspecialchars($objPersona->getApellido()) . '</td>';
        echo '<td>' . htmlspecialchars($objPersona->getNombre()) . '</td>';
        echo '<td>' . htmlspecialchars($objPersona->getFechaNac()) . '</td>';
        echo '<td>' . htmlspecialchars($objPersona->getTelefono()) . '</td>';
        echo '<td>' . htmlspecialchars($objPersona->getDomicilio()) . '</td>';
        echo '</tr>';
        echo '</tbody>';
        echo '</table>';
        echo '<br>';
        echo '<a href="javascript:history.back()" class="btn btn-dark mt-4">Volver</a>';
        echo '</form>';
    }
} else {
    // Si la persona ya está registrada
    echo '<div class="container mt-4">';
    echo '<div class="alert alert-danger" role="alert">La persona ingresada ya está cargada en la base de datos.</div>';
    echo '<a href="javascript:history.back()" class="btn btn-secondary mt-4">Volver</a>';
    echo '</div>';
}

echo '</body>';
