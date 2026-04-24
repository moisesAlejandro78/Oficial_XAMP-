<?php
    $con=new mysqli('localhost','root','','pw2b');
    if ($con->connect_error) {
        # code...
        die('error en la conexion en la base de datos: '.$con->connect_error)."<br>";
    }
    else{
        echo "conexion exitosa con la BD<br>";
    }
    //abm=altas bajas y modifcaciones
    //altas=crear registros
    //bajar=eliminar registros
    //modifciaciones=actualizar registros
    //insertar datos (altas)
    /*$sql="insert into usuarios(nombre,edad) values ('pepito',18), ('Alexandros',34)";
    if ($con->query($sql)===true) {
        # code...
        echo "registros creado con exito<br>";
    }*/
    //actualizar datos (modficaciones)
    /*$sql="update usuarios set edad=19 where nombre='pepito'";
    if ($con->query($sql)===true) {
        # code...
        echo "Registro actualizado";
    }*/
    //bajas
    $sql="delete from usuarios where nombre='pepito'";
    if ($con->query($sql)===true) {
        # code...
        echo "Registro eliminado";
    }
    $con->close();//para cerrrar la conexion a la base de datos
?>