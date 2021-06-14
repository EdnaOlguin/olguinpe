
<?php

    $server='localhost';
    $username='root';
    $password='';
    $database='olguinpe';

    try {

        $conn= new PDO("mysql:host=$server;dbname=$database", $username, $password);
        //echo ("conectado");

    } catch (PDOException $e) {
        echo "¡Error, No se pudo conectar la base de datos!: " . $e->getMessage() . "<br/>";
        die();
    }

    $sql="SELECT * FROM Clientes";
    $resultado=$conn->prepare($sql);
    $resultado->execute();
    $data=$resultado->FetchAll(PDO::FETCH_ASSOC);


    foreach($data as $registro){
        echo $registro['IdCliente'].' - '.
            $registro['NombreCliente'].' - '.
            $registro['Colonia'].' - '.
            $registro['Calle'].' - '.
            $registro['NumDomicilio'].' - '.
            $registro['Telefono'].' - '.
            $registro['NumMascotas'].'<br>';
    }

?>