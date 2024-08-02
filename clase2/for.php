<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edad</title>
</head>
<body>
    <?php
        //imprimir una tabla de multiplicar con for()
        //luego mejorar para imprimir todas las tablas del 1 al 10
        $num = 1;
        for ($i=0; $i < 10 ; $i++) { 
            echo "<br> Tabla del ".$num."</br>";
            for ($j=1; $j <= 10 ; $j++) { 
                echo "$num x $j = ".$num*$j." <br>";
            }
            echo "<br>";
            $num++;
        } 

?>
</body>
</html>