<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Auto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h3>Registrar Nuevo Auto</h3>
    <form action="./accion/AccionNuevoAuto.php" method="post">
        <div class="form-group">
            <label for="patente">Patente:</label>
            <input type="text" name="Patente" id="patente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="marca">Marca:</label>
            <input type="text" name="Marca" id="marca" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="modelo">Modelo:</label>
            <input type="text" name="Modelo" id="modelo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dniDuenio">DNI del Dueño (Debe estar registrado):</label>
            <input type="text" name="DniDuenio" id="dniDuenio" class="form-control" required>
            <small>
                <a href="./NuevaPersona.php" class="btn btn-secondary mt-2">Registrar nuevo dueño</a>
            </small>
        </div><br><br>


        <div class="text-center">
             <button type="submit" class="btn btn-primary">Registrar Auto</button>
        </div>

    </form>
    <br>
    <a href="./listaPersonas.php" class="btn btn-success mt-4" >Ver lista de Personas</a>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
