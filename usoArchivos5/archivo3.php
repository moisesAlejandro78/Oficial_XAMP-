<?php
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        $nombre=$_FILES['file1']['name'];
        echo date("Y-m-d H:i:s")."_$nombre<br>";
        $origen=$_FILES['file1']['tmp_name'];
        $nuevoNombre="nombrePrueba.jpg";
        $destino=__DIR__."/uploads/".$nuevoNombre;
        move_uploaded_file($origen,$destino);
        echo $nuevoNombre;
    }
    else if ($_FILES['file1']['error']==UPLOAD_ERR_INI_SIZE) {
        # code...
        echo   "el archivo demasiado grande (php.ini)";
    }
    else if ($_FILES['file1']['error']==UPLOAD_ERR_PARTIAL) {
        # code...
        echo   "Subida parcial.";
    }
    else if ($_FILES['file1']['error']==UPLOAD_ERR_NO_TMP_DIR) {
        # code...
        echo   "Falta la carpeta temporal en el servidor";
    }
    else if ($_FILES['file1']['error']==UPLOAD_ERR_NO_FILE) {
        # code...
        echo   "No se subio ningun archivo";
    }
    else{
        echo   "Error desconocido";
    }
?>