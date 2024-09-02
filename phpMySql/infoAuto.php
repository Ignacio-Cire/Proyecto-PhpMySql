<?php
include_once '../controller/ControlAuto.php';

// Crear una instancia del controlador
$controlAuto = new ControlAuto();

// Obtener los autos
$autosConDueño = $controlAuto->obtenerAutos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Autos</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega tu archivo CSS si lo tienes -->
</head>
<body>
    <h1>Listado de Autos</h1>
    
    <?php if (empty($autosConDueño)): ?>
        <p>No hay autos cargados.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Dueño</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autosConDueño as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['auto']->getPatente()); ?></td>
                        <td><?php echo htmlspecialchars($item['auto']->getMarca()); ?></td>
                        <td><?php echo htmlspecialchars($item['auto']->getModelo()); ?></td>
                        <td>
                            <?php if ($item['dueno']): ?>
                                <?php echo htmlspecialchars($item['dueno']->getNombre() . ' ' . $item['dueno']->getApellido()); ?>
                            <?php else: ?>
                                Sin información del dueño
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
