<?php
    
    require '../modelo/conexion.php';

    $reguistros = "SELECT * FROM clientes";
    $resul = $conexion->query($reguistros);
    
    //header('location:../vista/index.php');
    //exit;
?>