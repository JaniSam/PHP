<?php
    session_start();
    require 'conexion.php';

    $consul = "SELECT * FROM blog ORDER by idBlog DESC";
    $resul = $sql->query($consul);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <a href="crud.php?id=false">Salir</a>
    <h2>Registro de Mensajes</h2>

    <form action="crud.php" method="post">
        <?php 
        if(!isset($_SESSION['cliente'])){?>
            <input type="text" placeholder="Usuario" id="cliente" name="cliente">
        <?php } else {?>
            <input type="text" placeholder="Usuario" id="cliente" name="cliente" value="<?php echo $_SESSION['cliente'] ?>" readonly>
        <?php } ?>
        <input type="text" placeholder="Mensaje" id="mensaje" name="mensaje">
        <button type="submit" name="enviar">Aceptar</button>
    </form>
    <a href="crud.php?id=true">Refresh</a>
    <div class="table-responsive">
        <table class="table align-middle">
            <thead>
                <tr>
                    <td><b>Usuario</b></td>
                    <td><b>Mensaje</b></td>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($resul != null) {
                        foreach ($resul as $e) {
                            echo "<tr class='align-bottom'>";
                            echo "<td class='align-top'>".$e['cliente']." :</td>";
                            echo "<td class='align-top'>".$e['mensaje']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "NO HAY MENSAJES";
                    }
                    
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>