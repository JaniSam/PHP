<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <?php 
        echo ("Valor de PI: ".pi()."</br>"."</br>"); 

        echo("Valor menor: ".min(0, 150, 30, 20, -8, -200)."</br>"); //retorna el menor
        echo("Valor mayor: ".max(0, 150, 30, 20, -8, -200)."</br>"."</br>"); //retorna el mayor

        echo("Valor absoluto: ".abs(-6.7)."</br>"); //retorna el valor absoluto

        echo("Raiz cuadrada de 64: ".sqrt(64)."</br>"); //retorna la raiz cuadrada

        echo ("Redondea el numero 0.60: ".round(0.60)."</br>"); // redondea el valor cuando es mayor o igual a 0.5
        echo("Redondea el numero 0.49: ".round(0.49)."</br>"."</br>"); //redondea el valor cuando es menor o igual a 0.4

        echo("Un numero random: ".rand()."</br>"); //retorna un numero random
        echo("Un numero random entre 10 y 100: ".rand(10, 100)); //retorna un numero random de entre 10 a 100
    ?>
</body>
</html>