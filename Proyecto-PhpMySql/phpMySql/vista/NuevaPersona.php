
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nueva Persona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los
datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un
nuevo registro en la tabla persona de la base de datos</h2><br><br>
    <h3>Registrar Nueva Persona</h3>
    <form action="./accion/AccionNuevaPersona.php" method="post">
        <div class="form-group">
            <label for="nroDni">Nro DNI:</label>
            <input type="text" name="NroDni" id="nroDni" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" name="Apellido" id="apellido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="Nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNac" id="fechaNac" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="Telefono" id="telefono" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio:</label>
            <input type="text" name="Domicilio" id="domicilio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button><br><br>
    </form>
    <?php
    echo '<a href="./listaPersonas.php" class="btn btn-success mt-4">Ver lista de todas las personas</a>';
    ?><br><br><br>
</div>
</body>
</html>
