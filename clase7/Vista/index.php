<?php
    //iniciar la variable de sesion
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <!--boton/enlace utlizando el metodo get con una variable y valor inicial-->
    <a href="../Controlador/CRUD.php?logout=true">SALIR</a>
    <h2>Registro del Formulario</h2>
    <!--formulario para el registro utilizanod el metodo post-->
    <form action="../Controlador/CRUD.php" method="POST">
        <input type="text" placeholder="Nombre y Apellido" name="nomAp" require>
        <input type="text" placeholder="Cedula" name="ci" require>
        <input type="text" placeholder="Fecha de Nacimiento" name="fc" require>
        <input type="text" placeholder="Telefono" name="tel" require>
        <input type="text" placeholder="Direccion" name="dir" require>
        <button name="enviar">ACEPTAR</button>
    </form>

    <!--table para mostrar los registros-->
    <h2>REGISTROS</h2>
    <table>
        <?php
            if (isset($_SESSION['cliente'])) {
                foreach ($_SESSION['cliente'] as $cliente) {
                    echo "<tr>";
                    echo "<td>".$cliente."</td>";
                    echo "</tr>";
                }
            } else {
                echo "TABLA VACÍA";
            }
        ?>
    </table>

</body>
</html>