<?php
    
    $nomAp = $_POST['nomAp'];
    $ci = $_POST['ci'];
    $tel = $_POST['tel'];

    if (!empty($_POST['regisCli'])) {
        require '../modelo/conexion.php';

        $consul = "INSERT INTO clientes (cedula,nombreApellido, telefono) VALUES ('$ci','$nomAp','$tel')";
        $resul = $conexion -> query($consul);
        echo "<script>alert('Registro insertado correctamente')</script>";

        mysqli_close($conexion);
    } else {
        echo "Ocurrio algun error :(";
    }

    header('location:../vista/index.php');
    exit;
    
?>

