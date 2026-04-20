<?php
echo "Validación de imágenes reales <br>";

if ($_FILES['file1']['error'] == UPLOAD_ERR_OK) {

    $nombre = $_FILES['file1']['name'];
    $tam = $_FILES['file1']['size'];
    $tmp = $_FILES['file1']['tmp_name'];
    $extension = strtolower(pathinfo($nombre, PATHINFO_EXTENSION));
    $tipoReal = mime_content_type($tmp);
    $extensionValida = ($extension == "jpg" || $extension == "png");
    $mimeValido = ($tipoReal == "image/jpeg" || $tipoReal == "image/png");
    $tamValido = ($tam <= 1024 * 1024); // 1MB

    if ($extensionValida && $mimeValido && $tamValido) {

        echo "<h3>Imagen válida</h3>";
        echo "Nombre: $nombre <br>";
        echo "Tipo real: $tipoReal <br>";
        echo "Tamaño: " . round($tam / 1024) . " KB";

    } 
    else {

        if (!$extensionValida) {
            echo " Extensión no permitida <br>";
        }

        if (!$mimeValido) {
            echo " El archivo no es una imagen real <br>";
        }

        if (!$tamValido) {
            echo " Tamaño excedido (máximo 1MB) <br>";
        }
    }

} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_NO_FILE) {
    echo "No se subió ningún archivo";
} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_INI_SIZE) {
    echo "Archivo demasiado grande (php.ini)";
} 
else if ($_FILES['file1']['error'] == UPLOAD_ERR_PARTIAL) {
    echo "Subida parcial";
} 
else {
    echo "Error en la subida";
}
?>
