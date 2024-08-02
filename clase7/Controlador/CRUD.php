<?php
    
    session_start();
    require '../Modelo/models.php';

    //si no existe la variable de sesion, se crea y se lo asigna como array.
    if (!isset($_SESSION['cliente'])) {
        $_SESSION['cliente'] = array();
    }

    if (isset($_POST['enviar'])) {
        agregarCliente();
    }

    if (isset($_GET['logout'])) {
        if ($_GET['logout'] == "true") {
            session_destroy();
            //al termino de la insercion de los datos, vuelve a la pagina principal
            header("location: ../Vista/index.php");
            //finalizar la ejecucion del script...
            exit();

        }
    }

    //creacion de la funcion agregar cliente
    function agregarCliente(){
        /*si existe un post, se extraen los datos del formulario, y se agregan a los atributos 
          de las clases creadas anteriormente
        */
        if (isset($_POST)) {
            //creacion de un objeto de tipo cliente, por la clase cliente
            $cliente = new Cliente(
                $_POST['nomAp'],
                $_POST['ci'],
                $_POST['fc'],
                $_POST['tel'],
                $_POST['dir']
            );

            //insertar elementos al final del array
            array_push($_SESSION['cliente'],$_POST['nomAp']);

            //al termino de la insercion de los datos, vuelve a la pagina principal
            header("location: ../Vista/index.php");
            //finalizar la ejecucion del script...
            exit();

        }
    }
?>