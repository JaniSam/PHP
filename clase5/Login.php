<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if (isset($_SESSION['usuario'])) {
            echo "<p>Bienvenido: ".$_SESSION['usuario'] . "!</p>";
            echo "<p><a href='Logout.php'>Cerrar Sesion</a></p>";
            echo "<br><a href='Dashboard.php>Ir al Panel de Control</a>";
        }
    ?>
    <h2>Acceder</h2>
    <form action="Dashboard.php" method="POST">
        <p><input type="text" placeholder="Usuario" name="usuario" require autofocus/></p>
        <p><input type="submit" value="ACEPTAR"/></p>
    </form>
</body>
</html>