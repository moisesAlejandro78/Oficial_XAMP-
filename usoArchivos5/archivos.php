<?php
    if ($_FILES['file1']['error']==UPLOAD_ERR_OK) {
        $nombre=$_FILES['file1']['name'];
        echo $nombre."<br>";
        $tipo=$_FILES['file1']['type'];
        echo $tipo."<br>";
        $temporal=$_FILES['file1']['tmp_name'];
        echo $temporal."<br>";
        $error=$_FILES['file1']['error'];
        echo $error."<br>";
        $tam=$_FILES['file1']['size'];
        echo $tam."<br>";
        $extension=pathinfo($_FILES['file1']['name'],PATHINFO_EXTENSION);
        echo $extension."<br>";
        if (($extension=="pdf"||$extension=="docx")) {
            # code...
            if ($_FILES['file1']['size']<=2000) {
                # code...
                echo "<h3>archivo valido</h3><br>";
                echo "$nombre - $tam";
            }
            else{
                //echo "<h3>tamano superior a los 2 mb</h3>"; 
                echo "$tam excedido<br>";   
            }
        }
        else{
            echo "$extension extension no permitida<br>";
        }
    }
    else{
            echo "<h3>No cargo ningun archivo</h3>";

    }
?>