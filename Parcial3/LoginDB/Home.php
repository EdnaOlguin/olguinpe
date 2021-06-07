<?php
session_start();
if($_SESSION["usuario"]==null){
    header("location:Index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Bienvenida</title>
</head>
<body>
    <h2> <?php echo "<h4>Bienvenido al sistema,".$_SESSION['usuario'];"</h4>"?></h2>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Novedades</a></li>
        <li><a href="#">Informacion</a></li>
        <li><a href="Logout.php">cerrar sesion</a></li>
    </ul> 
</body>
</html>
