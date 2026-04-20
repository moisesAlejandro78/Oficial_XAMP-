<?php
echo "Renombrar archivo inteligentemente <br>";

if ($_FILES['file1']['error'] == UPLOAD_ERR_OK) {

    $nombreOriginal = $_FILES['file1']['name'];
    $origen = $_FILES['file1']['tmp_name'];
    $nombreOriginal = str_replace(" ", "_", $nombreOriginal);
    $fechaHora = date("Y-m-d_H-i-s");
    $nuevoNombre = $fechaHora . "_" . $nombreOriginal;
    $destino = __DIR__ . "/uploads/" . $nuevoNombre;
    if (move_uploaded_file($origen, $destino)) {
        echo "Nombre original: $nombreOriginal <br>";
        echo "Nuevo nombre: $nuevoNombre <br>";
    } else {
        echo "Error al guardar el archivo";
    }

} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_INI_SIZE) {
    echo "El archivo es demasiado grande (php.ini)";
} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_PARTIAL) {
    echo "Subida parcial";
} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_NO_TMP_DIR) {
    echo "Falta la carpeta temporal en el servidor";
} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_NO_FILE) {
    echo "No se subió ningún archivo";
} 
else {
    echo "Error desconocido";
}
?>