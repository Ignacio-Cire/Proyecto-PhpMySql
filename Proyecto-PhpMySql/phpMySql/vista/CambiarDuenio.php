<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de Dueño</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Cambio de Dueño del Auto</h2>
    <form action="./accion/AccionCambiarDuenio.php" method="post">
        <div class="form-group">
            <label for="patente">Número de Patente:</label>
            <input type="text" name="Patente" id="patente" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dniDuenio">Número de DNI del Nuevo Dueño:</label>
            <input type="text" name="DniDuenio" id="dniDuenio" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cambiar Dueño</button>
    </form>
    
</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
