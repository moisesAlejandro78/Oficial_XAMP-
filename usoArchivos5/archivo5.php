<?php
echo "Subida múltiple con resumen <br>";

$correctos = 0;
$fallidos = 0;
$listaSubidos = [];

if (!empty($_FILES['file1']['name'][0])) {

    for ($i = 0; $i < count($_FILES['file1']['name']); $i++) {

        $nombre = $_FILES['file1']['name'][$i];
        $tmp = $_FILES['file1']['tmp_name'][$i];
        $error = $_FILES['file1']['error'][$i];

        if ($error == UPLOAD_ERR_OK) {

            $destino = __DIR__ . "/uploads/" . $nombre;

            if (move_uploaded_file($tmp, $destino)) {
                $correctos++;
                $listaSubidos[] = $nombre;
            } else {
                $fallidos++;
            }

        } else {
            $fallidos++;
        }
    }

    echo "<h3>Resumen</h3>";
    echo "Archivos subidos correctamente: $correctos <br>";
    echo "Archivos fallidos: $fallidos <br>";

    if (!empty($listaSubidos)) {
        echo "<h3>Lista de archivos subidos:</h3>";

        foreach ($listaSubidos as $archivo) {
            echo "- $archivo <br>";
        }
    }

} else {
    echo "No se seleccionaron archivos";
}
?>
