<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset/Empty</title>
</head>
<body>
    <h3>INGRESE UN NUMERO A CORROBORAR</h3>
    <form action="" method="get">
        <input type="number" name="num1">
        <button type="submit" name="btn" >COMPOBAR</button>
    </form>
    <?php
        if (isset($_GET['num1'])) {
            $num = $_GET['num1'];
            if (empty($_GET['num1'])) {
                echo "<h2>NO INGRESÓ NINGUN NÚMERO</h2>";
            } elseif ($num % 2 ==0) {
                echo "<h2>INGRESÓ EL NÚMERO $num Y ES PAR</h2>";
            }else {
                echo "<h2>INGRESÓ EL NÚMERO $num Y ES IMPAR</h2>";
            }
        } 
    ?>
</body>
</html>