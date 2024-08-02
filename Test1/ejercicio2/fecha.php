<?php
    $fecha = array(
        'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio',
        'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
    );

    function fechaHoy(){

        global $fecha;
        $mes = date('m')-1;
        echo 'la fecha de hoy es: '. date('d').' / '.$fecha[$mes].' / '. date('Y');
    }

    fechaHoy();
   // echo 'Ahora: '. date('d') .$fecha[6]. date('Y');