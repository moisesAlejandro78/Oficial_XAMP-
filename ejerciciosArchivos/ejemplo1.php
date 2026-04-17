<?php
    if ($_FILES["archivo"]["error"]==UPLOAD_ERR_OK) {
        $nombre_temp=$_FILES["archivo"]["tmp_name"];
        $nombre_archivo=$_FILES["archivo"]["name"];
        move_uploaded_file($nombre_temp,"Uploads/$nombre_archivo");
        echo "Archivo Cargado correctamente $nombre_archivo";
    }
    else {
        echo "error al cargar el archivo";
    }
?>