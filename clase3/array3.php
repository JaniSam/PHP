<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 3</title>
</head>
<body>
    <?php
        $produc = array(
            array("Heladera",2500000,18),
            array("Microondas",1500000, 9),
            array("Cocina",590000,21),
            array("Licuadora",450000,15),
            array("Mixer",260000,5),
            array("Ventilador",150000,15)
        );

        //imprimir todos los valores
        for ($i=0; $i < count($produc) ; $i++) {
            echo "<br>";
            for ($j=0 ; $j < count($produc[$i]) ; $j++ ) { 
                if ($j == 0) {
                    echo "Producto: ";
                }elseif ($j == 1) {
                    echo "Precio: ";
                }else{
                    echo "Cantidad: ";
                }
                echo $produc[$i][$j]." ";
            }
        }

        for ($k=0; $k < count($produc); $k++) { 
            echo "<br>";
            for ($i=0; $i < count($produc[$k]) ; $i++) { 
                if ($produc[$k][1] <= 1000000) {
                    if ($i == 0) {
                        echo "Producto: ";
                    }elseif ($i == 1) {
                        echo "Precio: ";
                    }else{
                        echo "Cantidad: ";
                    }
                    echo $produc[$k][$i]." ";
                }
                
            }
        }
    ?>
</body>
</html>