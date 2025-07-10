<?php
// Obtener datos
$nombre = $_GET['nombre'] ?? '';
$apellido = $_GET['apellido'] ?? '';
$dni = $_GET['dni'] ?? '';
$correo = $_GET['correo'] ?? '';

// Validaciones
$apellidoValido = !empty(trim($apellido));
$correoValido = filter_var($correo, FILTER_VALIDATE_EMAIL);

// Fecha actual
$fechaActual = date('d/m/Y');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Instancia</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 60px;
        }
        .centrado {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }
        .derecha {
            text-align: right;
            margin-top: 10px;
        }
        .izquierda {
            text-align: left;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<?php if ($apellidoValido && $correoValido): ?>

    <div class="centrado">Instancia</div>

    <div class="derecha">Fecha: <?= $fechaActual ?></div>

    <div class="izquierda">
        <?= htmlspecialchars($nombre) ?> <?= htmlspecialchars($apellido) ?> con D.N.I. <?= htmlspecialchars($dni) ?> y correo electrónico <?= htmlspecialchars($correo) ?>
    </div>

    <p><strong>Expone:</strong></p>

    <p><strong>Solicita:</strong></p>

<?php else: ?>

    <h2>❌ Acceso denegado</h2>
    <p>Debe proporcionar un <strong>apellido válido</strong> y un <strong>correo electrónico correcto</strong>.</p>

<?php endif; ?>

</body>
</html>

