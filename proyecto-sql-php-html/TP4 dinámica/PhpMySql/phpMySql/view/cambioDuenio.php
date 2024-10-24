<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/error.css">
    <link rel="stylesheet" href="../../../style.css">
    <title>Cambio Dueño</title>
</head>
<body>

<?php
include_once '../view/estructura/nav.php';
?>
<br>

<div class="blurred-background" style="height: 950px;"></div>
<div class="container" style="height: 950px;">
<br>
    <h4>Crear una página “CambioDuenio.php” que contenga un formulario en donde se solicite el
numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados
a una página “accionCambioDuenio.php” en donde se realice cambio del dueño del auto de la patente
ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren
cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control
antes generada, no se puede acceder directamente a las clases del ORM.</h4><br>
    <form id="formCambioDuenio" style="background-color: #000000; box-shadow: 0px 0px 5px 5px rgba(0,0,0,0.15);" action="./accion/accionCambioDuenio.php" method="post">
    <h1>Cambio de dueño:</h1>
    <br>
        <div class="form-group">
            <label for="patente">Ingrese una Patente:</label>
            <input type="text" id="patente" name="patente" class="form-control">
            <div id="error-message-patente" class="error-message"></div>
        </div>
        <div class="form-group">
            <label for="dni">Ingrese un DNI:</label>
            <input type="text" id="dni" name="dni" class="form-control">
            <div id="error-message-dni" class="error-message"></div>
        </div>
        <button type="submit" class="btn btn-outline-success">Cargar</button>
        <br>
        <a href="nuevaPersona.php" class="btn btn-outline-success mt-4">Cargar una Persona</a>
    <a href="nuevoAuto.php" class="btn btn-outline-success mt-4">Cargar un Auto</a>
    <br>
    <a href="javascript:history.back()" class="btn btn-outline-primary mt-4">Volver</a>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="../view/assets/js/error5.js"></script>
</body>
</html>
