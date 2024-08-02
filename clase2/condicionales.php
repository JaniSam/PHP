<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <?php
        $edad = 18;
        #condicionel multiple que imprime un texto segun la edad
        #mejora el codigo para que los rangos sean MAYOR: 18 a 80 y MENOR: 11 y 17
        if($edad >=18 && $edad <= 80){
            echo "Eres mayor de edad";
        } else if ($edad >= 11 && $edad <= 17){
            echo "Eres menor de edad";
        } else {
            echo "Algo anda mal :(";
        }
    ?>
</body>
</html>