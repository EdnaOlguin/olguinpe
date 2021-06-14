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

        <!--Estilos css iconos Fontawesome-->
        <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
        <!--Estilos css bootstrap-->
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <!--Estilos css sweetalert-->
        <link rel="stylesheet" href="./assets/sweetalert2/sweetalert2.min.css">
        <!--Estilos css JsGrid-->
    
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
      
    </head>    
    <body>
 
    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h2 class="text-white">Gestionar Veterinaria</h2>
                <h4><?php echo "<h4 class='text-white'>Usuario:".$_SESSION['usuario'];"</h4>"?></h4>
            </div>
            <div class="card-body">

                <form action="" id="formPersonas">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Intoduzca su nombre" autofocus>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="colonia">Colonia:</label>
                            <input type="text" class="form-control" name="colonia" id="colonia" placeholder="Intoduzca la colonia" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <label for="calle">Calle:</label>
                            <input type="text" class="form-control" name="calle" id="calle" placeholder="Intoduzca la calle" autofocus>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                            <label for="numDomicilio">Num. Domicilio:</label>
                            <input type="text" class="form-control" name="numDomicilio" id="numDomicilio" placeholder="Intoduzca Num. Domicilio" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Introduzca su telefono" autofocus>
                        </div>
                        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                            <label for="nummascotas">Num. Mascotas:</label>
                            <input type="text" class="form-control" name="nummascotas" id="nummascotas" placeholder="Digite el numero de Mascotas" autofocus>
                        </div>
                    </div>
                    <div class="btn-group-sm">
                        <button class="btn btn-outline-info" Type="Submit" id="btnGuardar"><span class="fa fa-save"></span> Guardar</button>
                        <button class="btn btn-outline-info" Type="Submit" id="btnActualizar"><span class="fa fa-pencil-alt"></span> Modificar</button>
                    </div>
                </form>
            </div>    

             
            <div class="card-footer">
                <table class="table table-striped" style="width:100%" id="tablaPersona">
                    <thead>
                        <tr>
                            <th>IdCliente</th>
                            <th>Nombre</th>
                            <th>Colonia</th>
                            <th>Calle</th>
                            <th>Num. Domicilio</th>
                            <th>Telefono</th>
                            <th>Num. Mascotas</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody> 
                    </tbody>
                </table>
            </div>   
            <a class="btn btn-danger btn-lg" href="./php/Logout.php" role="button">Cerrar Sesión</a>
        </div>
    </div>


    <script src="./assets/jquery/jquery-3.3.1.min.js"></script>  
     <script src="./assets/bootstrap/js/bootstrap.min.js"></script>   
     <script src="./assets/datatables/datatables.min.js"></script> 
     <script src="./assets/popper/popper.min.js"></script>     
     <script src="./assets/sweetalert2/sweetalert2.all.min.js"></script>     
     <script src="./js/JsGrid.js"></script>
    </body>
</html>