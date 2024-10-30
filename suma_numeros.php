<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma de Números</title>
</head>
<body>
    <h1>Calculadora de Suma</h1>
    <form method="post">
        <label for="numero1">Ingrese el primer número:</label>
        <!-- La palabra "required" ayuda a filtrar desde el HTML los campos vacíos, para fines prácticos la omitimos -->
        <input type="number" name="numero1"> <!-- required -->
        <br>
        <label for="numero2">Ingrese el segundo número:</label>
        <input type="number" name="numero2"> <!-- required -->
        <br>
        <input type="submit" value="Sumar">
    </form>

    <?php
        // Se envían los datos a traves del método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Se valida manualmente si las variables están vacías
            if ($_POST['numero1'] == "" || $_POST['numero2'] == "") {
                echo '<script language="javascript">alert("Los campos deben ser llenados");</script>';
                throw new Exception ("Campos vacíos");
            } else {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $resultado = $numero1 + $numero2;
    
                echo "<h2>Resultado:</h2>";
                echo "La suma de $numero1 y $numero2 es: $resultado";
            }   
            
        } 

                            // ** Otra manera de validar campos vacíos es con la función empty **
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     if (empty($_POST['numero1']) || empty($_POST['numero2'])) {
        //         echo '<script language="javascript">alert("Los campos deben ser llenados");</script>';
        //         throw new Exception ("Los campos deben ser llenados");
        //     } else {
        //         $numero1 = $_POST['numero1'];
        //         $numero2 = $_POST['numero2'];
        //         $resultado = $numero1 + $numero2;
    
        //         echo "<h2>Resultado:</h2>";
        //         echo "La suma de $numero1 y $numero2 es: $resultado";
        //     }
        // }
        
    
    ?>
</body>
</html>
