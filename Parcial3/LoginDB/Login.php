<?php

  session_start();

  if(empty($_POST['usuario']) || empty($_POST['contraseña']))
  {
    
    echo "<script>
    alert('Debe Introducir Usuario y/o password');
    window.location = './Index.php';
    </script>";
  }else{

    include 'Conexion.php';

    $Usuario=$_POST['usuario'];
    $Password=$_POST['contraseña'];
    $pass=md5($Password);//encripta la clave enviado por el usuario para compararla con la clave encriptada en la BD 
    var_dump($Usuario);
    var_dump($pass);
    $sql="select usuario,contrasena from Sesion where Usuario='".$Usuario."' and contrasena='".$pass."'";
    $resultado=$conn->prepare($sql);
    $resultado->execute(); 
    var_dump($resultado);

    if($resultado->rowCount()>0){
      $_SESSION['usuario']=$Usuario; 
      echo "<script>
      alert('Acceso exitoso');
      window.location = './Home.php';
      </script>";
    }else{
      $_SESSION["usuario"]=null;  
      echo '<script> alert("Usuario y/o password incorrectos, revise los datos introducidos"); 
                     window.location = "Index.php";
            </script>';
    }
  }

?>