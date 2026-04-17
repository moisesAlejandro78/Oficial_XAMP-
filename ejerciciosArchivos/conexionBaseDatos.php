<?php
    $conexion=new mysqli("localhost","root","","pruebapw2b");//para instanciar bse de datos
    if ($conexion->connect_error) {
        die("conexion fallida ".$conexion->connect_error);
        //el die mata conexion

    }
    $sql="INSERT INTO usuarios (nombre,apellido,edad) VALUES 
    ('Pepito','Cachi',18)";
    if ($conexion->query($sql)==true) {
        # code...
        echo "registro creado con exito";
    }
    $conexion->close();
?>