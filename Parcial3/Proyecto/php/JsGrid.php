<?php
include 'Conexion.php';

$Nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$Colonia = (isset($_POST['colonia'])) ? $_POST['colonia'] : '';
$Calle = (isset($_POST['calle'])) ? $_POST['calle'] : '';
$NumDomicilio = (isset($_POST['numDomicilio'])) ? $_POST['numDomicilio'] : '';
$Telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$NumMascotas = (isset($_POST['nummascotas'])) ? $_POST['nummascotas'] : '';

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$IdCliente = (isset($_POST['IdCliente'])) ? $_POST['IdCliente'] : '';


switch($opcion){
    case 1:
        $sql = "INSERT INTO Clientes (NombreCliente,Colonia,Calle,NumDomicilio,Telefono,NumMascotas) VALUES('$Nombre', '$Colonia', '$Calle', '$NumDomicilio', '$Telefono', '$NumMascotas') ";			
        $resultado = $conn->prepare($sql);
        $resultado->execute(); 
        
        $sql = "SELECT * FROM Clientes ORDER BY IdCliente DESC LIMIT 1";
        $resultado = $conn->prepare($sql);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $sql = "UPDATE Clientes SET NombreCliente='$Nombre', Colonia='$Colonia', Calle='$Calle', NumDomicilio='$NumDomicilio', Telefono='$Telefono', NumMascotas='$NumMascotas' WHERE IdCliente='$IdCliente'";		
        $resultado = $conn->prepare($sql);
        $resultado->execute();        
        
        $sql = "SELECT * FROM Clientes WHERE IdCliente='$IdCliente'";       
        $resultado = $conn->prepare($sql);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $sql= "DELETE FROM Clientes WHERE IdCliente='$IdCliente' ";		
        $resultado = $conn->prepare($sql);
        $resultado->execute();                           
        break;
    case 4:    
        $sql = "SELECT * FROM Clientes";
        $resultado = $conn->prepare($sql);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data,JSON_UNESCAPED_UNICODE);
$conn=null;
?>