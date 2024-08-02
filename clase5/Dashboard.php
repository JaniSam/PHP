<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>SESION ABIERTA</h2>
    <p>
        <?php
            if (isset($_POST['usuario'])) {
                $_SESSION['usuario'] = $_POST['usuario'];
                echo "Bienvenido: <br> ".$_POST['usuario']."</br>";
            } else {
                if (isset($_SESSION['usuario'])) {
                    echo "Haz iniciado Sesion como ".$_SESSION['usuario'];
                } else {
                    #si la sesion expira
                    echo "Acceso Restringido";
                }
                
            }
        ?>
    </p>
    <br>
        <p><a href="Login.php">Ir a la Pagina Inicial</a></p>
    <br>
        <p><a href="Logout.php">Cerrar Sesion</a></p>
</body>
</html>