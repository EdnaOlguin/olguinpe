<?php
session_start();
if (isset($_SESSION['usuario'])) { 
    header("location: Home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/Estilos.css">
        <link rel="stylesheet" href="./assets/sweetalert2/sweetalert2.min.css">

        <style>
        .bg{
            background-image:url(http://factorypyme.thestandardit.com/wp-content/uploads/sites/5/2016/05/Agenda-las-5.jpg);
            background-position: center ;
            background-size:cover;        
        }
        </style>

    </head>
    <body>
    <div class="container w-75 mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded-sm">

            </div>

            <div class="col bg-white pl-5 pr-5 rounded-sm">

                <h2 class="font-weight-bold text-center py-5">Bienvenido</h2>

                <!--LOGIN--->

                <form id="Formulario" action="#" method="POST" >  
                
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Usuario <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="usuario" id="usuario">
                    </div>
                    <div class="mb-4">
                        <label for="contrasena" class="form-label">Password <span class="text-danger">*</span></label>
                        <input type='password' class="form-control" name="contrasena" id="contrasena">
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="connected" class="form-chek-input" id="Co">
                        <label for="connected" class="form-check-label">Manterme contectado</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" name="submit" id=btnEnviar class="btn btn-primary btn-block">Iniciar Sesión</button>
                    </div>

                    <div class="my-3">
                        <span>No tienes cuenta? <a href="#"> Registrate</a></span><br>
                        <span><a href="#">Recuperar password</a></span>
                    </div>
                </form>

                <!-- LOGIN CON REDES SOCIALES-->
                <div class="container w-100 my-5">
                    <div class="row text-center">
                        <div class="col-12">Iniciar Sesion</div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-outline-primary w-100 my-1">
                                <div class="row aling-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="https://www.pngjoy.com/pngl/51/12662088_logo-facebook-png-transparente-facebook-transparent-background-facebook.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">Facebook</div>
                                </div>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-outline-danger w-100 my-1">
                                <div class="row aling-items-center">
                                    <div class="col-2 d-none d-md-block">
                                        <img src="https://img.icons8.com/color/452/google-logo.png" width="32" alt="">
                                    </div>

                                    <div class="col-12 col-md-10 text-center">Google</div>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/jquery/jquery-3.3.1.min.js"></script>    
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>    
    <script src="./assets/popper/popper.min.js"></script>       
        
    <script src="./assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="./js/Codigo.js"></script>   
    </body>
</html>