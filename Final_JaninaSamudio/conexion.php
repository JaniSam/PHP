<?php
    require 'vars.php';

    $sql = new mysqli($host, $user, $clave, $db, $puerto );

    if ($sql -> errno){
        echo "OCURRIO UN ERROR 🐱";
    } else{
        //echo "ALGO SALIO BIEN 🐱‍👓";
    }