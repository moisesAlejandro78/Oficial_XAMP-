<?php
    //cookie
    setcookie('usuario','pepito',time()+(86400*30),'/');//establecemos una cookie para 30 dias
    echo "cookie 'usuario' establecida<br>";
    //sesion
    //descripcion y sintaxis de todos los session
    session_start();
    $_SESSION['usuario']="Don jose";
    echo "sesion iniciada para el usuario: ".$_SESSION['usuario']."<br>";
    //excepciones
    try {
        //code...
        if (!file_exists("pw2.txt")) {
            # code...
            throw new Exception("archivo no encontrado");
        }//con el throw new exception hacemos varias excepciones que queramos...

    } catch (Exception $e) {
        //throw $th;
        echo "Excepcion capturada".$e->getMessage()."<br>";
    }
?>