<?php
    session_start();
    

    if(!isset($_SESSION['cliente'])){
        $cliente = $_POST['cliente'];
        $_SESSION['cliente'] = $cliente;
        $cliente = $_SESSION['cliente'];
    }


    if(isset($_POST['enviar'])){
        registrar();
    }

    if(isset($_GET['id'])){
        if($_GET['id'] == "true"){
            echo "holisss";
            header('location: index.php');
            exist;
        }
    }

    if (isset($_GET['id'])) {
        if($_GET['id'] == "false"){
            session_destroy();
            header('location: index.php');
            exit;
        }
    }
    

    function registrar(){
        if (!empty($_POST['cliente']) && !empty($_POST['mensaje'])){
            require 'conexion.php';
            $cliente = $_POST['cliente'];
            $mensaje = $_POST['mensaje'];

            $consulta = "INSERT INTO blog(cliente, mensaje) VALUES ('$cliente','$mensaje')";

            $resul = $sql->query($consulta);

            mysqli_close($sql);

            header('location: index.php');
            exit;            
        }
    }


?>
