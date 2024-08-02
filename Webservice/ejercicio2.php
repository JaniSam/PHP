<?php
    $frutas = array(
        "manzana", "banana", "naranja", "frutilla", "guayaba"
    );

    #convertir array en json
    $arrayJson = json_encode($frutas);

    echo $arrayJson;