<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/error.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Buscar Auto</title>

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
                <a class="nav-link" href="./VerAutos.php">Ver autos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./buscarAuto.php">Buscar Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./listaPersonas.php">Ver todas las personas</a>
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
    </div>
</nav>


<div class="blurred-background" style="height: 740px;"></div>
<div class="container" style="height: 740px; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15); background-color: #;">
    <br>
<h4>Crear una página “BuscarPersona.html” que contenga un formulario que permita cargar un
    numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php”
    busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo
    formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de
    documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la
    persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
    antes generada, no se puede acceder directamente a las clases del ORM.</h4><br>
        <form id="searchForm" style="background-color: #0000; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);" action="./accion/accionBuscarPersonaMod.php" method="post">
            <h1>Buscar Persona:</h1>
            <div class="form-group">
                <label for="dni">Ingresar un DNI:</label>
                <input type="text" id="dni" name="dni" class="form-control" >
                <div id="error-message-dni" class="error-message"></div>
            </div>
            <button type="submit" class="btn btn-outline-success ">Buscar</button>
            <br>
        <a href="javascript:history.back()" class="btn btn-outline-primary mt-4">Volver</a>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../vista/assets/js/error6.js"></script>

</body>
</html>
