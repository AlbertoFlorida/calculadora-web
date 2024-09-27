<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con PHP</title>
</head>
<body>
    <h1>Calculadora Simple</h1>

    <?php
    $resultado = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
        $num2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: División por cero";
                }
                break;
            default:
                $resultado = "Operación no válida";
        }
    }
    ?>

    <form method="post" action="">
        <label for="numero1">Número 1:</label>
        <input type="number" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Número 2:</label>
        <input type="number" id="numero2" name="numero2" required>
        <br><br>
        <button type="submit" name="operacion" value="multiplicacion">Multiplicación</button>
        <button type="submit" name="operacion" value="division">División</button>
        <br><br>
        <label for="resultado">Resultado:</label>
        <input type="text" id="resultado" value="<?php echo $resultado; ?>" readonly>
    </form>
</body>
</html>
