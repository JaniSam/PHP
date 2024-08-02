<?php 
    //require '../controlador/create.php';
    session_start();
    require '../modelo/Perro.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Perritos</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
    <a href="../controlador/create.php?logout=true">Salir</a>
    <form action="../controlador/create.php" method="POST">
        <input type="text" name="especie" id="especie" placeholder="Especie">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="edad" id="edad" placeholder="Edad">
        <input type="text" name="peso" id="peso" placeholder="Peso">
        <button type="submit" name="aceptar">Aceptar</button>
    </form>
        
    <table class="table">
                      
        <?php 
            if (isset($_SESSION['perro'])) {
                ?>
                <thead>
            <tr>
                <th scope="col">Raza</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Edad*7</th>
                <th scope="col">Peso</th>
            </tr>
        </thead> 
                <?php
                foreach ($_SESSION['perro'] as $perro1) {
                    $perro = unserialize($perro1);
                    echo "<tbody>";
                    echo "<tr>";
                        echo "<td>".$perro->getEspecie()."</td>";
                        echo "";
                        echo "<td>".$perro->getNombre()."</td>";
                        echo "<td>".$perro->getEdad()."</td>";
                        echo "<td>".$perro->getEdadAnimal()."</td>";
                        echo "<td>".$perro->getPeso()."</td>";
                    echo "</tbody>";
                }
            } else {
                echo 'NO SE HA REGISTRADO NIGUN PERRITO 😿';
            }
        ?>
        </table>
</body>
</html>