<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparar 2 numeros</title>
</head>
<body>
    <?php
        //esto es un comentario
        //las variables inicia con el simbolo de $ (pesos)
        $num1= 10;
        $num2= 10;

        if ($num1 > $num2) {
            echo ("El numero mayor es NUMERO_1 que es igual a: ".$num1);
        } else if ($num1 == $num2){
            echo "Los numeros son iguales ";
        }else {
            echo "El numero mayor es NUMERO_2 que es igual a: ".$num2;
        }
        
    ?>
</body>
</html>