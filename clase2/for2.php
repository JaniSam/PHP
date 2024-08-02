<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        #imprimir los numeros pares en rojo e impares en verde del 1 al 100
        for ($i=1; $i <= 100; $i++) { 
            #el numero es par si el resto de divir entre dos es cero
            if ($i%2 == 0) {
                echo "<p style = 'color:red'> $i</p>";
            }else{
                echo "<p style = 'color:green'> $i</p>";
            }
        }
    ?>
</body>
</html>