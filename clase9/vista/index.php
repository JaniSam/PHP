<?php
    require '../modelo/conexion.php';
    require '../controlador/read.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h2>REGISTRO CLIENTES</h2>
    <form action="../controlador/create.php" method="post">
        <input type="number" name="ci" id="ci" require autocomplete="off" placeholder="Cedula">
        <input type="text" name="nomAp" id="nomAp" require autocomplete="off" placeholder="Nombre y Apellido">
        <input type="number" name="tel" id="tel" require autocomplete="off" placeholder="Telefono">
        <input type="submit" value="ACEPTAR" name="regisCli">
    </form>
    <?php 
    if ($resul -> num_rows > 0) { 
        echo "<table>";   
            echo "<tr>";
                echo "<td>CEDULA</td>";
                echo "<td>NOMBRE Y APELLIDO</td>";
                echo "<td>TELEFONO</td>";
                echo "<td>ELIMINAR</td>";
            echo "</tr>";
            while ($a = $resul->fetch_assoc()) {
                echo "<tr>";
                    $id = $a['idCliente'];
                    echo "<td>".$a['cedula']."</td>";
                    echo "<td>".$a['nombreApellido']."</td>";
                    echo "<td>".$a['telefono']."</td>";
                    ?>
                    <td><a href="../controlador/delete.php?id=<?php echo $id ?>">Eliminar</a></td>
                    <?php
                echo "</tr>";
            }
        echo "</table>";
    } else {
        echo "NO HAY REGISTROS";
    }?>
</body>
</html>
