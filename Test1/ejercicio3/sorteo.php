<?php
    $personas = array(
        'Juanito', 'Federico', 'Ortencia', 'Humberto', 'Zalustiana'
    );

    $premios = array(
        'olla', 'sarten', 'sabana', 'brasero'
    );

    function Sorteo(){
        global $personas, $premios;
        echo '<h1>GANADORES DEL SORTEO</h1>';
        foreach ($premios as $premiados) {
            $ganador = rand(0, count($personas)-1);
            echo 'El premio: '.$premiados.' es para: '.$personas[$ganador].'<hr>';
            unset($personas[$ganador]) ;
            unset($premios[$premiados]);
            $personas = array_values($personas); // Reindexar el array
            $premios = array_values($premios); // Reindexar el array
        }
    }
    Sorteo();

