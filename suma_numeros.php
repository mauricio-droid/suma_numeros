<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Números</title>
</head>
<body>
    <h1>Calculadora de Suma</h1>
    <form method="post">
        <label for="numero1">Ingrese el primer número:</label>
        <input type="number" name="numero1" required>
        <br>
        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" name="numero2" required>
        <br>
        <input type="submit" value="sumar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $resultado = $numero1 + $numero2;

        echo "<h2>Resultado:</h2>";
        echo "La suma de $numero1 y $numero2 es: $resultado";
    }
    ?>
</body>
</html>
