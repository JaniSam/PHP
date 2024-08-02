<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY 2</title>
</head>
<body>
    <?php
        $edades = array("Moises"=>"33","Camila"=>"25","Samanta"=>"17");
        echo "Camila tiene ".$edades['Camila']." años de edad. <br>";

        foreach ($edades as $x => $valor) {
            echo "Clave= ".$x." valor: ".$valor;
            echo "<br>";
        }
    ?>
</body>
</html>