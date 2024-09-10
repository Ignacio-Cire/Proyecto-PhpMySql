

<!-- buscarAuto.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/error.css">
    <title>Buscar Auto</title>

</head>
<body>
    <h3>Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero
de patente de un auto, estos datos deberán ser enviados a una pagina “accionBuscarAuto.php” en donde
usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con
la patente ingresada y mostrar los datos en una tabla.</h3>
<div class="container mt-4">
        <h1>Buscar Auto por Patente</h1>
        <form id="searchForm" action="./accion/accionBuscarAuto.php" method="post">
            <div class="form-group">
                <label for="patente">Ingrese el número de Patente:</label>
                <input type="text" id="patente" name="patente" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>
        <div id="error-message" class="error-message"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./error.js"></script>

</body>
</html>

</html>
