<?php
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        $extension=pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION);
        $tipoSubtipo=mime_content_type($_FILES['file1']['tmp_name'],);
        echo $tipoSubtipo;
        if ($extension=="jpg"||$extension=="png") {
            # code...

        }
    }
    else{
        echo "Hubo un error";
    }
?>