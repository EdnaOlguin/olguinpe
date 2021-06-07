<?php
    include "Conexion.php";
    $resultado = $conn->prepare("SELECT * FROM Clientes");
    $resultado -> execute();

    if ($resultado->rowCount()>0) {
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }else {
        echo 'error';
    }
?>