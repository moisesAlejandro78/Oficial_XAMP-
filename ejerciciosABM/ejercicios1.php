<?php
    session_start();
    $persona=new mysqli('localhost','root','','personas');
    if ($persona->connect_error) {
        die('error en la conexion en la base de datos'.$persona->connect_error.'<br>');
    }
    else{
        echo "Conexion exitosa con al base de datos<br>";
    }
    //insertar
    $nombre='Moises';$edad=23;
    $consultaSQL="insert into personasusuarios (Nombre,Edad) values ('$nombre',$edad), ('Alejandro',28),
    ('Tron',32)";
    if ($persona->query($consultaSQL)===true) {
        # code...
        $_SESSION['usuario']=$nombre;

        echo "usuario creado con exito<br>";
    }
    else{
        echo "Error al crear los registros";
    }
    $persona->close();
?>