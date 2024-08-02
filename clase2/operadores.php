<?php
    //esto es un comentario
    /*comentario 
    multilineal*/
    ///deinicion de variables y asignacion de datos

    $a = 8;
    $b= 3;

    echo " <h3>OPERACIONES ARITMETICAS</h3>";
    echo "a= ".$a." y b= ".$b;
    echo "<br>LA SUMA DE a + b ES: ".($a+$b);
    echo "<br>LA RESTA DE a + b ES: ".($a-$b);
    echo "<br>LA MULTIPLICACION DE a + b ES: ".($a*$b);
    echo "<br>LA DIVISION DE a + b ES: ".($a/$b);
    echo "<br>LA POTENCIA DE a + b ES: ".($a**$b);
    echo "<br>EL RESTO DE a + b ES: ".($a%$b);
?>
<?php
//operadores de comparacion
    $x = 8;
    $y = 3;
    echo "<h3>OPERADORES DE COMPARACIÓN  Vacio es falso y 1 es verdadero </h3>";
    echo "X= ".$x." e Y= ".$y;
    echo "<br>¿X es igual a Y? ".($x==$y);
    echo "<br>¿X es distinto a Y? ".($x!=$y);
    echo "<br>¿X es menor a Y? ".($x<$y);
    echo "<br>¿X es mayor a Y? ".($x>$y);
    echo "<br>¿X es mayor o igual a Y? ".($x>=$y);
    echo "<br>¿X es menor igual a Y? ".($x<=$y);
?>

<?php 
    echo" <h3>OPERADORES LOGICOS Y, O, NEGACION.</h3>";
    echo "A ES IGUAL A B  Y X ES MAYOR A Y ".($a==$b && $x>$y);
    echo "</br>A ES IGUAL A B  o X ES igual A Y ".($a==$b or $x==$y);
    echo "</br> Negar (B es igual a X) ".!($x==$y);
?>


