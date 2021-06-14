<?php
session_start();

if($_SESSION["usuario"] === null){
    header("Location:Index.php");
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>

        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/sweetalert2/sweetalert2.min.css">
      
    </head>    
    <body>
      
    <h2> <?php echo "<h4>Bienvenido al sistema,".$_SESSION['usuario'];"</h4>"?></h2>
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Novedades</a></li>
        <li><a href="#">Informacion</a></li>
        <li><a href="./php/Logout.php">cerrar sesion</a></li>
    </ul>        
     <script src="./assets/jquery/jquery-3.3.1.min.js"></script>    
     <script src="./assets/bootstrap/js/bootstrap.min.js"></script>    
     <script src="./assets/popper/popper.min.js"></script>    
        
     <script src="./assets/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="./js/Codigo.js"></script>    
    </body>
</html>