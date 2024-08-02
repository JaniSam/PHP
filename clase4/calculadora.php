<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULADORA</title>
</head>
<body>
    <h1>Magic Calculator</h1>
    <form action="" method="get">
        <input type="number" name="num1" required>
        <h2>+</h2>
        <input type="number" name="num2" required>
        <button type="submit" id="sumar">SUMAR</button>
    </form>

    <?php
    //si existe 
        if (isset($_GET['num1']) && isset($_GET['num2'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $resultado = ($num1 + $num2);
            echo "<h2>Resultado: ".$resultado."<h2>";
            
        }
    ?>
</body>
</html>