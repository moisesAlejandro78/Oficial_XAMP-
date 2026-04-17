<?php
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        # code...
        echo   "Archivo subido correctamente";
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