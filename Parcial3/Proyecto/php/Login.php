<?php
session_start();

include_once 'Conexion.php';
/*$objeto = new conexion();
$conexion = $objeto->Conectar();*/


$usuario = (isset($_POST['usuariophp'])) ? $_POST['usuariophp'] : '';
$password = (isset($_POST['contrasenaphp'])) ? $_POST['contrasenaphp'] : '';

$pass = md5($password); //encripta la clave enviado por el usuario para compararla con la clave encriptada en la BD 

$consulta = "SELECT * FROM sesion WHERE usuario='$usuario' AND contrasena='$pass' ";
$resultado = $conn->prepare($consulta);
$resultado->execute();

if($resultado->rowCount() >= 1){
    $data = $resultado->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["usuario"] = $usuario;
}else{
    $_SESSION["usuario"] = null;
    $data=null;
}

print json_encode($data);
$conexion=null;
