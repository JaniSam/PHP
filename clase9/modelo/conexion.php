<?php
    require 'vars.php';

    $conexion = new mysqli($host,$user,$password,$db,$puerto);

    if ($conexion -> errno) {
        echo "Algo salió mal :(";
    } else {
        //echo "Algo salió bien :)";
    }
    

?>