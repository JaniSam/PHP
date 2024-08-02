<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEMPERATURA</title>
</head>
<body>
    <?php
        #apartir de for(), existe el while(): ciclo mientras
        $temp = 0;
        $color = 100;
        #a diferencia de for(), el while() requiere indicar el contador o sumador
        #mientras mas proximo el valor a 100 pintar en un rojo mas fuerte
        while($temp <= 100){
            echo "<p style='color: rgb($color, 0, 0)'>La Temperatura es: $temp</br></p>";
            $temp++;
            $color += 10;
        }
    ?>
    
</body>

</html>