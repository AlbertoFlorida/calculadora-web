<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

    // Inicializar resultado
    $resultado = '';

    // Realizar la operación correspondiente
    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        default:
            $resultado = 'Operación no válida';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Calculadora</title>
</head>
<body>
    <h1>Resultado</h1>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "Número 1: " . htmlspecialchars($numero1) . "<br>";
            echo "Número 2: " . htmlspecialchars($numero2) . "<br>";
            echo "Operación: " . htmlspecialchars($operacion) . "<br>";
            echo "Resultado: " . htmlspecialchars($resultado);
        }
        ?>
    </p>
    <a href="index.html">Volver</a>
</body>
</html>
