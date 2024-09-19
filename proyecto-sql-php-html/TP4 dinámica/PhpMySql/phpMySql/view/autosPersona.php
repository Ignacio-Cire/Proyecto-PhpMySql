<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/error.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Buscar Persona</title>
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
                <a class="nav-link" href="./buscarAuto.php">Buscar Auto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./listaPersonas.php">Personas</a>
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
</nav>
<br>
<div class="blurred-background" style="height: 740px;"></div>
<div class="container" style="height: 740px;">



    <h3> Crear una página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.</h3><br><br><br>
    <form id="formAutosPersona" style="background-color: #000000; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);" action="./accion/accionBuscarPersona.php" method="post" >
    <h1>Buscar Autos asociados a personas por DNI</h1>
        <div class="form-group">
            <label for="dni"></label>
            <input type="text" id="dni" name="dni" class="form-control" placeholder="Ingrese documento" >
            <div id="error-message" class="error-message"></div>
        </div>
        <button type="submit" class="btn btn-outline-success">Buscar</button>
        <br>
        <a href="./listaPersonas.php" class="btn btn-outline-primary mt-4">Volver a la lista</a>

    </form>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../view/assets/js/error2.js"></script>
</body>
</html>
