<?php
    session_start();
    require '../modelo/Perro.php';

    if (!isset($_SESSION['perro'])) {
        $_SESSION['perro'] = array();
    }

    if (isset($_POST['aceptar'])) {
        agregarPerro();
    }

    if(isset($_GET['logout'])){
        if($_GET['logout'] == 'true'){
            session_destroy();
            header('location: ../vista/index.php');
            exit;
        }
    }

    function agregarPerro(){
        if (isset($_POST)) {
        
            $perro= new Perro(
                $_POST['peso'],
                $_POST['especie'],
                $_POST['nombre'],
                $_POST['edad']
            );          

            //array_push($_SESSION['perro'],$perro);
            // Serializa el objeto perro antes de agregarlo a la sesión.
            $_SESSION['perro'] [] = serialize($perro);
            header('location: ../vista/index.php');
            exit;
    
        }
    }
    