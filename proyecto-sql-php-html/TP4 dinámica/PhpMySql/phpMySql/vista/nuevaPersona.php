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

<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand fa-2x" href="../../../menu.html">Menu</a>
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
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/Ignacio-Cire" target="_blank">
                        <i class="fab fa-github fa-2x"></i>
                    </a>
                </li>
            </ul>
    </div>
</nav><br><br>


<div class="blurred-background"></div>
<div class="container" style="height: 1331px;">
<br>
    <h4>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos de la persona. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</h4><br>
    <form id="formNuevaPersona" style="background-color: #000000; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);" action="./accion/accionNuevaPersona.php" method="post">
    <h1>Ingrese una nueva persona:</h1>
    <br>
        <div class="form-group">
            <label for="dni">Ingrese un DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control">
            <div id="error-message-dni" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="apellido">Ingrese un Apellido:</label>
            <input type="text" id="apellido" name="apellido" class="form-control">
            <div id="error-message-apellido" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="nombre">Ingrese un Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <div id="error-message-nombre" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="fechaNac">Ingrese una Fecha de nacimiento:</label>
            <input type="date" id="fechaNac" name="fechaNac" class="form-control">
            <div id="error-message-fechaNac" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="telefono">Ingrese un Télefono:</label>
            <input type="number" id="telefono" name="telefono" class="form-control">
            <div id="error-message-telefono" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="domicilio">Ingrese una Dirección:</label>
            <input type="text" id="domicilio" name="domicilio" class="form-control">
            <div id="error-message-domicilio" class="error-message"></div>
        </div>
        <button type="submit" class="btn btn-outline-success">Cargar</button>
        <br>
        <a href="javascript:history.back()" class="btn btn-outline-success mt-4">Volver</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../vista/assets/js/error3.js"></script>
</body>
</html>
