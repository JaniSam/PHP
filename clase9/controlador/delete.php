<?php

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    require '../modelo/conexion.php';

    $consul = "DELETE FROM clientes WHERE idCliente = $id";
    $resul = $conexion -> query($consul);
    echo "<script>alert('Registro eliminado correctamente')</script>";
    header('location:../vista/index.php');
    mysqli_close($conexion);
} else {
    echo "Ocurrio algun error :(";
    header('location:../vista/index.php');
}


exit;
