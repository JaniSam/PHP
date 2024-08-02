<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
    <?php
        //array 
        $dia[0]="Domingo";
        $dia[1]="Lunes";
        $dia[2]="Martes";
        $dia[3]="Miércoles";
        $dia[4]="Jueves";
        $dia[5]="Viernes";
        $dia[6]="Sábado";
        //array de mes
        $mes= array ("Enero","Febrero", "Marzo","Abril");

        //mostrar el vienes
        echo "Día: ".$dia[5]."<br>";

        //imprimir mes febrero
        echo "Mes: ".$mes[1];
    ?>
    <?php
        $auto = array("Volvo","BMW","Toyota");
        $arrayLo= count($auto);
        for ($i=0; $i < $arrayLo; $i++) { 
            echo $auto[$i];
            echo "<br>";
        }


        $hoy= date("N");
        print("El valor de hoy: ".$hoy);
        print("</br>Hoy es: ".$dia[$hoy]);
        
        print("<h4>Los dias de la semana son: </h4>");
        for ($i=0; $i < count($dia); $i++) { 
            if ($i == $hoy) {
                print("<h2 style='background-color: brown; display: inline;'>".$dia[$hoy]."</h2> </br>");
            }else {
                print("<h2 >".$dia[$i]."</h2> </br>");
            }
        }
    ?>
</body>
</html>